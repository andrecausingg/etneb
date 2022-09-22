<?php 
    class classUploadImage{
        private $frontID;

        function setImage($frontID){
            $this->frontID = $frontID;
        }

        // Start of Upload Image Function 
        function getImage(){
            // // PAGE Connection on Database 
            // require_once("./helper/connectionHF.php");

            // // CLASS Connection on Database 
            // $classDataBaseConnection = new classDataBaseConnection();

            // Check the file information on array 
            // $fileuserProfileImage = $_FILES[$this->image];
            // This is Comment | Using print_r to see the information
            // print_r($fileuserProfileImage);
            // This is Comment | Example of output print_r($filename);
            // Array ( [name] => avatar-ali.png [type] => image/png [tmp_name] => C:\xampp\tmp\php8A5E.tmp [error] => 0 [size] => 13687 )

            $fileName = $_FILES[$this->frontID]["name"];
            $fileTempName = $_FILES[$this->frontID]["tmp_name"];
            $fileSize = $_FILES[$this->frontID]["size"];
            $fileError = $_FILES[$this->frontID]["error"];
            $fileSize = $_FILES[$this->frontID]["size"];
            // $fileType = $_FILES[$this->frontID]["type"];


            // this $fileExtension is to get the name after the "." on $fileName
            $fileExtension = explode(".", $fileName);
            // the after of "." force to lowercase
            $fileActualExtension = strtolower(end($fileExtension));

            // Create allowed file in array
            $allowed = array("jpg","jpeg", "png");

            // Condition that the specif allowed extension only
            if ($fileError == 4){
                return "No Extension";
            }else if(in_array($fileActualExtension, $allowed)){
                // Condition if no error uploading file
                if($fileError === 0){
                    if($fileSize < 50000){
                        $fileNameNew = uniqid('',true). "." . $fileActualExtension;
                        $fileDestination = "http://localhost/etneb/app/images/public-image/" . $fileNameNew;
                        move_uploaded_file($fileTempName, $fileDestination);
                        return $fileNameNew;
                        // $query_insert = mysqli_query($classDataBaseConnection->connect(),"INSERT INTO user_personal_details_tbl (updt_front_page_id) VALUES ('$fileNameNew')");
                        // if($query_insert){
                        //     echo "Success Upload Image";
                        // }
                    // Error Message that your file is too big! 
                    }else{
                        return "Your file is too Big! The allowed size only is less than 50mb";
                        // echo "Your file is too Big! The allowed size only is 50mb" . "<br>";
                    }
                // Error Message on Uploading File
                }else{
                    return "Theres error uploading on file!";
                    // echo "Theres error uploading on file!" . "<br>";
                }
            // Error Message not allowed file type
            }else{
                return "You cannot upload files of this type!";
                // echo "You cannot upload files of this type!" . "<br>";
            }
        }// End of Upload Image Function 
    }
?>
