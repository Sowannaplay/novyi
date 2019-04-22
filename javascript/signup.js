$(document).ready(function() {

   //  $('#login_btn').click(function () {
   //      $("#first_name, #last_name").hide();
   //      $('#first_name, #last_name').prop('disabled', true);
   //      $('p').text('Log In');
   //      $('.submit_btn').text('LOG IN');
   //      $('.centered-form__form').width(432.46);
   //      $('.centered-form').display('flex');
   // });

    // $('#signup_btn').click(function () {
    //     $("#first_name, #last_name").show();
    //     $('#first_name, #last_name').prop('disabled', false);
    //     $('p').text('Sign Up for Free');
    //     $('.submit_btn').text('GET STARTED');
    // });

    var email = document.getElementById('input_email');
    var password = document.getElementById('input_password');
    var first_name = document.getElementById('first_name');
    var last_name = document.getElementById('last_name');

    email.addEventListener('input', function (event) {
        if (email.validity.typeMismatch) {
            email.setCustomValidity('Please enter valid email address!');
        } else {
            email.setCustomValidity('');
        }
    });

    password.addEventListener('input', function (event) {
        if (password.validity.patternMismatch) {
            password.setCustomValidity('Password should be between 8 and 20 characters; must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, but cannot contain whitespace.');
        } else {
            password.setCustomValidity('');
        }
    });

    first_name.addEventListener('input', function (event) {
        if (first_name.validity.patternMismatch) {
            first_name.setCustomValidity('You can use only alphabetic characters, minimum 2, max - 20, first character should be in upper case.')
        } else {
            first_name.setCustomValidity('');
        }
    });


    last_name.addEventListener('input', function (event) {
        if (last_name.validity.patternMismatch) {
            last_name.setCustomValidity('You can use only alphabetic characters, minimum 2, max - 20, first character should be in upper case.')
        } else {
            last_name.setCustomValidity('');
        }
    });

});



