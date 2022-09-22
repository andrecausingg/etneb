<?php
    class classSessionUserID{
        function getUatID(){
            require_once("./app/php/loginMF.php");
            if(isset($_SESSION["uat_id"])){
                return $_SESSION["uat_id"];
            }
        }
    }
?>