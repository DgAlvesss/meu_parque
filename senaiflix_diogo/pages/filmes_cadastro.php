<!DOCTYPE html>
<html>

    <head><meta charset="UTF-8"></head>

    <body>
        <H1>CADASTRAR FILMES</H1>

        <a href="index.php?paginas=filmes_listar" target = "">Lista de Filmes</a>
        
        <form action='pages/filmes_cadastro_salvar.php' method='POST'>
            <label for= "titulo">Titulo do filme:</label>
            <input type="text" id='titulo' name="titulo"><br><br>

            <label for = "descricao">Descrição:</label>
            <input type="text" id='descricao' name="descricao"><br><br>

            <label for="ano_lancamento">Ano de Lançamento:</label>
            <input type="number" id='ano_lancamento' name="ano_lancamento"><br><br>

            <label for ="genero">Genero:</label>
            <input type="text" id='genero' name="genero"><br><br>

            <label for = "classificacao">Classifição</label><br>
            <select id="classificacao" name = "classificacao" required>
                <option value = "">Selecione...</option>
                <option value = "livre">Livre</option>
                <option value = "12">+14</option>
                <option value = "16">+12</option>
                <option value = "18">+18</option>
            </select><br><br>        
            
            <input type="submit" value="Finalizar o Cadastro">
        </form>

    </body>




</html>