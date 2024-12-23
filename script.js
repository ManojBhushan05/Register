$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        e.preventDefault();
        
        const formData = $(this).serialize();

        $.ajax({
            url: "process.php",
            type: "POST",
            data: formData,
            success: function (response) {
                $("#responseMessage").html(response).fadeIn();
                $("#registrationForm")[0].reset();
            },
            error: function () {
                $("#responseMessage").html("<p class='error'>Something went wrong. Please try again.</p>").fadeIn();
            },
        });
    });
});
