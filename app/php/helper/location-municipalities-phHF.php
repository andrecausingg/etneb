<?php
    if(isset($_POST["province"])){
        $classPHLocation = new classPHLocation();
        $classPHLocation->setProvince($_POST["province"]);
        echo $classPHLocation->getMunicipalities();
    }

    class classPHLocation{
        private $province;

        function setProvince($province){
            $this->province = $province;
        }

        // Start of Municipalities
        function getMunicipalities(){
            // PAGE Connection on Database 
            require_once("connectionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if($this->province == '0'){
                $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM cities_tbl where region_code = '130000000'");
                if($this->province){
                    echo '<option value="">- Select -</option>';
                    while($row = mysqli_fetch_assoc($fetch_data)){
                        $db_name = $row["name"];
                        echo '
                            <option value="' .$db_name . '">' .$db_name . '</option>
                        ';
                    }
                }
            }else{
                // Municipalities only
                $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM municipalities_tbl where province_code = '$this->province'");
                if($this->province){
                    echo '<option value="">- Select -</option>';
                    while($row = mysqli_fetch_assoc($fetch_data)){
                        $db_name = $row["name"];
                        echo '
                            <option value="' .$db_name . '">' .$db_name . '</option>
                        ';
                    }

                    // City for Province
                    $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM cities_tbl where province_code = '$this->province'");
                    while($row = mysqli_fetch_assoc($fetch_data)){
                        $db_name = $row["name"];
                        echo '
                            <option value="' .$db_name . '">' .$db_name . '</option>
                        ';
                    }

                    // For NCR only Municipalities
                    if($this->province == "130000000"){
                        $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM cities_tbl where region_code = '$this->province'");
                        while($row = mysqli_fetch_assoc($fetch_data)){
                            $db_name = $row["name"];
                            $db_code = $row["code"];
                            echo '
                                <option value="' .$db_name . '">' .$db_name . '</option>
                            ';
                        }
                    }
                }
            }
        } // End of Municipalities
    }
?>
