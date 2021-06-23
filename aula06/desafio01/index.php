<?php
  $fibonacci = array();
  
  for ($i = 1; $i < 100; $i++) {
    $divisors = 2; // 1 and self
    for ($j = 2; $j < $i; $j++) {
      if ($i % $j == 0) {
        $divisors += 1;
        break;
      }
    }
    if ($divisors == 2) {
      array_push($fibonacci, $i);
    }
  }

  echo json_encode($fibonacci);
?>