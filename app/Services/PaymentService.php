<?php

namespace App\Services;

use App\Models\Payment;

/**
 * Class PaymentService.
 */
class PaymentService
{
    public function generateInvoice(array $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/merchant/api/paymentinit',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "serviceTypeId": "4430731",
            "amount": "'.$data['amount'].'",
            "orderId": "'.$data['transactionId'].'",
            "payerName": "'.$data['firstName'].' '.$data['lastName'].'",
            "payerEmail": "'.$data['email'].'",
            "payerPhone": "'.$data['payerPhone'].'",
            "description": "'.$data['description'].'"

        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: remitaConsumerKey=2547916,remitaConsumerToken='.$data['apiHash']
          ),
        ));

        $response = curl_exec($curl);


        curl_close($curl);

        return PaymentService::convertJsonToArray($response);


      }
    public static function convertJsonToArray(string $response='',bool $assoc = false): object
    {
      if($response[0] !== '[' && $response[0] !== '{') { // we have JSONP
          $response = substr($response, strpos($response, '('));
          return json_decode(trim($response,'();'), $assoc);
       }
       return json_decode(trim($response));

    }
    private function generateTransactionId():string
    {
        $transcId =substr (md5(uniqid(rand(),true)), 0, 4);
        $tran=strtoupper($transcId);
        return "Ayyah".$today =date("Ymd").$tran;
    }
    public function createPayment($data)
    {
        $values = $this->generateInvoice($data);
        if(!empty($values)){
            Payment::create([
                'transaction_id' => $data['transactionId'],
                'first_name' => $data['firstName'],
                'last_name' => $data['lastName'],
                'phone' => $data['payerPhone'],
                'meeting_point' => $data['meeting_point'],
                'amount' => $data['amount'],
                'date' => now(),
                'status' => $data['statuscode'],
                'resource' => $data['description'],
                'RRR' => $data['RRR']
            ]
            );

        }
    }

}
