<?php
  if (!isset($_POST) || empty($_POST)) {
    echo "Não houve postagem via formulário. <br>";
    return;
  }

  if (isset($_POST['enviar']) <> 'Enviar') {
    echo "Não houve postagem pelo botão enviar do formulário. <br>";
    return;
  }

  foreach ($_POST as $key => $value) {
    if ($key != "estadosQueVisitou") {
      $value = strip_tags($value);
    }
  }

  foreach ($_POST as $key => $value) {
    if ($key != "estadosQueVisitou") {
      echo "$key: $value <br>";
    }
  }

  $estadosQueVisitou = isset($_POST['estadosQueVisitou']) ? $_POST['estadosQueVisitou'] : array();
  foreach ($estadosQueVisitou as $estado) {
    echo "UF: $estado <br>";
  }

?>