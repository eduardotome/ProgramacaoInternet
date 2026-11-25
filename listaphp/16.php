<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Usuarios cadastrados</h1>
    <?php
    $con = mysqli_connect("localhost", "root", "", "lista_php");
    $resultado = mysqli_query($con, "SELECT * FROM usuarios");

    if(mysqli_num_rows($resultado) == 0){
        echo "A tabela esta vazia";
    }else{
        echo "<table>";
        echo "<tr><th>Nome</th><th>E-mail</th><th>Telefone</th></tr>";
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['telefone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
