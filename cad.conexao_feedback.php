
<?php
include("conexao.php");

$gostei=$_POST['gostei'];
$regular=$_POST['regular'];
$naogostei=$_POST['naogostei'];

$sql="INSERT INTO feedback (gostei, regular, naogostei)
VALUES ('$gostei', '$regular', '$naogostei')";

if(mysqli_query($conexao, $sql)) {

}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>
