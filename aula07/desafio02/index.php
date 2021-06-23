<?php
  require_once 'inicia.php';
  $PDO = conecta_db();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
  </head>
  <body>
    <h1>Cadastro de Produtos</h1>
    <p><a href="form_inclui.php">Adicionar Produto</a></p>
    
    <h2>Lista de produtos cadastrados</h2>
    <?php
      $stmt_count = $PDO->prepare("SELECT COUNT(*) AS total FROM produto");
      $stmt_count->execute();

      $stmt = $PDO->prepare("SELECT cod_produto, descricao_produto, preco_produto 
        FROM produto 
        ORDER BY descricao_produto");
      $stmt->execute();

      $total = $stmt_count->fetchColumn();
      if ($total > 0): ?>
      <table border="1">
        <thead>
          <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
          <tr>
            <td><?php echo $resultado['cod_produto'] ?></td>
            <td><?php echo $resultado['descricao_produto'] ?></td>
            <td><?php echo $resultado['preco_produto'] ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
      <p>Total de produtos cadastrados: <?php echo $total ?></p>
      <?php else: ?>
      <p>Não há produtos cadastrados.</p>
      <?php endif; ?>
  </body>
</html>