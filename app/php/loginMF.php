<?php
    // Start the session
    session_start();

    // Get the user input on js/ajax/login-email-password.js
    // Condition if isset then pass the user input to the class of classLoginEmail bellow
    if((isset($_POST["email"])) || (isset($_POST["password"]))){
        // Class 
        $classLogin = new classLogin();
        $classLogin->setEP($_POST["email"],$_POST['password']);
        // Putting an Echo for displaying an Error
        echo $classLogin->verifyPassword();
        // For saving the user input if the user didn't commit wrong on fill up form
        // $classLoginEmail->saveSignUpF();
    }

    // Start of classSignUp
    class classLogin{
        // Properties
        private $email;
        private $password;

        // Method
        function setEP($email, $password){
            $this->email = $email;
            $this->password = $password;
        }

        function verifyPassword(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            // This table for user_accounts_table
            $check_email_table = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_accounts_tbl WHERE uat_email ='$this->email'");
            $check_email_row = mysqli_num_rows($check_email_table); // Get the data on specific row database

            // If email exist on user_accounts_table. Goods to fetch the password on database and match on the user input
            if($check_email_row > 0){
                $check_email = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_accounts_tbl WHERE uat_email = '$this->email'");
                while($row = mysqli_fetch_assoc($check_email)){
                    $uat_id = $row["uat_id"];
                    $uat_password = $row["uat_password"];

                    // Session
                    $_SESSION["uat_id"] = $uat_id;

                    if($uat_password == $this->password){
                        // Check if uat_id exist on upd_uat_id column at user_personal_details_table
                        $check_updt_uat_it_table = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id ='$uat_id'");
                        $check_updt_uat_it_row = mysqli_num_rows($check_updt_uat_it_table); // Get the data on specific row database
                        // If not New user
                        if($check_updt_uat_it_row > 0){
                            echo "<script>window.location.href='dashboard-send';</script>";
                        // Else New User
                        }else{
                            echo "<script>window.location.href='dashboard-new-user';</script>";
                        }
                    // Input user password and password in data base not match generate Error
                    }else{
                        echo "Email or Password Is Incorrect";
                    }
                } // End of While 
            }else{
                echo "Account Not Found";
            }
        }
    }

?>