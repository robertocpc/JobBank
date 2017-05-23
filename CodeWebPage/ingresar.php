<?php

session_start();
include './php/db.php';

$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
/*$codigo=$_POST["codigo"];
$correo=$_POST["correo"];
$pw=$_POST["pass"];
$dni=$_POST["dni"];
$ciudad=$_POST["ciudad"];
$direccion=$_POST["direccion"];
$pais=$_POST["pais"];
$telf=$_POST["telf"];
$fecha=$_POST["fecha"];
$sexo=$_POST["sexo"];*/
/*
$co=mysqli_connect($host, $user, $pass)
or die ("error_en_servidor");

mysqli_select_db( $co, $db)
or die ("error_DB");*/
echo $first_name;
$host = '127.0.0.1';
$user = 'root';
$pass = '4kegezvc';
$db = 'Egresado';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

echo $_SESSION["cod"];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$sql = "INSERT INTO tblegresado(codigo,pass,nombre,apellido,sexo,fnac,dni,telf,pais) VALUES('1s3546','asdasd','asdasd','asdasd')";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
