<?php
session_start();

?>
<?php
$link=mysqli_connect("127.0.0.1","root","4kegezvc");
mysqli_select_db($link,"Egresado");
?>
<div class="perfil"> 
               <form action="./ingresar.php" method="POST">
                    
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


                    <div class="box3 formm">
                        <select class="opsex" id="countrydd" onChange="change_country()">
                            <option>Select</option>
                            <?php
                            $res=mysqli_query($link,"select * from countries");
                            while($row=mysqli_fetch_array($res))
                            {
                                ?>
                                <option value="<?php echo $row["id"];?>"><?php echo $row["name"]; ?></option>
                                <?php
                            }
                        ?>
                        </select></div>
                    <div class="box3 formm1" id="state">
                        <select class="opsex">
                            <option>Select</option>
                        </select>
                    </div>
                    <div class="box3 formm2"id="city">
                        <select class="opsex">
                            <option>Select</option>
                        </select>
                    </div>


                        <!--label for="country">Pais</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                        </select><br-->
                    <div class="mod">    
                        <label>Dirección</label><br>
                        <input type="txtd" name="direc" placeholder="Direccion.."><br>
                    <div>
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

<script type="text/javascript">
function change_country()
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","./ajax.php?country="+document.getElementById("countrydd").value,false);
    xmlhttp.send(null);
    //alert(xmlhttp.responseText);
    document.getElementById("state").innerHTML=xmlhttp.responseText;
}

function change_state()
{
    //alert(document.getElementById("statedd").value);
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","./ajax.php?state="+document.getElementById("statedd").value,false);
    xmlhttp.send(null);
    //alert(xmlhttp.responseText);
    document.getElementById("city").innerHTML=xmlhttp.responseText;
}


</script>