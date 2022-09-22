$(document).ready(function () {
    // ID on form signUp
    $('#forgotPasswordForm').submit(function(e){
        e.preventDefault();

        // Get the value and put in Variable
        var forgotPasswordEmail = $('#forgotPasswordEmail').val();

        // Show the loader
        $("#forgotPasswordLoader").show();
        // Hide the forgotPassword btn
        $("#forgotPasswordBtn").hide();

        $.ajax({
            url: 'http://localhost/etneb/app/php/forgot-passwordMF.php', // Backend Script on forgot-passwordMF.php
            type: 'POST', // Type POST 
            data: { 
                email: forgotPasswordEmail, // use $_POST["email"] on Backend to get the data of email
            },
            
            // Displaying the return message on Backend Script on forgot-passwordMF.php
            success: function (data){
                if((data != "")){
                    $("#forgotPasswordLoader").hide();
                    $("#forgotPasswordBtn").show();

                    if(data == "Check your Email to reset your password"){
                        $('#forgotPasswordSuccessSend').html(data);
                    }else{
                        // This #signUpError will display the result on forgot-passwordMF.php
                        $('#forgotPasswordError').html(data);
                    }
                }
            }
        })
    });
    return false;
});
