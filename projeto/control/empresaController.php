<?php
  require_once dirname(__FILE__) .'/../model/Empresa.php';
  spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

  $CNPJ = $_POST["CNPJ"];
  $nomeFantasia = $_POST["nomeFantasia"];
  $razaoSocial = $_POST["razaoSocial"];

  $empresa = new Empresa($CNPJ, $nomeFantasia, $razaoSocial);
  $msg = $empresa->cadastrar();

  echo $msg;
?>
