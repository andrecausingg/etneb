<?php
    class classReceipt{
        function getReceiverID(){
            // PAGE Connection on Database 
            require_once __DIR__ . './helper/connectionHF.php';
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }
            
            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl WHERE uht_uat_sender_id = '$uatID' ORDER BY uht_id DESC LIMIT 1");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_uht_receiver_id = $row["uht_receiver_id"];
                return $db_uht_receiver_id;
            }
        }

        function getReferenceID(){
            // PAGE Connection on Database 
            require_once __DIR__ . './helper/connectionHF.php';
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }
            
            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl WHERE uht_uat_sender_id = '$uatID' ORDER BY uht_id DESC LIMIT 1");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_uht_reference_no = $row["uht_reference_no"];
                return $db_uht_reference_no;
            }
        }

        function getAmountToSend(){
            // PAGE Connection on Database 
            require_once __DIR__ . './helper/connectionHF.php';
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }
            
            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl WHERE uht_uat_sender_id = '$uatID' ORDER BY uht_id DESC LIMIT 1");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_uht_amount_to_send = $row["uht_amount_to_send"];
                return $db_uht_amount_to_send;
            }
        }

        function getTime(){
            // PAGE Connection on Database 
            require_once __DIR__ . './helper/connectionHF.php';
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }
            
            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl WHERE uht_uat_sender_id = '$uatID' ORDER BY uht_id DESC LIMIT 1");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_uht_create_time = $row["uht_create_time"];
                return $db_uht_create_time;
            }
        }

        function getDate(){
            // PAGE Connection on Database 
            require_once __DIR__ . './helper/connectionHF.php';
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }
            
            
            $fetch_data = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl WHERE uht_uat_sender_id = '$uatID' ORDER BY uht_id DESC LIMIT 1");
            while($row = mysqli_fetch_assoc($fetch_data)){
                $db_uht_create_date = $row["uht_create_date"];
                return $db_uht_create_date;
            }
        }

        function uatID(){
            require_once("loginMF.php");

            if(isset($_SESSION["uat_id"])){
                return $uatID = $_SESSION["uat_id"];
            }
        }
    }

    $classReceipt = new classReceipt();

    $uatID = $classReceipt->uatID();
    $receiverIDD = $classReceipt->getReceiverID();
    $referenceID = $classReceipt->getReferenceID();
    $amountToSend = $classReceipt->getAmountToSend();
    $timeToSend = $classReceipt->getTime();
    $dateToSend = $classReceipt->getDate();

    // File
    require __DIR__ . '/vendor/autoload.php';

    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );

    // 
    $pusher = new Pusher\Pusher(
        '65d4d2555511a29e952f',
        '169dd0f61f2e69b47221',
        '1471524',
        $options
    );

    // Data to Send to Front End
    $data['message'] = array(
        'receiverIDD' => $receiverIDD,
        'referenceID' => $referenceID,
        'amountToSend' => $amountToSend,
        'timeToSend' => $timeToSend,
        'dateToSend' => $dateToSend
    );

    // function to send to Front End
    $pusher->trigger('etneb','receipt-event' . $uatID, $data);
?>