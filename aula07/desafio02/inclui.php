<?php
  require_once 'inicia.php';

  $descricao_produto = isset($_POST['descricao_produto']) ? $_POST['descricao_produto'] : null;
  $preco_produto = isset($_POST['preco_produto']) ? $_POST['preco_produto'] : null;

  if (empty($descricao_produto)
    || empty($preco_produto)) {
    echo "É preciso preencher todos os campos do formulário de cadastro!";
    exit;
  }

  $PDO = conecta_db();
  $sql = "INSERT INTO produto(descricao_produto, preco_produto) 
    VALUES(:descricao_produto, :preco_produto)";
  $stmt = $PDO->prepare($sql);
  $stmt->bindParam(':descricao_produto', $descricao_produto);
  $stmt->bindParam(':preco_produto', $preco_produto);

  if ($stmt->execute()) {
    header('Location: form_inclui.php');
  } else {
    echo "Ocorreu um erro na inclusão do registro";
    print_r($stmt->errorInfo());
  }
?>