<?php
    class classHistory{
        function fetchTransaction(){
            // PAGE Connection on Database 
            require_once __DIR__ . './connectionHF.php';
            // Page User Session ID
            require_once("loginMF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            if(isset($_SESSION["uat_id"])){
                $uatID = $_SESSION["uat_id"];
            }

            $check_transaction_table = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl WHERE uht_uat_sender_id ='$uatID' OR uht_uat_receiver_id='$uatID'");
            $check_transaction_row = mysqli_num_rows($check_transaction_table); // Get the data on specific row database
            if($check_transaction_row <= 0){
                echo '
                    <!-- Start of Sorry you dont have any history yet. -->
                        <div>
                            <!-- Description -->
                            <h4 class="yot-text-center yot-mtb-48">Sorry you dont have any history yet.</h4>
                            
                            <!-- Image -->
                            <img src="./app/images/undraw_donut_love_kau1.svg" alt="" width="236.16" height="152.11">
                        </div> <!-- End of Sorry you dont have any history yet. -->
                    ';
            }else{
                $fetch_transaction = mysqli_query($classDataBaseConnection->connect(), "SELECT * FROM user_history_tbl  WHERE uht_uat_sender_id ='$uatID' OR uht_uat_receiver_id='$uatID' ORDER BY uht_id DESC");
                while($row = mysqli_fetch_assoc($fetch_transaction)){
                    $db_uht_uat_sender_id = $row["uht_uat_sender_id"];
                    $db_uht_uat_receiver_id = $row["uht_uat_receiver_id"];
                    $db_uht_sender_id = $row["uht_sender_id"];
                    $db_uht_receiver_id = $row["uht_receiver_id"];
                    $db_uht_reference_no = $row["uht_reference_no"];
                    $db_uht_amount_to_send = $row["uht_amount_to_send"];
                    $db_uht_create_time = $row["uht_create_time"];
                    $db_uht_create_date = $row["uht_create_date"];


                    echo'
                        <!-- Start of History List -->
                        <div class="yot-bg-purple yot-pa-16 yot-flex yot-flex-ai-c-jc-sb">
                            <!-- Description -->
                            <div class="yot-flex yot-flex-fd-c">
                                <span>'. ($db_uht_uat_sender_id == $uatID ? '' : $db_uht_sender_id).'</span>
                                <span>' .$db_uht_reference_no .'</span>
                                <span>'. ($db_uht_uat_sender_id == $uatID ? 'Sent' : 'Received').'</span>
                            </div>
                            <!-- Amount -->
                            <div class="yot-flex yot-flex-fd-c">
                                <div class="yot-flex yot-flex-ai-c-jc-fe">
                                    <span class="yot-text-fs-l yot-ml-4"><i class="fa-solid fa-peso-sign"></i>'.$db_uht_amount_to_send .'</span>
                                </div>
                                <div class="yot-text-fs-xsm yot-text-end">
                                    <span>' .$db_uht_create_date .'</span> <br>
                                    <span>' .$db_uht_create_time .'</span>
                                </div>
                            </div>
                        </div> <!-- End of History List -->
                    ';
                }
            }
        }
    }
?>