$(document).ready(function () {
    $("#search-btn").click(function (event) {
        event.preventDefault();

        // Retrieve the search parameters from the form
        var from = $("#from").val();
        var to = $("#to").val();
        var departure = $("#departure").val();

        // Send the AJAX request to the server
        $.ajax({
            url: "/search-cabs",
            method: "POST",
            dataType: "html", // Set the dataType to "html"
            data: {
                from: from,
                to: to,
                departure: departure,
            },
            success: function (response) {
                // Handle success response
                $("#result").html(response); // Assuming there is an element with id "result" where you want to display the response
            },
            error: function (xhr, status, error) {
                // Handle error response
            },
        });
    });
});
