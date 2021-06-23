<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
  </head>
  <body>
    <h2>Cadastro de Produtos - Inclusão</h2>
    <form action="inclui.php" method="POST">
      <label for="descricao_produto">Descrição: </label>
      <input type="text" name="descricao_produto" id="descricao_produto"><br><br>

      <label for="preco_produto">Preço: </label> 
      <input type="text" name="preco_produto" id="preco_produto"><br><br>

      <br>
      <input type="submit" value="Incluir">
      <a href="index.php">Voltar</a>
    </form>
  </body>
</html>
