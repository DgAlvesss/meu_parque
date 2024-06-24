<?php 
include 'conexao.php';

if(!isset($_POST['id'])){
    echo "Filme Invalido". $conn->error;
}

$id=$_POST['id'];

if($_SERVER['REQUEST_METHOD'] = 'POST'){
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $ano_lancamento=$_POST['ano_lancamento'];
    $genero=$_POST['genero'];
    $classificacao=$_POST['classficacao'];
    $data_atualizacao=date("Y-m-d H:i:s");

    $q="UPDATE tabela_filmes set titulo='$titulo',descricao='$descricao',
    ano_lancamento='$ano_lancamento',genero='$genero',classificacao='$classificacao',
    data_atualizacao='$data_atualizacao' WHERE id='$id'";

    if($conn->query($q)== TRUE){
        echo"Edição feita com sucesso!!!";
    }else{
        echo"Erro ao atualizar.";
    }
    header('Location:../index.php?paginas=filmes_listar');


}

?>