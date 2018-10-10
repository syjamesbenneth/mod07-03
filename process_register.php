<?php 

//Less than 8 char check



// if ($_GET['username' < 'strlen(8)'])
//  {
//   echo
//    ("Oops! Username should not be less than 8 characters. ");
//  }

// //Password check
// if ($_GET['password' != 'confirmpassword'])
//  {
//   echo
//    ("Oops! Password did not match! Try again. ");
//  }
	
// //Field empty check

// if (empty($_GET["username"])) {
//     $userErr = "Username is required";
//   } else {
//     $userErr = test_input($_PET["username"]);
//   }

//   if (empty($_GET["fullname"])) {
//     $fullnameErr = "Full name is required";
//   } else {
//     $fullnameErr = test_input($_PET["fullname"]);
//   }

//    if (empty($_GET["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $emailErr = test_input($_PET["email"]);
//   }

//    if (empty($_GET["password"])) {
//     $passwordErr = "Password is required";
//   } else {
//     $passwordErr = test_input($_PET["password"]);
//   }

//    if (empty($_GET["confirmpassword"])) {
//     $confirmpasswordeErr = "Confirm Password is required";
//   } else {
//     $confirmpasswordErr = test_input($_PET["confirmpassword"]);
//   }

$username = $_GET['username'];
$fullname = $_GET['fullname'];
$email = $_GET['email'];
$password = $_GET['password'];
$confirmpassword = $_GET['confirmpassword'];
$no_error_flag = true;

//Scenario 1:
if (strlen($username) < 8) {
	echo "Error: Username should be more than 8 characters.";
	$no_error_flag = false;
}

if ($password != $confirmpassword) {
	echo "Error: Passwords should match." ;
	$no_error_flag = false;
}

//Scenario 3:
if (empty($username) || empty($email) || empty($fullname) || empty($password) || empty($confirmpassword)) {
	echo "Error: All fields are required." ;
	$no_error_flag = false;
}

// Check if there are errors

if ($no_error_flag) {
	echo "User successfully registered";
} else {
	echo "<a href='./register.php'> </a>";
}

 ?>