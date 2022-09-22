<?php
    if(isset($_POST["firstName"]) || isset($_POST["middleName"]) || isset($_POST["lastName"]) || isset($_POST["birthDate"]) || isset($_POST["gender"]) || isset($_POST["address1"]) || isset($_POST["address2"]) || isset($_POST["baranggay"]) || isset($_POST["region"]) || isset($_POST["province"]) || isset($_POST["municipality"]) || isset($_POST["postal"]) || isset($_POST["country"]) || isset($_POST["etnebID"])){
        $classDashboardNewUser = new classDashboardNewUser();
        $classDashboardNewUser->setUserData($_POST["firstName"] ,$_POST["middleName"], $_POST["lastName"] ,$_POST["birthDate"] ,$_POST["gender"] ,$_POST["address1"] ,$_POST["address2"] ,$_POST["baranggay"] ,$_POST["region"] ,$_POST["province"] ,$_POST["municipality"] ,$_POST["postal"] ,$_POST["country"] ,$_POST["etnebID"]);
        $classDashboardNewUser->saveUserData();
    }

    class classDashboardNewUser{
        private $firstName;
        private $middleName;
        private $lastName;
        private $birthDate;
        private $gender;
        private $address1;
        private $address2;
        private $baranggay;
        private $region;
        private $province;
        private $municipality;
        private $postal;
        private $country;
        private $etnebID;

        function setUserData($firstName, $middleName, $lastName, $birthDate, $gender, $address1, $address2, $baranggay, $region, $province, $municipality, $postal, $country ,$etnebID){
            $this->firstName = $firstName;
            $this->middleName = $middleName;
            $this->lastName = $lastName;
            $this->birthDate = $birthDate;
            $this->gender = $gender;
            $this->address1 = $address1;
            $this->address2 = $address2;
            $this->baranggay = $baranggay;
            $this->region = $region;
            $this->province = $province;
            $this->municipality = $municipality;
            $this->postal = $postal;
            $this->country = $country;
            $this->etnebID = $etnebID;
        }

        function saveUserData(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");
            // Page Session LoginMF.php
            require_once("loginMF.php");
            // PAGE Date and Time
            require_once("./helper/date-and-timeHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // CLASS Date and Time
            $classDateAndTime = new classDateAndTime();

            // VARIABLES Time Now
            $timeCreate = $classDateAndTime->timeNowF();
            // VARIABLES Date Now
            $dateCreate = $classDateAndTime->dateNowF();

            // Start of Session uat ID
            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];

                $check_etnebID = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_etnebID ='$this->etnebID'");
                $check_etnebID_row = mysqli_num_rows($check_etnebID); // Get the data on specific row database
                if($check_etnebID_row > 0){
                    echo "Sorry this I.D is not available";
                }else{
                    // Region
                    $fetch_region = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM region_tbl WHERE code = '$this->region'");
                    while($row = mysqli_fetch_assoc($fetch_region)){
                        $db_region_name = $row["region_name"];

                        // Province
                        $fetch_province = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM province_tbl WHERE code = '$this->province'");
                        while($row = mysqli_fetch_assoc($fetch_province)){
                            $db_name = $row["name"];

                            $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO user_personal_details_tbl (updt_uat_id, updt_first_name, updt_middle_name, updt_last_name, updt_birthdate ,updt_gender, updt_address1, updt_address2, updt_baranggay, updt_region ,updt_province ,updt_municipalities ,updt_postal ,updt_country ,updt_etnebID ,updt_create_time ,updt_create_date) VALUES  ('$uatID','$this->firstName', '$this->middleName','$this->lastName','$this->birthDate','$this->gender','$this->address1','$this->address2','$this->baranggay','$db_region_name','$db_name','$this->municipality','$this->postal','$this->country' ,'$this->etnebID' ,'$timeCreate' ,'$dateCreate')");
                            if($query_insert){
                                echo "success";
                            }
                        }
                    }
                }
            } // End of Session uat ID
        }
    }
?>