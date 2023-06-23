$(document).ready(function () {
    $(".recommend-checkbox").on("change", function () {
        var driverId = $(this).data("driver-id");
        var isApproved = $(this).prop("checked");

        $.ajax({
            url: "approve-driver",
            method: "POST",
            data: {
                driverId: driverId,
                isApproved: isApproved,
            },
            success: function (response) {
                // Handle success response
            },
            error: function (xhr, status, error) {
                // Handle error response
            },
        });
    });
});
