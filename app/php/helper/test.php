<?php
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
    
        // echo "<h1>Regions</h1>" . "<br>";
        // foreach($data as $value) { // Start of Foreach
        //     echo $value->name . "<br>" . $value->code . "<br>";
        // }

        // PAGE Connection on Database 
        require_once("connectionHF.php");

        // CLASS Connection on Database 
        $classDataBaseConnection = new classDataBaseConnection();

        foreach($data as $value){
          echo  $a = $value->code;
          echo  $b = $value->name;
          echo  $c = $value->oldName;
          echo  $d = $value->isCapital;
          echo  $e = $value->districtCode;
          echo  $f = $value->provinceCode;
          echo  $g = $value->regionCode;
          echo $h = $value->islandGroupCode;

            // $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO cities_tbl (code ,name ,old_name ,is_capital ,district_code ,province_code ,region_code ,island_group_code) VALUES ('$a', '$b' ,'$c' ,'$d', '$e' ,'$f' ,'$g' ,'$h')");
        }


?>

<?php
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

    echo "<h1>Province</h1>" . "<br>";

    foreach($data as $value) { // Start of Foreach
        function findCode($code){
            $a = 010000000;
            if($code === $a){
                return $a;
            }
        }
        print_r(array_map("findCode",$value->regionCode));
        // echo $value->name . "<br>" . $value->regionCode . "<br>";
    }
?>

<?php
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

    // echo "<h1>Municipalities</h1>" . "<br>";
    $data = json_decode($response);

    // foreach($data as $value) { // Start of Foreach
    //     echo $value->name . "<br>" . $value->regionCode . "<br>";
    // }

?>