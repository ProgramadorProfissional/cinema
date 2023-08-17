<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Filme cadastrado </title>
    <link rel="shortcut icon" href="picwish (8) (1).png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: black;">
    
<nav id="navbar">
        <div id="navbar-container">
        <img src="img/logo_ofc.jpeg" alt="Logo do Cine Câmera" width="10%" height="100%">
            <button class="menu" onclick="abrirMenu()"> &#x2630 </button>
            <ul id="navbar-items">
                <li><a href="cad.form_filme.htm"> Voltar para o cadastro</a></li>
               
            </ul>
          </div>
         </nav>

<?php
include("conexao.php");

$nome=$_POST['nome'];
$diretor=$_POST['diretor'];
$genero=$_POST['genero'];
$classificacao=$_POST['classificacao'];
$duracao=$_POST['duracao'];
$preco=$_POST['preco'];

$sql="INSERT INTO  filme (nome, diretor, genero, classificacao, duracao, preco)
VALUES ('$nome', '$diretor', '$genero', '$classificacao', '$duracao', '$preco')";

if(mysqli_query($conexao, $sql)) {
    echo "<img class='certo' src='img/certo.png'>  &nbsp;  &nbsp;  &nbsp;";
    echo "<h1 class='mensagem'> Filme cadastrado com sucesso! </h1>";
    echo "<a href='cad.feedback.htm'</a><br>";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>

</body>
</html>