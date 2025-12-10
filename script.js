$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); 

        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#result').html(response).fadeIn();
                $('#registrationForm')[0].reset();
            },
            error: function() {
                $('#result').html('<p style="color:red;">There was an error. Please try again.</p>').fadeIn();
            }
        });
    });
});
