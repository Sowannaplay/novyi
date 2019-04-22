$(document).ready(function() {

    var email = document.getElementById('input_email');
    var password = document.getElementById('input_password');

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

});



