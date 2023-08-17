<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>Filme excluído - Cine Câmera</title>
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

$excluir=$_POST['excluir'];

$sql="DELETE FROM filme WHERE nome='$excluir'";

if(mysqli_query($conexao, $sql)){
    echo "<img class='certo' src='img/certo.png'>  &nbsp;  &nbsp;  &nbsp;";
    echo "<h1 class='mensagem'> Filme excluido com sucesso! </h1>";
    echo "<a href='excluir.htm'</a><br>";
}

else {
    echo "Não foi a realizada a operação".mysqli_error($conexao);
}
mysqli_close($conexao);

?>

</body>
</html>