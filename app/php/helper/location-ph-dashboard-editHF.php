<?php
    if(isset($_POST["region"])){
        $classPHLocation = new classPHLocation();
        $classPHLocation->setRegion($_POST["region"]);
        echo $classPHLocation->getProvince();
    }

    class classPHLocation{
        private $region;

        function setRegion($region){
            $this->region = $region;
        }

        // Start of Regions
        function getRegions(){
            // PAGE Connection on Database 
            // require_once ("connectionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM region_tbl");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_region_name = $row["region_name"];
                $db_code = $row["code"];

                echo '
                    <option value="' .$db_code . '">' .$db_region_name . '</option>
                ';
            }
        } // End of Regions

        // Start of Province
        function getProvince(){
            // PAGE Connection on Database 
            // require_once("connectionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if($this->region == '130000000'){
                echo '
                    <option value="">- Select Province -</option>
                    <option value="130000000">Metro Manila</option>
                ';
            }else{
                $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM province_tbl where region_code = '$this->region'");
                if($this->region){
                    echo '<option value="">- Select Province -</option>';
                    while($row = mysqli_fetch_assoc($fetch_data)){
                        $db_name = $row["name"];
                        $db_code = $row["code"];
    
                        echo '
                            <option value="' .$db_code . '">' .$db_name . '</option>
                        ';
                    }
                }
            }
        } // End of Province

        // Start of Municipalities
        function getMunicipalities(){
            // PAGE Connection on Database 
            // require_once("connectionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if($this->region == '130000000'){
                echo '
                    <option value="">- City/Municipalities -</option>
                    <option value="130000000">Metro Manila</option>
                ';
            }else{
                $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM municipalities_tbl where region_code = '$this->region'");
                if($this->region){
                    echo '<option value="">- Select Municipalities -</option>';
                    while($row = mysqli_fetch_assoc($fetch_data)){
                        $db_name = $row["name"];
                        echo '
                            <option value="' .$db_name . '">' .$db_name . '</option>
                        ';
                    }
                }
            }
        } // End of Municipalities
    }
?>
