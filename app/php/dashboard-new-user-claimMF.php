<?php
    if(isset($_POST["claim"])){
        $classClaim = new classClaim();
        $classClaim->setClaim($_POST["claim"]);
        $classClaim->saveClaim();
    }

    class classClaim{
        private $claim;

        function setClaim($claim){
            $this->claim = $claim;
        }

        function saveClaim(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");
            // Page Session LoginMF.php
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
                $query_update = mysqli_query($classDataBaseConnection->connect(),"UPDATE user_personal_details_tbl SET updt_gift = '$this->claim' WHERE updt_uat_id ='$uatID'");
                if($query_update){
                    $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO user_balance_tbl (ubt_uat_id, ubt_balance) VALUES  ('$uatID','500.00')");
                    if($query_insert){
                        echo "success";
                    }
                }
            }
        }
    }
?>