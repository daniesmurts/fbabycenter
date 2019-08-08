<?php
$target_dir2 = "assets/posted_images/";
$cover2 = $_FILES['cover2']['name'];
$target_files2 = $target_dir2 . basename($cover2);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_files2,PATHINFO_EXTENSION));

if(empty($cover2)){
    $errMSG = "Please, select a second picture for the product.";
}

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["cover2"]["tmp_name"]);
    if($check !== false) {
        $errMSG = "Image 2 is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errMSG = "Image 2 is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_files2)) {
    $errMSG = "Sorry, Image 2 already exists.";
    $uploadOk = 0;
}  
// Check file size
if ($_FILES["cover2"]["size"] > 1000000) {
    $errMSG = "Sorry, Image 2 is too large.";
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
    if (move_uploaded_file($_FILES["cover2"]["tmp_name"], $target_files2)) {
        $successMSG = "Image 3 ". basename( $cover2
    ). " has been uploaded.";
    } else {
        $errMSG = "Sorry, there was an error uploading Image 2.";
    }
}
?>