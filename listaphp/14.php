<?php
session_start();

if(isset($_SESSION['usuario'])){
    header("Location: 14_principal.php");
}

$erro = "";
if(isset($_POST['usuario'])){
    if($_POST['usuario'] == "admin" && $_POST['senha'] == "1234"){
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: 14_principal.php");
    }else{
        $erro = "Usuario ou senha errados";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label>Usuario:</label>
        <input name="usuario" type="text"><br>
        <label>Senha:</label>
        <input name="senha" type="password"><br>
        <input type="submit" value="Entrar">
    </form>
    <p><?php echo $erro; ?></p>
</body>
</html>
