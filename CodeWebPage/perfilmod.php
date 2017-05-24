
<?php 
    include './header.php';
    if(isset($_SESSION['logged_in'])){
        include './perfil.php';
    }
    else{
        $_SESSION['message']="No ha ingresado aun..";
    }
?>
        


        <footer>
            <p>Miracle &copy; 2017</p>
             
        </footer>
    </body>
</html>