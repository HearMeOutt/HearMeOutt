<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexao = mysqli_connect("localhost","root","teste");
        //chegar conexao
        if(!$conexao){
            echo"NAO CONECTADO";
        }
        echo "CONECTADO AO BANCO>>>>>>";
        $nome = $_POST['nome']
        $email = $_POST['email']
        $mensagem = $_POST['mensagem']
        $sql = "INSERT INTO hearmeour.dados(nome,email,mensagem) values ('$nome','$email','$mensagem')";
        $resultado = mysql_query($conexao,$sql);
    ?>
</body>
</html>