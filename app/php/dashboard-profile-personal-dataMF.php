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

            $fetch_fnamelname = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_fnamelname)){
                $db_updt_first_name = $row["updt_first_name"];
                $db_updt_last_name = $row["updt_last_name"];
                return $db_updt_first_name ." " . $db_updt_last_name;
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

        function getFName(){
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
                return $db_updt_first_name;
            }
        }

        function getMName(){
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
                $db_updt_middle_name = $row["updt_middle_name"];
                return $db_updt_middle_name;
            }
        }

        function getLName(){
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

            $fetch_lname = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_lname)){
                $db_updt_last_name = $row["updt_last_name"];
                return $db_updt_last_name;
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

        function getGender(){
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

            $fetch_gender = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_gender)){
                $db_updt_gender = $row["updt_gender"];
                return '
                    <option value="' .$db_updt_gender . '">' .$db_updt_gender . '</option>
                    <option value="Fe-Male">Fe-Male</option>
                ';
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

        function getAddress1(){
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

            $fetch_address1 = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_address1)){
                $db_updt_address1 = $row["updt_address1"];
                return $db_updt_address1;
            }
        }
        
        function getAddress2(){
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

            $fetch_address2 = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_address2)){
                $db_updt_address2 = $row["updt_address2"];
                return $db_updt_address2;
            }
        }

        function getBaranggay(){
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

            $fetch_baranggay = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_baranggay)){
                $db_updt_baranggay = $row["updt_baranggay"];
                return $db_updt_baranggay;
            }
        }

        function getRegion(){
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

            $fetch_baranggay = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_baranggay)){
                $db_updt_baranggay = $row["updt_baranggay"];
                return $db_updt_baranggay;
            }
        }
    }
?>