<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ingresso - Cinema Câmera </title>
    <link rel="shortcut icon" href="picwish (8) (1).png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
</head>
<body style="background-color: black;">
    
<nav id="navbar">
        <div id="navbar-container">
        <img src="img/logo_ofc.jpeg" alt="Logo do Cine Câmera" width="10%" height="100%">
            <button class="menu" onclick="abrirMenu()"> &#x2630 </button>
            <ul id="navbar-items">
                <li><a href="cad.form_ingresso.htm"> Voltar para o menu</a></li>
               
            </ul>
          </div>
         </nav>

<?php
include("conexao.php");

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$estudante=$_POST['estudante'];
$sala=$_POST['sala'];
$assento=$_POST['assento'];
$valor=$_POST['valor'];
$genero=$_POST['genero'];

$sql="INSERT INTO ingresso (nome, idade, estudante, sala, assento, valor, genero)
VALUES ('$nome', '$idade', '$estudante', '$sala', '$assento', '$valor' , '$genero')";

if(mysqli_query($conexao, $sql)) {
    echo "<h1> Ingresso reservado! </h1>";
    echo "<a href='cad.feedback.htm'</a><br>";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>

</body>
</html>