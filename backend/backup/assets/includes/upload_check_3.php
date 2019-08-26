<?php
$target_dir3 = "assets/posted_images/";
$cover3 = $_FILES['cover3']['name'];
$target_file3 = $target_dir3 . basename($cover3);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

if(empty($cover3)){
    $errMSG = "Please, select a third picture for the product.";
}

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["cover3"]["tmp_name"]);
    if($check !== false) {
        $errMSG = "Image 3 is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errMSG = "Image 3 is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file3)) {
    $errMSG = "Sorry, Image 3 already exists.";
    $uploadOk = 0;
}  
// Check file size
if ($_FILES["cover3"]["size"] > 1000000) {
    $errMSG = "Sorry, Image 3 is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // $errMSG = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["cover3"]["tmp_name"], $target_file3)) {
        $successMSG = "Image 3 ". basename( $cover3
    ). " has been uploaded.";
    } else {
        $errMSG = "Sorry, there was an error uploading Image 3.";
    }
}
?>