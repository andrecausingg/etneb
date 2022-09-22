$(document).ready(function(){

    // Sign Up
    // Show Creating Account
    $("#signUpBtn").click(function(){
        // Show Sign up Form
        $("#signUpContainerCreate").show();
        // No scroll
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    });

    // Hide Creating Account
    $("#closeSignUpFormCreate").click(function(){
        $("#signUpContainerCreate").hide();
    })

    // Hide Success Create Account
    $("#successCreateBtn").click(function(){
        $("#signUpContainerSuccess").hide();
    })
});