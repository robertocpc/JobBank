<?php
    echo "holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";

    init_set('display_errors','off');
    init_set('display_Startup_errors','off');
    error_reporting(0);
    
    $username=$_POST['root'];
    $password=$_POST['4kegezvc'];
    $session_login=true;

    function Conectarse()
    {
        if(!($link=mysql_connect("localhost","root")))
        {
            echo "Error conectando la Base de Datos";
            exit();
        }
        if (!mysql_select_db("Egresado",$link))
        {
            echo "Error seleccionando la base de datos";
            exit();
        }
        return $link;
    }

    $con = Conectarse();
    $query = "SELECT * FROM validation WHERE cod='".$username."' AND psw='".$password."'";
    $q = mysql_query($query,$con);
    try{
        if(mysql_result($q,0))
        {
            $result = mysql_result($q,0);
            echo "Usuario validado correctamente";
        }
        else
            echo "Usuario o password erroneo";
    }
    catch(Exception $error){
        mysql_close($con);
    }

?>