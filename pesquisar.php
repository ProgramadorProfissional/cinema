<?php
include("conexao.php");

$pesquisar=$_POST['pesquisar'];

$resultado= "SELECT * FROM filme WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado_filme=mysqli_query($conexao, $resultado);

while($rows_filme=mysqli_fetch_array($resultado_filme)){
    echo "Nome: ".$rows_filme['nome']."<br>"; 
    echo "Diretor(a): ".$rows_filme['diretor']."<br>"; 
    echo "Gênero: ".$rows_filme['genero']."<br>"; 
    echo "Classificação: ".$rows_filme['classificacao']."<br>"; 
    echo "Duração: ".$rows_filme['duracao']."<br>"; 
    echo "Valor do ingresso: ".$rows_filme['preco']."<br>"; 
    echo "<br>";
}

?>