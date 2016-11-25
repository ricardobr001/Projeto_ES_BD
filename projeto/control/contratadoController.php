<?php

  require_once dirname(__FILE__) .'/../model/Funcionario.php';
  require_once dirname(__FILE__) .'/../model/Endereco.php';
  require_once dirname(__FILE__) .'/../model/Terminal.php';
  spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

  $codigo = $_POST["codigo"];
  $nome = $_POST["nome"];
  $CPF = $_POST["CPF"];
  $dataNascimento = $_POST["dataNascimento"];
  $telefone = $_POST["telefone"];
  $salario = $_POST["salario"];
  $cidade = $_POST["cidade"];
  $rua = $_POST["rua"];
  $bairro = $_POST["bairro"];
  $CEP = $_POST["CEP"];
  $numero = $_POST["numero"];
  $terminal = $_POST["terminal"];
  $setor = $_POST["setor"];
  $dataEntrada = $_POST["dataEntrada"];
  $horas = $_POST["qtddHorasTrabalhadas"];
  $cargo = $_POST["cargo"];
?>
