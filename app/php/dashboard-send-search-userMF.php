<?php
    if(isset($_POST["etnebID"])){
        $classSendSearchUser = new classSendSearchUser();
        $classSendSearchUser->getEtnebID();
    }

    class classSendSearchUser{
        function getEtnebID(){
            // PAGE Connection on Database 
            require_once("./helper/connectionHF.php");

            // CLASS Connection on Database 
            $classDataBaseConnection = new classDataBaseConnection();

            $search = mysqli_real_escape_string($classDataBaseConnection->connect(), $_POST["etnebID"]);
            $query = " SELECT * FROM user_personal_details_tbl WHERE updt_etnebID LIKE '%".$search."%'";
            $result = mysqli_query($classDataBaseConnection->connect(), $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    // $db_updt_uat_id = $row["updt_uat_id"];
                    $db_updt_first_name = $row["updt_first_name"];
                    $db_updt_last_name = $row["updt_last_name"];
                    $db_updt_etnebID = $row["updt_etnebID"];
        
                    echo '
                        <div class="yot-bg-purple yot-pa-8 yot-mb-8 yot-row yot-flex-jc-sb" style="border-radius: 10px;">
                            <div class="yot-flex yot-flex-ai-c-jc-sb yot-tc-white">
                                <div class="yot-flex">
                                    <img src="./app/images/undraw_male_avatar_323b.svg" alt="" style="width: 36px;height:36px;">
                                    <h5 class="yot-ml-8">' .$db_updt_first_name .'<br>' .$db_updt_last_name .'</h5>
                                </div>
                                <span class="yot-ml-8">' .$db_updt_etnebID .'</span>
                            </div>
        
                            <div class="yot-text-center">
                                <button data-id="'.$db_updt_etnebID.'" class="userID yot-btn-secondary">Select</i></button>
                            </div>
                        </div>
                    ';
                }
            }else{
                echo'
                    <div class="yot-tc-red yot-text-center">
                        <h4 class="yot-mtb-16">Etneb I.D not Found</h4>
                        <img src="./app/images/undraw_empty_re_opql.svg" alt="" width="74.79" height="73">
                    </div>
                ';
            }
        }
    }
?>