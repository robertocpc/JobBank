<?php
/* Database connection settings */
/* User login process, checks if user exists and password is correct */
session_start();
include './db.php';
$host = '127.0.0.1';
$user = 'root';
$pass = '4kegezvc';
$db = 'Egresado';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

// Escape email to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM validation WHERE cod='$username'");
//$tblegr = $mysqli->query("SELECT * FROM tblegresado WHERE codigo='$username'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Usuario con ese código no existe!";
    header("location: ../error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    $tblegr = $mysqli->query("SELECT * FROM tblegresado WHERE codigo='$username'");
    if($tblegr->num_rows>0)
    {
        $egre = $tblegr->fetch_assoc();
        $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
         if ( password_verify($_POST['password'], password_hash($egre['pass'], PASSWORD_BCRYPT))) {
            $_SESSION['register']=true;
            $_SESSION['logged_in'] = true;
            $_SESSION['cod']=$egre['codigo'];
            $_SESSION['usuario']=$egre['nombre'];
            $_SESSION['pass']=$egre['pass'];
            header("location: ../index.php");
        }
        else{
            $_SESSION['message']="Ha ingresado una contraseña incorrecta, intente denuevo..";
            header("location: ../error.php");
        }
    }
    else{
    if ( password_verify($_POST['password'], password_hash($user['psw'],PASSWORD_BCRYPT)) ) {
        
        $_SESSION['cod'] = $user['cod'];
        $_SESSION['usuario']=$user['cod'];
        $_SESSION['psw'] = password_hash($user['psw'],PASSWORD_BCRYPT);
        $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $_SESSION['pass']=$password;        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        header("location: ../index.php");
    }
    else {
        $_SESSION['message'] = "Has ingresado una contraseña incorrecta, intenta denuevo..";
		header("location: ../error.php");
        
    }
    }
}
?>