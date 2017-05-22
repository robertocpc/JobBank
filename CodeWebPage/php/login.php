<?php
/* Database connection settings */
/* User login process, checks if user exists and password is correct */
session_start();
include './db.php';
// Escape email to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM validation WHERE cod='$username'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    //header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], password_hash($user['psw'],PASSWORD_BCRYPT)) ) {
        
        $_SESSION['cod'] = $user['cod'];
        $_SESSION['psw'] = $user['psw'];
                
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        header("location: ../index.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
		//header("location: error.php");
    }
}
?>