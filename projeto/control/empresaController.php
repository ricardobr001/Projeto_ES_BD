<?php
  require_once dirname(__FILE__) .'/../model/Empresa.php';
  spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

  $cnpj_empresa = $_POST["cnpj_empresa"];
  $nomeFantasia = $_POST["nomeFantasia"];
  $razaoSocial = $_POST["razaoSocial"];

  $empresa = new Empresa($cnpj_empresa, $nomeFantasia, $razaoSocial);
  $msg = $empresa->cadastrar();

  echo $msg;
?>
