$(document).ready(function(){
    // Forgot Password
    $("#forgotPassword").click(function(){
        $(".loginContainerJs").hide();
        $("#forgotPasswordContainer").show();
    });


    $("#closeForgotPassword").click(function(){
        $("#forgotPasswordContainer").hide();
    })
});