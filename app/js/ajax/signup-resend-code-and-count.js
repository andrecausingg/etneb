$(document).ready(function(){
    $("#resendCode").click(function(){
        // Resend Btn
        var resendCode = $("#resendCode").html();
        $.ajax({
            url: 'http://localhost/etneb/app/php/signup-email-verificationMF.php', // Backend Script on signupF.php
            type: 'POST', // Type POST 
            data: { 
    //  This Area for PHP | THis area for JS
                resendCode: resendCode, // use $_POST["resendCode"] on Backend to get the data of code1
            },
            
            // Displaying the return message on Backend Script on signupF.php
            success: function (data){
                // This #signUpError will display the result on signupF.php
                $('#resendCodeMessage').html(data);
            }
        })

        // Timer hide resendCode Btn
        var counter = 30;
        // Count to Minus
        --counter;
        var myInterval = setInterval(function(){
            // Displaying the Countdown
            $("#countResendCode").html("Resend Code After " + --counter);
            // Hide the resendCode Btn
            $("#resendCode").hide();
            // Condition to stop the count and show the resendCode Btn
            if(counter <= 0){
                $("#resendCode").show();
                $('#resendCodeMessage').hide();
                $("#countResendCode").html(" ");
                clearInterval(myInterval);
            }
        }, 1000);
    });
});