<?php session_start(); ?>
<?php include "database.php" ?>
<?php include "securetext.php" ?>
<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

//all errors that occur and kept in the database
print_r($_FILES);
$vendorId = securetext($_POST["id"]);
//Upload files to the vendor's directory
$uploaddir = '../img/vendors/'.$vendorId.'/v/';

if(!file_exists($uploaddir)){
    mkdir($uploaddir, 0777, true);
}

$fi = new FilesystemIterator($uploaddir, FilesystemIterator::SKIP_DOTS); //Gets the number of photos in the directory
$fileCount = iterator_count($fi);


if(!empty($_FILES)){
		$uploadfile = $uploaddir . basename("profile.jpg"); //Name if file is jpeg
		move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile); //Uploads file
}





?>