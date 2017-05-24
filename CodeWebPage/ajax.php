<?php
$link=mysqli_connect("127.0.0.1","root","4kegezvc");
mysqli_select_db($link,"Egresado");
$country=$_GET["country"];
$state=$_GET["state"];

if($country!="")
{

        $res=mysqli_query($link,"select * from states where country_id=$country");
        echo "<select class='opsex'name='state' id='statedd' onChange='change_state()'>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<option value='$row[id]'>"; echo $row["name"]; echo "</option>";
        }
        echo "</select>";
}

if($state!="")
{

        $res=mysqli_query($link,"select * from cities where state_id=$state");
        echo "<select class='opsex' name='city'>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<option value='$row[id]'>"; echo $row["name"]; echo "</option>";
        }
        echo "</select>";
}


?>

