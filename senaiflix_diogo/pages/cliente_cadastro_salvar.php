<?php 
 include 'conexao.php';

 if($conn->connect_error){
    die("ERRO CONEXÃO");
 }

 if($_SERVER['REQUEST_METHOD'] == "POST"){
 $nome = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $endereco = $_POST['endereco'];
 $bairro = $_POST['bairro'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];
 $cep = $_POST['cep'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $data_cadastro = date("Y-m-d H:i:s");
 $data_atualizacao = date("Y-m-d H:i:s");
 $status = 0;

 $sql = "INSERT INTO clientes (nome,cpf,endereco,bairro,cidade,estado,cep,email,telefone,data_cadastro,data_atualizacao,status) 
VALUES ('$nome','$cpf','$endereco','$bairro','$cidade','$estado','$cep','$email','$telefone','$data_cadastro','$data_atualizacao','$status')";

if ($conn->query($sql) === TRUE) {
   echo "Registro Cadastrado!!!!";
} else {
   echo "Erro ao inserir registro: " . $conn->error;
}
 
}

header('Location:../index.php?paginas=cliente_listar');
?>