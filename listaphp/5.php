<!DOCTYPE html>
<html lang="en">
<head>
    <title> Random</title>
</head>
<body>
    
    <label for="min">Minimo</label>
    <input name="min" type="number" >

    <label for="max">Max</label>
    <input name="max"type="number">
    <form action="">
    <input type="submit">
</form>

<?php
    if(isset ($_GET["min"])) && isset ( $_GET["max"]){
echo ( rand ( $_GET["min"] , $_GET["max"]));


    }
</body>
</html>