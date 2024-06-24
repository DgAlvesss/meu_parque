<?php 
include 'conexao.php';
$id=$_GET['id'];
$q="SELECT * FROM tabela_filmes WHERE id='$id'";
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
        <form action='pages/filmes_editar_salvar.php' method='POST'>
            <label for= "titulo">Titulo do filme:</label>
            <input type="text" id='titulo' name="titulo" value ="<?php echo $linha['titulo'];?>"><br><br>

            <label for = "descricao">Descrição:</label>
            <input type="text" id='descricao' name="descricao"value ="<?php echo $linha['descricao'];?>"><br><br>

            <label for="ano_lancamento">Ano de Lançamento:</label>
            <input type="number" id='ano_lancamento' name="ano_lancamento"value ="<?php echo $linha['ano_lancamento'];?>"><br><br>

            <label for ="genero">Genero:</label>
            <input type="text" id='genero' name="genero"value ="<?php echo $linha['genero'];?>"><br><br>

            <label for = "classificacao">Classifição</label><br>
            <select id="classificacao" name = "classificacao" required value ="<?php echo $linha['classificacao'];?>"><br><br>>
                <option value = "">Selecione...</option>
                <option value = "livre">Livre</option>
                <option value = "12">+14</option>
                <option value = "16">+12</option>
                <option value = "18">+18</option>
            </select><br><br>        
            
            <input type='hidden' name='id' value='<?php echo $linha['id']?>'>
            <input type="submit" value="Finalizar o Cadastro">
        </form>
    </body>

</html>