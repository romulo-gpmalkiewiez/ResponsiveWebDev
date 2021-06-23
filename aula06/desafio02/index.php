<?php
  $inicio = new DateTime($_GET['inicio']);
  $termino = new DateTime($_GET['termino']);

  while ($inicio < $termino) {
    echo $inicio->format('d/m/Y');
    echo '</br>';
    $inicio->modify('+1 day');
  }
  echo $inicio->format('d/m/Y');
?>
