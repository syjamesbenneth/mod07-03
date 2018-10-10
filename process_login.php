<?php  
$username = htmlspecialchars($_POST['username']) ;
$password = htmlspecialchars($_POST['password']) ;
$no_error_flag = true;

// Fields populated 
if (empty($username) || empty($password)) {
	echo "Error: All fields are required." ;
	$no_error_flag = false;
	echo "All Fields are required";
}

//echo sha1($password) . "<br>";
//echo sha1($password) . "<br>";

if($no_error_flag) {
	if (sha1($password)==sha1("secret") && strtolower($username) == "admin") {
	echo "Login successful";
	} else {
	echo "Invalid credentials";
	}
}

?>

<!-- if ($username == "admin" && $password == "secret") {
	echo "Login Successful" ;
} else {
	echo "Wrong username"; -->
