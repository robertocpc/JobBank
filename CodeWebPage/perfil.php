<?php
session_start();
?>

<div class="perfil"> 
               <form action="./index.php">
                    
                        <div class="box form">
                            <label>Nombre</label><br>
                            <input type="txt1" name="firstname" placeholder="">
                        </div>
                        <div class="box form1">
                            <label>Apellido</label><br>
                            <input type="txt1" id="lname" name="lastname" placeholder="Apellido.."><br>
                        </div>
                    <div class="box form1">
                        <label for="fnac">Fecha de Nacimiento:</label><br>
                        <input type="date" name="bday">
                    </div>
                    <div class="box form">
                        <label>Sexo</label><br>
                        <select class="opsex">
                            <option selected>ninguno</option>
                            <option value="male">Hombre</option>
                            <option value="female">Mujer</option>
                            <option value="nospec">Sin especificar</option>
                        </select>
                    </div>
                    <div class="box form">
                        <label>DNI</label><br>
                        <input type="txt1" id="dni" name="dni" placeholder="DNI.."><br>
                    </div>
                    <div class="box form1">
                        <label>Teléfono</label><br>
                        <input type="txt1" id="telf" name="telf" placeholder="Teléfono.."><br>
                    </div>
                        <!--label for="country">Pais</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select><br-->
                        <label>Dirección</label><br>
                        <input type="txtd" name="direc" placeholder="Direccion.."><br>
                    <div class="box form">
                        <label for="fnac">Fecha de Ingreso:</label><br>
                        <input type="date" name="fechi"><br>
                    </div>
                    <div class="box form1">
                        <label for="fnac">Fecha de Culminacion:</label><br>
                        <input type="date" name="fechc"><br>
                    </div>    
                    <div class="box form">
                        <label>Promedio Final</label><br>    
                        <input type="txt1" name="prom" placeholder="Promedio.."><br>
                    </div>
                    <div class="box form1">
                        <label>Codigo Tesis</label><br>
                        <input type="txt1" name="codtesis" placeholder="Codigo de Tesis..">
                    </div>
                    <div>
                        <input type="submit" value="Guardar Cambios">
                    </div>
            </form>
       
    </div>