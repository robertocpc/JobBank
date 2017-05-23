<?php
$link=mysqli_connect("127.0.0.1","root","4kegezvc");
mysqli_select_db($link,"Egresado");
?>
<style>
.box{
    width: 30%;
}
.form{
    float: left;
    width: 40%;
}
.form1{
    float: left;
}
.form2{
    float: right;
}
.opsex{
    width: 98%;
    font-size: 15px;
    padding: 8px;
    margin: 0 0 10px 0;
    border: 1.5px #BDBFC0 solid;
}
</style>

<form name="form1" action="" method="POST">
  <div class="box form"><select class="opsex" id="countrydd" onChange="change_country()">
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

        <div class="box form1" id="state">
            <select class="opsex">
                <option>Select</option>
            </select>
        </div>

        <div class="box form2"id="city">
            <select class="opsex">
                <option>Select</option>
            </select>
        </div>
   
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