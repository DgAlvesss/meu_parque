<?php 
include 'conexao.php';

if($conn->connect_error){
    die("ERRO CONEXAO");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $ano_lancamento=$_POST['ano_lancamento'];
    $genero=$_POST['genero'];
    $classificacao=$_POST['classificacao'];
    $data_cadastro= date("Y-m-d H:i:s");
    $data_atualizacao= date("Y-m-d H:i:s");
    $status = 0;



    $sql = "INSERT INTO tabela_filmes (titulo,descricao,ano_lancamento,genero,classificacao,data_cadastro,data_atualizacao,status)
    VALUES ('$titulo','$descricao','$ano_lancamento','$genero','$classificacao','$data_cadastro','$data_atualizacao','$status')";

    if($conn->query($sql) === TRUE){
        echo "Filme Registrado com Sucesso!!!";
    }else{
        echo"Erro ao cadastro filme" . $conn->error;
    }

}

header('location:index.php?paginas=filmes_listar.php');
?>