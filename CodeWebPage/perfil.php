<?php
session_start();
?>

<div class="perfil"> 
               <form action="./index.php">
                    
                        <div class="form">
                            <label>Nombre</label><br>
                            <input type="txt1" name="firstname" placeholder="">
                        </div>
                        <div class="form1">
                            <label>Apellido</label><br>
                            <input type="txt1" id="lname" name="lastname" placeholder="Apellido.."><br>
                        </div>
                    <div class="details">
                        <br><label for="fnac">Fecha de Nacimiento:</label><br>
                        <input type="date" name="bday"><br>
                    </div>
                    <div>
                        <input type="txt" id="dni" name="dni" placeholder="DNI.."><br>
                        <input type="txt" id="telf" name="telf" placeholder="Teléfono.."><br>
                        <!--label for="country">Pais</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select><br-->
                        <input type="txt" name="direc" placeholder="Direccion.."><br>
                        <label for="fnac">Fecha de Ingreso:</label>
                        <input type="date" name="bday"><br>
                        <label for="fnac">Fecha de Culminacion:</label>
                        <input type="date" name="bday"><br>
                        <input type="txt" name="prom" placeholder="Promedio.."><br>
                        <input type="txt" name="codtesis" placeholder="Codigo de Tesis..">
                        <input type="submit" value="Guardar Cambios">
                    </div>
            </form>
       
    </div>