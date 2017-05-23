 <?php 
/* Main page with two forms: sign up and log in */
session_start();
?>
<html>

    <head>
        <!--meta charset="utf-8"-->
        <meta charset="utf-8">
        <!--meta name="viewport" content="initial-scale=1.0, user-scalable=no" /-->
        <meta name="viweport" content="width=devide-width, initial-scale=1.0">
        <meta name="description" content="Bolsa de Trabajo UNJBG">
        <meta name="keywords" content="bolsa de trabajo, unjbg egresados, unjbg, trabajo unjbg">
        <meta name="author" content="Logo Project">
        <title>Logo Project | Inicio</title>
        <link rel="stylesheet" href="./css/style.css">
        
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logg">    
                    <a href="./index.php"><h1>JobSearch</h1></a>
                </div>
                <!--h1>Bolsa de Trabajo UNJBG</h1-->
                <div class="orden">
                    <div class="inn">
                        <?php
                            if(isset($_SESSION['cod'])){
                               echo "<form action='./perfilmod.php'>
                                <button type='submit' class='bt_logout'>".$_SESSION['cod']."</button>
                                </form>
                                ";
                                echo "<form action='./index.php'>
                                <button type='submitt' class='bt_logout'>TRABAJOS</button>
                              
                                </form>";
                                echo "<form action='./php/logout.php'>
                                <button type='submitt' class='bt_logout'>LOGOUT</button>
                                </form>";
                            }
                            else{
                                echo "<form action='./php/login.php' method='POST'>
                                    <input class='modif' type='text' placeholder='codigo' name='username'>
                                    <input class='modif' type='password' placeholder='password' name='password'>
                                    <input type='submit' value='Ingresar'>
                                </form>";
                            }
                        ?>  

                    </div>
                </div>
            </div>
        </header>