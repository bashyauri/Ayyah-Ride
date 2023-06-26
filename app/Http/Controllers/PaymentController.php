<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function __construct(protected PaymentService $paymentService )
    {}

    public function makePayment(PaymentRequest $request)
    {

        $data = $request->validated();

        $data['transactionId'] =$this->generateTransactionId() ;


        $valuesToHash = "2547916" . "4430731" .
        $data['transactionId']. $data['amount'] . "1946";
        $data['apiHash'] = hash('sha512', $valuesToHash);
        try {
            $response = $this->paymentService->generateInvoice($data);

                $data['RRR'] = $response->RRR;
                $data['statuscode'] = $response->statuscode;
                $data['status'] = $response->status;

                $this->paymentService->createPayment($data);

               // return view('nds.payment')->with($data);
            return view('invoice')->with(['success_message',$response->status,'RRR' =>$response->RRR] );

        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['error_message' => 'Something went wrong:'.$response->status]);
        }

    }
    public function handleResponse(Request $request)
    {
        // Retrieve the response data from the request
        $response = $request->all();
        dd($response);
        // Process the response data as needed
        // You can access specific fields using $response['field_name']

        // Example: Log the response data
        Log::info('Payment Response:', $response);

        // Return a response or redirect as per your application logic
    }
    private function generateTransactionId():string
    {
        $transcId =substr (md5(uniqid(rand(),true)), 0, 4);
        $tran=strtoupper($transcId);
        return "Ayyah".$today =date("Ymd").$tran;
    }
}
