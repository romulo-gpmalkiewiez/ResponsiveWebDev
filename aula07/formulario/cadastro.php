<?php
  if (!isset($_POST) || empty($_POST)) {
    echo "Não houve postagem via formulário. <br>";
    return;
  }

  if (isset($_POST['enviar']) <> 'Enviar') {
    echo "Não houve postagem pelo botão enviar do formulário. <br>";
    return;
  }

  foreach ($_POST as $chave => $valor) {
    $valor = strip_tags($valor);
  }

  $errors = array();

  if (!isset($_POST['nome']) || empty($_POST['nome'])) {
    array_push($errors, "O campo 'Nome' é obrigatório.");
  }

  if (!isset($_POST['dataNascimento']) || empty($_POST['dataNascimento'])) {
    array_push($errors, "O campo 'Data de Nascimento' é obrigatório.");
  }

  if (!isset($_POST['estadoCivil']) || empty($_POST['estadoCivil'])) {
    array_push($errors, "O campo 'Estado Civil' é obrigatório.");
  }

  if (!isset($_POST['sexo']) || empty($_POST['sexo'])) {
    array_push($errors, "O campo 'Sexo' é obrigatório.");
  }

  if (!isset($_POST['email']) || empty($_POST['email'])) {
    array_push($errors, "O campo 'Email' é obrigatório.");
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Não é um email válido.");
  }

  if (!isset($_POST['senha']) || empty($_POST['senha'])) {
    array_push($errors, "O campo 'Senha' é obrigatório.");
  }

  if (!isset($_POST['confirmaSenha']) || empty($_POST['confirmaSenha'])) {
    array_push($errors, "O campo 'Confirma Senha' é obrigatório.");
  }

  echo '
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
  ';

  foreach ($errors as $err) {
    echo "<div class='alert alert-danger' role='alert'>$err</div>";
  }
?>