<?php
$target_dir = "assets/posted_images/";
$cover = $_FILES['cover']['name'];
$target_file = $target_dir . basename($cover);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(empty($cover)){
    $errMSG = "Please, select the first picture for the product.";
}

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["cover"]["tmp_name"]);
    if($check !== false) {
        $errMSG = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errMSG = "File selected for Image 1 is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $errMSG = "Sorry, Image already exists.";
    $uploadOk = 0;
}  
// Check file size
if ($_FILES["cover"]["size"] > 1000000) {
    $errMSG = "Sorry, Image 1 is too large.";
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
    if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
        $successMSG = "Image 1 ". basename( $cover). " has been uploaded.";
    } else {
        $errMSG = "Sorry, there was an error uploading Image 1.";
    }
}
?>