<?php 
    include 'conexao.php';

    $sql = "SELECT * FROM tabela_filmes";
    $resultado = $conn->query($sql);

?>    

<h1>LISTA DE FILMES</h1>
<table border=1 widht = '50%'>
    <a href="index.php?paginas=filmes_cadastro" target = "">Realizar um novo cadastro</a>
    <tr>
        <th>ID</th> 
        <th>titulo</th>
        <th>descricao</th>
        <th>ano_lancamento</th>
        <th>genero</th>
        <th>classificacao</th>
        <th>Editar</th>
        <th>Remover</th>
    </tr>

<?php 
    while($linha=$resultado->fetch_assoc()){
        echo "<tr>
                <td>".$linha ['id']."</td>
                <td>".$linha ['titulo']."</td>
                <td>".$linha ['descricao']."</td>
                <td>".$linha ['ano_lancamento']."</td>
                <td>".$linha ['genero']."</td>
                <td>".$linha ['classificacao']."</td>
                <td><a href='index.php?paginas=filmes_editar&id=".$linha['id']."'>Editar</a></td>
                <td><a href='pages/filmes_remover.php?id=".$linha ['id']."'>Remover</a></td>

              </tr>";
    }

?>