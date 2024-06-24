<?php 
include 'conexao.php';

if(!isset($_POST['id'])){
    echo "Usuario Invalido". $conn->error;
    
}

$id=$_POST['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_atualizacao = date("Y-m-d H:i:s");

    $q="UPDATE clientes SET nome='$nome',cpf='$cpf',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep',email='$email',telefone='$telefone',data_atualizacao='$data_atualizacao' WHERE id='$id'";
        if($conn->query($q)==TRUE){
            echo "Cadastro Atualizado com sucesso";
        }else{
            echo "Erro em atualizar";
        }
        header('Location:../index.php?paginas=cliente_listar');
}  


?> 