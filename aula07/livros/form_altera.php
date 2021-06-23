<?php
  require_once 'inicia.php';

  $cod_livro = isset($_GET['cod_livro']) ? $_GET['cod_livro'] : null;
  if (empty($cod_livro)) {
    echo "O código do livro para alteração não foi definido.";
    exit;
  }

  $PDO = conecta_db();
  $stmt = $PDO->prepare("SELECT cod_livro, titulo_livro, cod_isbn, autor_livro, nome_editora, qtd_paginas 
    FROM livros 
    WHERE cod_livro = :cod_livro");
  $stmt->bindParam('cod_livro', $cod_livro, PDO::PARAM_INT);
  $stmt->execute();

  $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
  if (!is_array($resultado)) {
    echo "Nenhum livro encontrado com o código informado";
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>Cadastro de Livros</title>
  </head>
  <body>
    <h2>Cadastro de Livros - Alteração</h2>
    <form action="altera.php" method="POST">
      <label for="titulo_livro">Título: </label>
      <input type="text" name="titulo_livro" id="titulo_livro" value="<?=$resultado['titulo_livro'] ?>"><br><br>

      <label for="cod_isbn">ISBN: </label> 
      <input type="text" name="cod_isbn" id="cod_isbn" value="<?=$resultado['cod_isbn'] ?>"><br><br>

      <label for="autor_livro">Autor: </label> 
      <input type="text" name="autor_livro" id="autor_livro" value="<?=$resultado['autor_livro'] ?>"><br><br>

      <label for="nome_editora">Editora: </label> 
      <input type="text" name="nome_editora" id="nome_editora" value="<?=$resultado['nome_editora'] ?>"><br><br>

      <label for="qtd_paginas">Qtd. Páginas: </label> 
      <input type="text" name="qtd_paginas" id="qtd_paginas" value="<?=$resultado['qtd_paginas'] ?>"><br><br>

      <input type="hidden" name="cod_livro" value="<?=$cod_livro ?>">
      <input type="submit" value="Alterar">
      <a href="index.php">Voltar</a>
    </form>
  </body>
</html>