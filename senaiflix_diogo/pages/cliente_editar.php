<?php 
include 'conexao.php';
$id=$_GET['id'];
$q="SELECT * FROM clientes WHERE id='$id'";
$resultado=$conn->query($q);
if($resultado->num_rows <= 0){
    echo "Usuario não encontrado";
    exit();
}

$linha=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
    
        <title>Edição</title>
        <form  action='pages/cliente_editar_salvar.php?id=<?php echo $linha['id'];?>' method='post'>
            <label for = "nome">Nome Completo: </label>
            <input type="text" id='nome' name='nome' value ="<?php echo $linha['nome'];?>"><br><br>

            <label for = "cpf">CPF:</label>
            <input type="number" id='cpf' name='cpf' value ="<?php echo $linha['cpf'];?>"><br><br>

            <label for = "endereco">Endereço:</label>
            <input type="text" id ='endereco' name="endereco" value ="<?php echo $linha['endereco'];?>"><br><br>
            
            <label for = "bairro">Bairro:</label>
            <input type="text" id = 'bairro' name="bairro" value ="<?php echo $linha['bairro'];?>"><br><br>

            <label for = "cidade">Cidade:</label>
            <input type="text" id = 'cidade' name="cidade" value ="<?php echo $linha['cidade'];?>"><br><br>
            
            <label class="letras" for = "estado"> Estado: </label><br>
            <select id = "estado" name = "estado" required value ="<?php echo $linha['estado'];?>">
                <option value = ""> Selecione...</option>
                <option value = "AC"> Acre </option>
                <option value = "AL"> Alagoas </option>
                <option value = "AP"> Amapá </option>
                <option value = "AM"> Amazonas </option>
                <option value = "BA"> Bahia </option>
                <option value = "CE"> Ceará </option>
                <option value = "ES"> Espirito Santo </option>
                <option value = "GO"> Goiás </option>
                <option value = "MA"> Maranhão </option>
                <option value = "MT"> Mato Grosso </option>
                <option value = "MS"> Mato Grosso do Sul </option>
                <option value = "MG"> Minas Gerais </option>
                <option value = "PA"> Pará </option>
                <option value = "PB"> Paraíba </option>
                <option value = "PR"> Paraná </option>
                <option value = "PE"> Pernambuco </option>
                <option value = "PI"> Piauí </option>
                <option value = "RJ"> Rio de Janeiro </option>
                <option value = "RN"> Rio Grande do Norte </option>
                <option value = "RS"> Rio Grande do Sul </option>
                <option value = "RO"> Rondônia </option>
                <option value = "RR"> Roraima </option>
                <option value = "SC"> Santa Catarina </option>
                <option value = "SP"> São Paulo </option>
                <option value = "SE"> Sergipe </option>
                <option value = "TO"> Tocantins </option>
            </select><br><br>

            <label for = "cep">CEP: </label>
            <input type = "number" id='cep' name = "cep" value ="<?php echo $linha['cep'];?>"><br><br>

            <label for ="email">Email:</label>
            <input type ='text' id='email' name = "email" value ="<?php echo $linha['email'];?>"><br><br>

            <label for = "telefone">Telefone:</label>
            <input type = "number" id = 'telefone' name="telefone" value ="<?php echo $linha['telefone'];?>"><br><br>

            <input type='hidden' name='id' value='<?php echo $linha['id']?>'>
            <input type="submit" value="Salvar Edição">
        </form>
    </body>

</html>