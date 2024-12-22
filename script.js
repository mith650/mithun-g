$(document).ready(function () {
    $("#application-form").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = $(this).serialize();

        // Display the submitted data on the page
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: formData,
            success: function (response) {
                // Show the output div and display the returned data
                $("#form-output").show().html(response);
                // Optionally, clear the form fields after successful submission
                $("#application-form")[0].reset();
            },
            error: function () {
                alert("There was an error submitting the form. Please try again.");
            }
        });
    });
});
