<?php
    // Class
    class classErrorPage{
        // Method

        /*
            Unauthorize acces go to 404 page email-verification.php
        */
        function signUpEmailVerification(){
            // PAGE Session email
            require_once("./app/php/signupMF.php");

            if(!isset($_SESSION["signUpUserEmail"])){
                echo "<script>window.location.href='404';</script>";
            }
        }

        /*
            Reset Password Error reset-password.php
        */
        function resetPassword(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE Forgot Password
            require_once("./app/php/forgot-passwordMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            // Get the query verification link on the url
            $verificationKeyLink = htmlspecialchars($_GET["verification-key-link"]);

            $check_verification_key_link_table = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_update_pass_tbl WHERE uupt_verification_link = '$verificationKeyLink' ");
            $check_verification_key_link_table_row = mysqli_num_rows($check_verification_key_link_table); // Get the data on specific row database
            
            if($check_verification_key_link_table_row <= 0){  
                echo "<script>window.location.href='404.php';</script>";
            }else if(!isset($_SESSION["forgotPasswordEmail"])){
                echo "<script>window.location.href='404.php';</script>";
            }
        }

        
        /*
            Dashboard new User dashboard-new-user.php
        */
        function dashboarUser(){
            require_once("./app/php/loginMF.php");

            if(!isset($_SESSION["uat_id"])){
                echo "<script>window.location.href='404';</script>";
            }
        }

        /*
            
        */
        function welcomeGift(){
            require_once("./app/php/loginMF.php");

            if(!isset($_SESSION["uat_id"])){
                echo "<script>window.location.href='404';</script>";
            }else{
                $uatID = $_SESSION["uat_id"];
                // PAGE Connection on Database 
                require_once("connectionHF.php");
                // CLASS Connection on Database 
                $classDataBaseConnection = new classDataBaseConnection();
                
                $fetch_gift = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl  WHERE updt_uat_id = '$uatID'");
                while($row = mysqli_fetch_assoc($fetch_gift)){
                    $db_updt_gift = $row["updt_gift"];

                    if($db_updt_gift == 0){
                        echo "<script>window.location.href='404';</script>";
                    }
                }
            }
        }
    }
?>