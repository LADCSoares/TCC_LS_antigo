<?php
include("conecta.php");
// faz conexao com o banco

$id = $_POST["idItem"];
$tipo = $_POST["tipo"];
$descricao = $_POST["descricao"];
// var_dump($cpf);

// var_dump($telefone);
// $id_Item = "";

$sql = "UPDATE funcionario SET tipo = '$tipo', descricao = '$descricao' WHERE idItem =  $id";
$resultado = mysqli_query($conexao, $sql);
if ($resultado == true) {
    header("Location: consultar.php?result=true");
} else {
    header("Location: consultar.php?result=false");
}