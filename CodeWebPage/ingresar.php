<?php

session_start();
include './php/db.php';

$first_name = $mysqli->escape_string($_POST['firstname']);
if(is_null($first_name)){
    $_SESSION['mi']="fallo";
    $first_name=null;
}

$last_name = $mysqli->escape_string($_POST['lastname']);
/*if(is_null($last_name)){
    $last_name=null;
}*/
$bday = $mysqli->escape_string($_POST['bday']);

$dsex = $mysqli->escape_string($_POST['dsex']);
if(is_null($dsex)){
    $dsex=null;
}
$dni = $mysqli->escape_string($_POST['dni']);
if(is_null($dni)){
    $dni=null;
}
$telf = $mysqli->escape_string($_POST['telf']);
if(is_null($telf)){
    $telf=null;
}
$country = $mysqli->escape_string($_POST['country']);

$state = $mysqli->escape_string($_POST['state']);

$city = $mysqli->escape_string($_POST['city']);

$direc = $mysqli->escape_string($_POST['direc']);
if(is_null($direc)){
    $direc=null;
}
$fechi = $mysqli->escape_string($_POST['fechi']);

$fechc = $mysqli->escape_string($_POST['fechc']);

$prom = $mysqli->escape_string($_POST['prom']);
if(is_null($prom)){
    $prom=null;
}
$codtesis = $mysqli->escape_string($_POST['codtesis']);
if(is_null($codtesis)){
    $codtesis=null;
}



$host = '127.0.0.1';
$user = 'root';
$pass = '4kegezvc';
$db = 'Egresado';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);



// Check connection
if ($mysqli->connect_error) {
    $_SESSION['message']="No se pudo conectar  la Base de Datos";
}
//$sql = "UPDATE `tblegresado` (`first_name`,`last_name`) VALUES ('".$first_name."','".$last_name."')";
//$sql="INSERT INTO tblegresado (codigo,pass,nombre) VALUES ('$_SESSION[cod]','$password','$first_name')";
//echo $first_name.$last_name.$_SESSION['cod'];
$result = $mysqli->query("SELECT * FROM tblegresado WHERE codigo='$_SESSION[cod]'");
$user = $result->fetch_assoc();
if ( $result->num_rows == 0 ){ // User doesn't exist
    $sql = "INSERT INTO tblegresado(codigo,pass,nombre,apellido,sexo,fnac,dni,telf,pais,estado,ciudad,direc,
    fing,fculm,promf,cod_tesis)
    VALUES('$_SESSION[cod]','$_SESSION[pass]','$first_name','$last_name','$dsex','$bday','$dni','$telf','$country'
    ,'$state','$city','$direc','$fechi','$fechc','$prom','$codtesis')";
    echo "CASO 1";
    
}else{
    $sql="UPDATE tblegresado SET  nombre='$first_name', apellido='$last_name', 
    fnac='$bday',sexo='$dsex', dni='$dni', telf='$telf', pais='$country', estado='$state', ciudad='$city', direc='$direc', 
    fing='$fechi', fculm='$fechc',promf='$prom', cod_tesis='$codtesis'
    WHERE codigo='$_SESSION[cod]'";
    echo "CASO 2";
}
//$sql="UPDATE tblegresado SET  apellido='$last_name' WHERE codigo='$_SESSION[cod]'";




if ($mysqli->query($sql) === TRUE) {
    $_SESSION['message']="Se guardo sus datos exitosamente..";
    $_SESSION['usuario']=$first_name;
    header("location: ./error.php");
} else {
    $_SESSION['message']="Error al guardar sus datos. ..";
    header("location: ./error.php");
}

$mysqli->close();
?>
