<?php
  class PaisFactory {
    public static function criaPais($nome) {
      switch ($nome) {
        case 'Alemanha':
          return new Alemanha();
        case 'Japão':
          return new Japao();
      }
    } 
  }
?>