<?php
/* Database connection settings */
$host = '127.0.0.1';
$user = 'root';
$pass = '4kegezvc';
$db = 'Egresado';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
session_Start();
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM validation WHERE cod='$username'");
echo $result->num_rows;

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
        //header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
		//header("location: error.php");
    }
}
?>