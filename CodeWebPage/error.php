<?php
include './header.php';
?>
<style>
    .error h1{
        width: 50%;
        margin-left:21%;
        margin-top:5%;
        background-color: #ccc;
        padding: 2% 4% 3% 4%;
        text-align: center;
        border-radius: 5px;
        border: 2px black solid;
    }
</style>
<div class="error">
    <h1><?php echo $_SESSION['message'];echo $_SESSION['pss'].$_SESSION['ms'].$_SESSION['mi'];?></h1>
</div>