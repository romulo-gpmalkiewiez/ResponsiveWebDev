<?php
  require_once('Pais.php');
  require_once('Alemanha.php');
  require_once('Japao.php');
  require_once('PaisFactory.php');

  $pais = paisFactory::criaPais('Alemanha');
  echo "País criado. Idioma: " . $pais->getIdioma() . "</br>";

  $pais = paisFactory::criaPais('Japão');
  echo "País criado. Idioma: " . $pais->getIdioma() . "</br>";
?>