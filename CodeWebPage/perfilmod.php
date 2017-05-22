
<?php 
    include './header.php';
    if(isset($_SESSION['logged_in'])){
        include './perfil.php';
    }
    else{
        echo "NO HA INGRESADO AUN";
    }
?>
        


        <footer>
            <p>Logo Project &copy; 2017</p>
             
        </footer>
    </body>
</html>