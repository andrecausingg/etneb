$(document).ready(function () {
    // ID on form signUp
    $('#emailVerifyForm').submit(function(e){
        e.preventDefault();

        // Get the value and put in Variable
        var code1 = $('#code1').val();
        var code2 = $('#code2').val();
        var code3 = $('#code3').val();
        var code4 = $('#code4').val();
        var code5 = $('#code5').val();
        var code6 = $('#code6').val();

        $.ajax({
            url: 'http://localhost/etneb/app/php/signup-email-verificationMF.php', // Backend Script on signup-email-verificationMF.php
            type: 'POST', // Type POST 
            data: { 
    //  This Area for PHP | THis area for JS
                    code1: code1, // use $_POST["code1"] on Backend to get the data of code1
                    code2: code2, // use $_POST["code2"] on Backend to get the data of code2
                    code3: code3, // use $_POST["code3"] on Backend to get the data of code3
                    code4: code4, // use $_POST["code4"] on Backend to get the data of code4
                    code5: code5, // use $_POST["code5"] on Backend to get the data of code5
                    code6: code6, // use $_POST["code6"] on Backend to get the data of code6
            },
            
            // Displaying the return message on Backend Script on signup-email-verificationMF.php
            success: function (data){
                // This #signUpError will display the result on signup-email-verificationMF.php
                $('#verifyCodeError').html(data);
            }
        })
    });
    return false;
});
