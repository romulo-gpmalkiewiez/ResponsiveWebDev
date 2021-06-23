<?php
  require_once 'inicia.php';

  $cod_livro = isset($_GET['cod_livro']) ? $_GET['cod_livro'] : null;

  if (empty($cod_livro)) {
    echo "O código do livro para exclusão não foi definido.";
    exit;
  }

  $PDO = conecta_db();
  $sql = "DELETE FROM livros WHERE cod_livro = :cod_livro";

  $stmt = $PDO->prepare($sql);
  $stmt->bindParam('cod_livro', $cod_livro, PDO::PARAM_INT);
  if ($stmt->execute()) {
    header('Location: index.php');
  } else {
    echo "Ocorreu um erro ao excluir o livro";
    print_r($stmt->errorInfo());
  }
?>