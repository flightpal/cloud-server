<?php
 if(isset($_FILES['fileToUpload'])){
     $fileName = $_FILES['fileToUpload']['name'];
     $fileSize = $_FILES['fileToUpload']['size'];
     $fileTmp = $_FILES['fileToUpload']['tmp_name'];
     $fileType = $_FILES['fileToUpload']['type'];
     $fileExtension = strtolower(end(explode('.', $_FILES['fileToUpload']['name'])));

     $extensions = array("jpg", "jpeg", "png");

     if(in_array($fileExtension, $extensions) == false){
        die("File type ".$fileExtension." is not allowed");
     }

     if(move_uploaded_file($fileTmp, "uploads/".$fileName)){
         echo "File Upload Successfull";
     }
     else{
         echo "File could not be uploaded";
     }

     echo "File Name: ".$fileName."\nFile Type: ".$fileType."\nFile size = ".$fileSize;
     
 }
?>