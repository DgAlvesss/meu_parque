<?php 
    include 'conexao.php';

    $sql = "SELECT * FROM clientes";
    $resultado = $conn->query($sql);
?>


<table border=1 widht = '50%'>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>cpf</th>
            <th>endereco</th>
            <th>bairro</th>
            <th>cidade</th>
            <th>estado</th>
            <th>cep</th>
            <th>email</th>
            <th>telefone</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>

        <a href="pages/cliente_cadastro.php" target="">Novo Cadastro de Clientes</a>
<?php
    while($linha = $resultado->fetch_assoc()){
        echo "<tr>
                <td>".$linha ['id']."</td>
                <td>".$linha ['nome']."</td>
                <td>".$linha ['cpf']."</td>
                <td>".$linha ['endereco']."</td>
                <td>".$linha ['bairro']."</td>
                <td>".$linha ['cidade']."</td>
                <td>".$linha ['estado']."</td>
                <td>".$linha ['cep']."</td>
                <td>".$linha ['email']."</td>
                <td>".$linha ['telefone']."</td>
                <td><a href = 'index.php?paginas=cliente_editar&id=".$linha['id']."'>Editar</a></td>
                <td><a href= 'index.php?paginas=cliente_remover&id=".$linha ['id']."'>Remover</a></td>
            </tr>
        ";
}
   
     
?>