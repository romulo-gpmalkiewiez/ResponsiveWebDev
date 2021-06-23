<?php
  header('Content-type: text/json');
  $cidades = array();
  
  switch($_POST['estado']) {
    case 'PR':
      $cidades = array('Curitiba', 'Maringá', 'Londrina', 'Pato Branco');
      break;

    case 'SC':
      $cidades = array('Blumenau', 'Camboriú', 'Chapecó', 'Coronel Freitas');
      break;

    case 'SP':
      $cidades = array('Bauru', 'Campinas', 'São Paulo', 'Santos');
      break;
    
    case 'RS':
      $cidades = array('Ijuí', 'Jóia', 'Porto Alegre', 'Santa Maria');
      break;
  }

  echo json_encode($cidades);
?>