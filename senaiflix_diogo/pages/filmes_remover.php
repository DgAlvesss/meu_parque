<?php
include 'conexao.php';
if($conn -> connect_error){
    die("Erro Conexão");
}

$id = $_GET ['id'];
$sql = "DELETE FROM tabela_filmes WHERE id = '$id'";
$resultado = $conn -> query($sql);
;

header('Location:../index.php?paginas=filmes_listar');
?>  