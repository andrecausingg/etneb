<?php
    class classBalance{
        function getbalance(){
            require_once("connectionHF.php");
            require_once("loginMF.php");

            // // Page Session
            // require_once ("./app/php/helper/user-sessionHF.php");
            // // PAGE Connection on Database 
            // require_once("./app/php/helper/connectionHF.php");

            // // ClASS user Session Uat ID
            // $classSessionUserID = new classSessionUserID();
            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            // // Variable
            // $uatID = $classSessionUserID->getUatID();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }

            $fetch_balance = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_balance_tbl WHERE ubt_uat_id = '$uatID'");
            while($row = mysqli_fetch_assoc($fetch_balance)){
                $db_ubt_balance = $row["ubt_balance"];
                return number_format($db_ubt_balance, 2);
            }
        }

        function uatID(){
            require_once("loginMF.php");

            if(isset($_SESSION["uat_id"])){
                return $uatID = $_SESSION["uat_id"];
            }
        }
    }

    $classBalance = new classBalance();
    $uatID = $classBalance->uatID();
    $balance = $classBalance->getbalance();

    // File
    require __DIR__ . '/vendor/autoload.php';
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        '65d4d2555511a29e952f',
        '169dd0f61f2e69b47221',
        '1471524',
        $options
    );
    
    // $app_id = '1471524';
    // $app_key = '65d4d2555511a29e952f';
    // $app_secret = '169dd0f61f2e69b47221';
    // $app_cluster = 'ap1';
    // $pusher = new Pusher\Pusher($app_key, $app_secret, $app_id, ['cluster' => $app_cluster]);

    // Data to Send to Front End
    $dataBalance['message1'] = array(
        'balance' => $balance,
    );
    // function to send to Front End
    $pusher->trigger('etneb', 'balance-event' .$uatID, $dataBalance);
?>