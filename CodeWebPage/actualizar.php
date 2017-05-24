<?php
/* Database connection settings */
/* User login process, checks if user exists and password is correct */
session_start();
include './db.php';
$tblegr = $mysqli->query("SELECT * FROM tblegresado WHERE codigo='$_SESSION[cod]'");
$egre = $tblegr->fetch_assoc();
$_SESSION['usuario']=$egre['nombre'];