<?php
session_start();
?>

<div class="perfil"> 
               <form action="./index.php">
                <section id="newsletter">
                    <div class="detail">
                        <div class="form">
                            <label>Nombre</label><br>
                            <input type="text" name="firstname" placeholder="">
                        </div>
                        <div class="form1">
                            <label>Apellido</label><br>
                            <input type="text" id="lname" name="lastname" placeholder="Apellido.."><br>
                        </div>
                    </div>
                </section>
                <section id="separate">
                    <div>
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
                    </div>
                </section>
            </form>
       
    </div>