$(document).ready(function(){
    // Sign Up Password
    $("#sigupPasswordIcon").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#signUpPassword");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password');
    });

    // Sign Up Confirm Password
    $("#sigupConfirmPasswordIcon").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#signupConfirmPassword");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password');
    });


    // Log in Password
    $("#loginPasswordIcon").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#loginPassword");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password');
    });

    // Reset New Password
    $("#resetNewPasswordIcon").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#newResetPassword");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password');
    });

    // Reset Confirm New Password
    $("#resetConfirmNewPasswordIcon").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#confirmNewResetPassword");
        input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password');
    });
});

