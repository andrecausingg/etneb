<?php
    class classPHLocation{
        // Start of Regions
        function getRegions(){
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://psgc.gitlab.io/api/regions.json',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // echo $response;

            $data = json_decode($response);

            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            foreach($data as $value){
                $a = $value->code;
                $b = $value->name;
                $c = $value->regionName;
                $d = $value->islandGroupCode;
                $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO region_tbl (code, name, region_name, island_group_code) VALUES ('$a', '$b', '$c', '$d')");
            }
        } // End of Regions

        // Start of Province
        function getProvince(){
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://psgc.gitlab.io/api/provinces.json',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // echo $response;
            $data = json_decode($response);
        } // End of Province

        // Start of Municipalities
        function getMunicipalities(){
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://psgc.gitlab.io/api/municipalities.json',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // echo $response;
        
            $data = json_decode($response);

            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            foreach($data as $value){
                $a = $value->code;
                $b = $value->name;
                $c = $value->oldName;
                $d = $value->isCapital;
                $e = $value->districtCode;
                $f = $value->provinceCode;
                $g = $value->regionCode;
                $h = $value->islandGroupCode;
                $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO municipalities_tbl (code, name, old_name, is_capital, district_code ,province_code ,region_code ,island_group_code) VALUES  ('$a', '$b', '$c' ,'$d','$e' ,'$f' ,'$g' ,'$h')");
            }
        } // End of Municipalities

        // Start of Baranggay
        function getBaranggay(){
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://psgc.gitlab.io/api/barangays.json',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // echo $response;
            $data = json_decode($response);

            echo '
                <option value="">- Select Baranggay -</option>
            ';
            foreach($data as $value) { // Start of Foreach
                echo '
                    <option value="' .$value->name . '">' .$value->name . '</option>
                ';
            }
        } // End of Baranggay

        // Start of Cities
        function getCities(){
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://psgc.gitlab.io/api/cities/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // echo $response;
        
            $data = json_decode($response);

            // PAGE Connection on Database 
            require_once("connectionHF.php");
            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            foreach($data as $value){
                $a = $value->code;
                $b = $value->name;
                $c = $value->oldName;
                $d = $value->isCapital;
                $e = $value->districtCode;
                $f = $value->provinceCode;
                $g = $value->regionCode;
                $h = $value->islandGroupCode;
                $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO cities_tbl (code, name, old_name, is_capital, district_code ,province_code ,region_code ,island_group_code) VALUES  ('$a', '$b', '$c' ,'$d','$e' ,'$f' ,'$g' ,'$h')");
            }
        } // End of Cities
        
    }

    $classPHLocation = new classPHLocation();
    // $classPHLocation->getRegions();
    // $classPHLocation->getProvince();
    // $classPHLocation->getMunicipalities();
    // $classPHLocation->getCities();
?>
