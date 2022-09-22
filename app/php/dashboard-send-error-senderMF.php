<?php
    // Error Only
    if(isset($_POST["amountToSend"])){
        $classSendMoneyErrorAndSender = new classSendMoneyErrorAndSender();
        $classSendMoneyErrorAndSender->setAmountToSend($_POST["amountToSend"]);
        $classSendMoneyErrorAndSender->getError();
    }

    class classSendMoneyErrorAndSender{
        private $amountToSend;

        // Set the Amount to send
        function setAmountToSend($amountToSend){
            $this->amountToSend = $amountToSend;
        }

        // Get Sender ID
        function getSender(){
            // PAGE Connection on Database 
            require_once __DIR__ . './helper/connectionHF.php';
            // Page User Session ID
            require_once __DIR__ . './helper/user-sessionHF.php';

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();
            // Class User Session 
            $classSessionUserID = new classSessionUserID();
           
            // Variable User Session 
            $uatID = $classSessionUserID->getUatID();
            
            $fetch_id = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_personal_details_tbl WHERE updt_uat_id = '$uatID' ");
            while($row = mysqli_fetch_assoc($fetch_id)){
                $db_updt_etnebID = $row["updt_etnebID"];
                echo $db_updt_etnebID;
            }
        }

        // Error for don't have enough balance
        function getError(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }

            // Convert user Input Amount to Double
            sprintf("%.2f", $this->amountToSend);

            $check_balance = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_balance_tbl WHERE ubt_uat_id = '$uatID' ");
            while($row = mysqli_fetch_assoc($check_balance)){
                $db_ubt_balance = $row["ubt_balance"];

                if($db_ubt_balance < $this->amountToSend){
                    echo "You don't have enough balance";
                }else if($this->amountToSend == ""){
                    echo "Input some Amount";
                }else{
                    echo "";
                }
            }
        }
    }
?>