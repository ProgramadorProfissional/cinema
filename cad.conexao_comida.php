<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pedido cadastrado</title>
    <link rel="shortcut icon" href="picwish (8) (1).png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: black;">
    
<nav id="navbar">
        <div id="navbar-container">
        <img src="img/logo_ofc.jpeg" alt="Logo do Cine Câmera" width="10%" height="100%">
            <button class="menu" onclick="abrirMenu()"> &#x2630 </button>
            <ul id="navbar-items">
                <li><a href="cad.form_filme.htm"> Voltar para o menu</a></li>
               
            </ul>
          </div>
         </nav>
<?php
include("conexao.php");

$pipoca=$_POST['pipoca'];
$refrigerante=$_POST['refrigerante'];
$chocolate=$_POST['chocolate'];
$chips=$_POST['chips'];
$agua=$_POST['agua'];
$valor=$_POST['valor'];

$sql="INSERT INTO comida (pipoca, refrigerante, chocolate, chips, agua, valor)
VALUES ('$pipoca', '$refrigerante', '$chocolate', '$chips', '$agua', '$valor')";

if(mysqli_query($conexao, $sql)) {
    echo "<img class='certo' src='img/certo.png'>  &nbsp;  &nbsp;  &nbsp;";
    echo "<h1 class='mensagem'> Pedido cadastrado! </h1>";
    echo "<a href='cad.feedback.htm'</a><br>";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>

</body>
</html>
