<?php
session_start();
?>

<div class="perfil">  
            <p>Modificar Perfil de Usuario</p>       
            <form action="./index.php">
                <input type="text" id="fname" name="firstname" placeholder="Nombre.."><br>
                <input type="text" id="lname" name="lastname" placeholder="Apellido.."><br>
                <label for="fnac">Fecha de Nacimiento:</label>
                <input type="date" name="bday"><br>
                <input type="text" id="dni" name="dni" placeholder="DNI.."><br>
                <input type="text" id="telf" name="telf" placeholder="Teléfono.."><br>
                <!--label for="country">Pais</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select><br-->
                <input type="text" name="direc" placeholder="Direccion.."><br>
                <label for="fnac">Fecha de Ingreso:</label>
                <input type="date" name="bday"><br>
                <label for="fnac">Fecha de Culminacion:</label>
                <input type="date" name="bday"><br>
                <input type="text" name="prom" placeholder="Promedio.."><br>
                <input type="text" name="codtesis" placeholder="Codigo de Tesis..">
                <input type="submit" value="Guardar Cambios">
            </form>
        </div>