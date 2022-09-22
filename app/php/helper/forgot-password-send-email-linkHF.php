<?php
    // MAIL
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class classSendLinkUpdatePassword{

        function sendVerificationLinktoUpdatepassword(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");

            // Class Database Connection
            $classDataBaseConnection = new classDataBaseConnection();

            // Check the Email is set
            if(isset($_SESSION["forgotPasswordEmail"])){
                // The set Email put in variable
                $forgotPasswordEmail = $_SESSION['forgotPasswordEmail'];

                $check_email = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_update_pass_tbl WHERE uupt_email = '$forgotPasswordEmail' ");
                while($row = mysqli_fetch_assoc($check_email)){
                    $db_uupt_verification_link = $row["uupt_verification_link"];

                    $mail = new PHPMailer();

                    //Server settings
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'shawngomo@gmail.com';                     //SMTP username
                    $mail->Password   = 'kkgtwyomsvgvpclq';                               //SMTP password
                    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('shawngomo');
                    $mail->addAddress($forgotPasswordEmail);                             //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Verification';

                    $mail->Body = "<strong> <a href='http://localhost/etneb/reset-password?verification-key-link=$db_uupt_verification_link'>RESET PASSWORD</a>  </strong> <br><br>";
                    $mail->AltBody = " <strong> <a href='http://localhost/etneb/reset-password?verification-key-link=$db_uupt_verification_link'>RESET PASSWORD</a>  </strong> <br><br>";

                    if($mail->send()){
                        echo 'Check your Email to reset your password';
                    }else{
                        echo 'Something Wrong';
                    }
                }
            }
        }
    }

?>