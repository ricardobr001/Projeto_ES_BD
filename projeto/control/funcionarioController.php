<?php

  require_once dirname(__FILE__) .'/../model/Funcionario.php';
  require_once dirname(__FILE__) .'/../model/Endereco.php';
  require_once dirname(__FILE__) .'/../model/Terminal.php';
  spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
?>
