<?php
    // Class
    $classEmailVerification = new classEmailVerification();

    // Get the user input on js/ajax/signup-verifiy-email.js
    // Condition if isset then pass the user input to the class of classEmailVerification bellow
    if((isset($_POST["code1"])) || (isset($_POST["code2"])) || (isset($_POST["code3"])) || (isset($_POST["code4"])) || (isset($_POST["code5"])) || (isset($_POST["code6"]))){
        // Methods
        // Sending the value on setCodes function
        $classEmailVerification->setCodes($_POST["code1"],$_POST['code2'],$_POST['code3'],$_POST["code4"],$_POST['code5'],$_POST['code6']);
        // Putting an Echo for displaying an Error and Verification Code
        echo $classEmailVerification->emailVerificationF();
    }

    if(isset($_POST["resendCode"])){
        // Resend Code
        echo $classEmailVerification->resendCodeF();
    }

    // Start of Class
    class classEmailVerification{
        // PROPERTIES
        protected $code1;
        protected $code2;
        protected $code3;
        protected $code4;
        protected $code5;
        protected $code6;

        // METHODS
        // Set the Email, Password and Confirm Password
        function setCodes($code1,$code2,$code3,$code4,$code5,$code6){
            $this->code1 = $code1;
            $this->code2 = $code2;
            $this->code3 = $code3;
            $this->code4 = $code4;
            $this->code5 = $code5;
            $this->code6 = $code6;
        }

        // Start of Email Verification
        function emailVerificationF(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");
            // PAGE Date and Time
            require_once("./helper/date-and-timeHF.php");
            // PAGE Session email
            require_once("./signupMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS Date and Time
            $classDateAndTime = new classDateAndTime();

            // VARIABLES Time Now
            $timeVerified = $classDateAndTime->timeNowF();
            // VARIABLES Date Now
            $dateVerified = $classDateAndTime->dateNowF();

            // Check the Email is set
            if(isset($_SESSION["signUpUserEmail"])){
                // The set Email put in variable
                $signUpUserEmail = $_SESSION['signUpUserEmail'];

                // Check the $signUpUserEmail to point on table
                $check_email = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_verification_tbl WHERE uvt_email = '$signUpUserEmail' ");
                while($row = mysqli_fetch_assoc($check_email)){
                    // Get the code in put in $db_evsut_email_code
                    $db_uvt_email_code = $row["uvt_email_code"];
                    // Put the individual to One
                    $userEmailVerificationCode = $this->code1 . $this->code2 . $this->code3 . $this->code4 . $this->code5 . $this->code6;

                    // Check if the input code is invalid then throw an error
                    if($userEmailVerificationCode != $db_uvt_email_code){
                        echo "Invalid Code";
                    // Else update the user_verification_tbl on column uvt_verified to = 1
                    // Insert the data on user_verification_tbl for and also to the user_update_password_tbl
                    }else{
                        // Update query verified to 1
                        $query_update = mysqli_query($classDataBaseConnection->connect(),"UPDATE user_verification_tbl SET uvt_verified = '1' WHERE uvt_email ='$signUpUserEmail'");
                        if($query_update){

                            // Use $signUpUserEmail to get the data on user_verification_tbl
                            // Fetch email password and insert to user_accounts_tbl
                            $fetch_email_password = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_verification_tbl WHERE uvt_email = '$signUpUserEmail' ");
                            while($row = mysqli_fetch_assoc($fetch_email_password)){
                                // Release the data on table and put in variable
                                $db_uvt_email = $row["uvt_email"];
                                $db_uvt_password = $row["uvt_password"];

                                // Then Insert the data on user_accounts_tbl
                                $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO user_accounts_tbl (uat_email, uat_password, uat_create_time, uat_create_date) VALUES ('$db_uvt_email', '$db_uvt_password', '$timeVerified', '$dateVerified')");
                                if($query_insert){
                                    // Then Insert the data also on user_update_password_tbl for update password
                                    $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO user_update_pass_tbl (uupt_email) VALUES ('$db_uvt_email')");
                                    if($query_insert){
                                        echo "<script>window.location.href='verification-complete';</script>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } // End of Email Verification

        // Start of resendCodeF
        function resendCodeF(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");
            // PAGE Date and Time
            require_once("./helper/date-and-timeHF.php");
            // PAGE Six Digit Code
            require_once("./helper/six-digit-codeHF.php");
            // PAGE Resend Code PHP MAILER
            require_once("./helper/signup-resend-email-codeHF.php");
            // PAGE Session email
            require_once("./signupMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS Six Digit Random Number
            $classSixDigitCode = new classSixDigitCode();
            // CLass Resend Code PHP MAILER
            $classResendCode = new classResendCode();

            // VARIABLES Six Digit Code
            $sixDigitRandomCode = $classSixDigitCode->sixDigitCodeF();

            // Start of Check the Email is set
            if(isset($_SESSION["signUpUserEmail"])){
                // The set Email put in variable
                $signUpUserEmail = $_SESSION['signUpUserEmail'];

                // Request New Code
                $query_update = mysqli_query($classDataBaseConnection->connect(),"UPDATE user_verification_tbl SET uvt_email_code = '$sixDigitRandomCode' WHERE uvt_email ='$signUpUserEmail'");
                // Send the new code 
                if($query_update){
                    $classResendCode->resendCodeF();
                }
            } // End of Check the Email is set
        } // End of resendCodeF
    } // End of Class
?>