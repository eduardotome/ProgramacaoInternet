<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
        <label>Nome:</label>
        <input name="nome" type="text"><br>
        <label>Email:</label>
        <input name="email" type="text"><br>
        <label>Telefone:</label>
        <input name="telefone" type="text"><br>
        <input type="submit" value="Salvar">
    </form>

    <?php
    if(isset($_POST['nome'])){
        $con = mysqli_connect("localhost", "root", "", "lista_php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

        if(mysqli_query($con, $sql)){
            echo "Cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar: " . mysqli_error($con);
        }
    }
    ?>
</body>
</html>
