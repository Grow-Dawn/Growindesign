// Uses jquery syntax.

$(document).ready(function () {
    $('#buttonLogin').click(function () {
        $('#loginform').submit();
    });
    $('#buttonRegister').click(function () {
        $('#registerform').submit();
    });
});
(function ($, W, D)
{
    var JQUERY4U = {};
    JQUERY4U.UTIL =
            {
                setupFormValidation: function ()
                {
//validation rules
                    $("#registerform").validate({
                        rules: {
                            firstname: {
                                required: true,
                                minlength: 3
                            },
                            lastname: {
                                required: true,
                                minlength: 4
                            },
                            emailreg: {
                                required: true,
                                email: true
                            },
                            passwordreg1: {
                                required: true,
                                minlength: 5
                            },
                        },
                        messages: {
                            firstname: {
                                required: "Please provide a first name",
                                minlength: "Your first name must be at least 3 characters long"
                            },
                            lastname: {
                                required: "Please provide a last name",
                                minlength: "Your last name must be at least 4 characters long"
                            },
                            passwordreg1: {
                                required: "Please provide a password",
                                minlength: "Your password must be at least 5 characters long"
                            },
                            emailreg: "Please enter a valid email address",
                        },
                        submitHandler: function (form) {
                            form.submit();
                        }
                    });
                }
            }
//setup form validation rules
    $(D).ready(function ($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
})(jQuery, window, document);