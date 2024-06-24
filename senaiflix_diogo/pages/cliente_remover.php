<?php
include 'conexao.php';
if($conn -> connect_error){
    die("Erro Conexão");
}
$id = $_GET ['id'];

$sql = "DELETE FROM clientes WHERE id = '$id'";
$resultado = $conn -> query($sql);

header('Location:../index.php?paginas=cliente_listar');
?>  