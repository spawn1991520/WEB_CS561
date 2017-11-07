<?php
/* User login process, checks if user exists and password is correct */
require 'db.php';
session_start();
// Escape email to protect against SQL injections
 //if(!isset($_POST["submit"])){
   //     exit("wrong");
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM Users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['Password'], $user['Password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        //$_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
       // $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

