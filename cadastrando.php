<html>
    <head>
        <title>Cadastrando...</title>
    </head>
    <body>
<?php
$host = "localhost";
$user = "root";
$pass = "astju07@";
$banco = "teste";
$conexao = mysqli_connect($host, $user, $pass, $banco) or die (mysql_error());
//msql_select_db($banco) or die (mysql_error());
?>
<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao, "INSERT INTO usuario(nome, sobrenome, pais, estado, cidade, email, senha)
VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");
?>
    </body>
</html>