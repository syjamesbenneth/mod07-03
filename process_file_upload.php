<?php 
 //$_FILES -> super global variable that takes file uploads
	$temp_name = $_FILES["image_upload"]["tmp_name"];
	$name = $_FILES['image_upload']["name"];
	$size = $_FILES['image_upload']['size'];

	// Note tmp_name, name, size are PREDEFINED
	$file_extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
	//ex. classicmodels.jpg -> jpg
	//common image extensions: jpg, jpeg, gif, png, bmp
	// echo $file_extension;

	// echo $temp_name . "<br>";
	// echo $name . "<br>";
	// echo $size . "<br>";

	//var_dump($_FILES["image_upload"]);

	//Validation:
	//1. Check if file uploaded is an image.
	$no_error_flag = true;
	if ($file_extension != "jpg" && $file_extension != "jpeg" && $file_extension != png && $file_extension != "gif" && $file_extension != "bmp") {
		$no_error_flag = false;
		echo "File is not an image";
	}

	//2. Check if file size is too large
	if($size > 500000) { //size if arbitrary
		echo "File is too large";
		$no_error_flag = false;
	}

	if ($no_error_flag) {
		move_uploaded_file($temp_name, "./assets/img/" . $name);
		echo "File uploaded successfully";
	} else {
		echo "Can't upload file.";
	}

	 ?>