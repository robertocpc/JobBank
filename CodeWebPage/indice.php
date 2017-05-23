<?php
$link=mysqli_connect("127.0.0.1","root","4kegezvc");
mysqli_select_db($link,"Egresado");
?>

<form name="form1" action="" method="POST">
    <table>
        <tr>
            
            <td><select id="countrydd" onChange="change_country()">
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
            </select></td>
            </tr>

<tr>
    <td>Select State</td>
    <td>
        <div id="state">
            <select>
                <option>Select</option>
            </select>
        </div>
    </td>
    </tr>


<tr>
    <td>Select City</td>
    <td>
        <div id="city">
            <select>
                <option>Select</option>
            </select>
        </div>
    </td>
    </tr>


</table>
</form>

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