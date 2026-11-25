<?php
session_start();

if(isset($_POST['sair'])){
    session_destroy();
    header("Location: 14.php");
}

if(!isset($_SESSION['usuario'])){
    header("Location: 14.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
</head>
<body>
    <h1>Voce esta logado</h1>
    <form method="POST">
        <input type="submit" name="sair" value="Sair">
    </form>
</body>
</html>
