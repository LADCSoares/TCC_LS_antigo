<?php
// faz conexao com o banco
include("conecta.php");

$tipo = $_POST["tipo"];
$descricao = $_POST["descricao"];
// var_dump($cpf);
// var_dump($telefone);
// $id_Item = "";

$sql = "INSERT INTO item (tipo, desscricao) VALUES ('$tipo', '$descricao')"; // pede para inserir em tal tabela no banco
$resultado = mysqli_query($conexao, $sql);

if ($resultado == true) {
    header("Location: consultar.php?result=alert");
} else {
    header("Location: consultar.php?result=false");
}

?>