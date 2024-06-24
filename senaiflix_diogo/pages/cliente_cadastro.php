<!DOCTYPE html>
<html>
    <head><meta charset="UTF-8"></head>

    <body>
        <H1>CADASTRO</h1>

    <form  action='cliente_cadastro_salvar.php' method='post'>
        <label for = "nome">Nome Completo: </label>
        <input type="text" id='nome' name='nome'><br><br>

        <label for = "cpf">CPF:</label>
        <input type="number" id='cpf' name='cpf'><br><br>

        <label for = "endereco">Endereço:</label>
        <input type="text" id ='endereco' name="endereco"><br><br>
        
        <label for = "bairro">Bairro:</label>
        <input type="text" id = 'bairro' name="bairro"><br><br>

        <label for = "cidade">Cidade:</label>
        <input type="text" id = 'cidade' name="cidade"><br><br>
        
        <label class="letras" for = "estado"> Estado: </label><br>
        <select id = "estado" name = "estado" required>
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
        <input type = "number" id='cep' name = "cep"><br><br>

        <label for ="email">Email:</label>
        <input type ='text' id='email' name = "email"><br><br>

        <label for = "telefone">Telefone:</label>
        <input type = "number" id = 'telefone' name="telefone"><br><br>

        <input type="submit" value="Finalizar o cadastro">
    </form>
    </body>

</html>


