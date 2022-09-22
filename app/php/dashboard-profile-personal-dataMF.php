<?php
    class classPersonalData{
        function getFNameAndLName(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE user Session
            require_once("user-sessionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS user Session
            $classSessionUserID = new classSessionUserID();

            // VARIABLE
            $uatID = $classSessionUserID->getUatID();

            $fetch_fname = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_fname)){
                $db_updt_first_name = $row["updt_first_name"];
                $db_updt_last_name = $row["updt_last_name"];
                return $db_updt_first_name ." " . $db_updt_last_name;
            }
        }

        function getBirthDate(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE user Session
            require_once("user-sessionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS user Session
            $classSessionUserID = new classSessionUserID();

            // VARIABLE
            $uatID = $classSessionUserID->getUatID();

            $fetch_birthDate = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_birthDate)){
                $db_updt_birthdate = $row["updt_birthdate"];
                return $db_updt_birthdate;
            }
        }
        
        function getAddress(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE user Session
            require_once("user-sessionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS user Session
            $classSessionUserID = new classSessionUserID();

            // VARIABLE
            $uatID = $classSessionUserID->getUatID();

            $fetch_address = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_address)){
                $db_updt_address1 = $row["updt_address1"];
                $db_updt_address2 = $row["updt_address2"];
                $db_updt_baranggay = $row["updt_baranggay"];
                $db_updt_municipalities = $row["updt_municipalities"];
                $db_updt_province = $row["updt_province"];
                $db_updt_country = $row["updt_country"];

                if($db_updt_address2 == "N/A"){
                    return $db_updt_address1 ." " .$db_updt_baranggay . "<br>" .$db_updt_municipalities ."<br>" .$db_updt_province ."," .$db_updt_country;
                }else{
                    return $db_updt_address1 .$db_updt_address2 .$db_updt_baranggay .$db_updt_municipalities .$db_updt_province .$db_updt_country;
                }
            }
        }

        function getEtnebID(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE user Session
            require_once("user-sessionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS user Session
            $classSessionUserID = new classSessionUserID();

            // VARIABLE
            $uatID = $classSessionUserID->getUatID();

            $fetch_birthDate = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_birthDate)){
                $db_updt_etnebID = $row["updt_etnebID"];
                return $db_updt_etnebID;
            }
        }

        function getEmail(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE user Session
            require_once("user-sessionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS user Session
            $classSessionUserID = new classSessionUserID();

            // VARIABLE
            $uatID = $classSessionUserID->getUatID();

            $fetch_birthDate = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_accounts_tbl WHERE uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_birthDate)){
                $db_uat_email = $row["uat_email"];

                return $email = str_replace(substr($db_uat_email, 1, strlen(explode("@", $db_uat_email)[0])-1), "**********", $db_uat_email);
            }
        }

        function getPassword(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // PAGE user Session
            require_once("user-sessionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS user Session
            $classSessionUserID = new classSessionUserID();

            // VARIABLE
            $uatID = $classSessionUserID->getUatID();

            $fetch_birthDate = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_accounts_tbl WHERE uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_birthDate)){
                $db_uat_password = $row["uat_password"];

                return $password = str_repeat("*", strlen($db_uat_password)); 
            }  
        }
    }
?>