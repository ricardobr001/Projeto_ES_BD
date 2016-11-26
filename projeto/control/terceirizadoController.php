<?php
  require_once dirname(__FILE__) .'/../model/FuncionarioTerceirizado.php';
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
  $periodo = $_POST["periodo"];
  $cidade = $_POST["cidade"];
  $rua = $_POST["rua"];
  $bairro = $_POST["bairro"];
  $CEP = $_POST["CEP"];
  $numero = $_POST["numero"];
  $complemento = $_POST["complemento"];
  $terminal = $_POST["terminal"];
  $setor = $_POST["setor"];
  $CNPJ = $_POST["CNPJ"];

  //Todo funcionário novo cadastrado possui estado ATIVO e não possui um motivo de desligamento
  $funcionario = new FuncionarioTerceirizado($codigo, $nome, $CPF, $dataNascimento, $telefone, 'ATIVO', '', $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento);
  $msg = $funcionario->cadastrar($CNPJ);

  echo $msg;
?>
