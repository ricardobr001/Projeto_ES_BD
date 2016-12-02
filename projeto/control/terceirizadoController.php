<?php
  require_once dirname(__FILE__) .'/../model/FuncionarioTerceirizado.php';
  require_once dirname(__FILE__) .'/../model/Funcionario.php';
  require_once dirname(__FILE__) .'/../model/Endereco.php';
  require_once dirname(__FILE__) .'/../model/Terminal.php';
  spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

  $pagina = $_POST["pagina"];


  switch ($pagina){
    case 'cadastrar':
		$nome = $_POST["nome"];
		$CPF = $_POST["CPF"];
		$dataNascimento = $_POST["dataNascimento"];
		$telefone = $_POST["telefone"];
		$periodo = $_POST["periodo"];
		$cidade = $_POST["cidade"];
		$endereco = $_POST["endereco"];
		$bairro = $_POST["bairro"];
		$CEP = $_POST["CEP"];
		$numero = $_POST["numero"];
		$complemento = $_POST["complemento"];
		$terminal = $_POST["terminal"];
		$setor = $_POST["setor"];
		$cnpj_empresa = $_POST["cnpj_empresa"];
		$estado = $_POST["estado"];

		//Todo funcionário novo cadastrado possui situacao ATIVO e não possui um motivo de desligamento
		$funcionario = new FuncionarioTerceirizado($nome, $CPF, $dataNascimento, $telefone, 'ATIVO', '', $periodo, $setor, $terminal, $cidade, $endereco, $bairro, $CEP, $numero, $complemento, $estado);
		$msg = $funcionario->cadastrar($cnpj_empresa);

		echo $msg;
    break;

    case 'alterar_dados':
        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        $CPF = $_POST["CPF"];
        $dataNascimento = $_POST["dataNascimento"];
        $telefone = $_POST["telefone"];
        $periodo = $_POST["periodo"];
        $cidade = $_POST["cidade"];
        $endereco = $_POST["endereco"];
        $bairro = $_POST["bairro"];
        $CEP = $_POST["CEP"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $terminal = $_POST["terminal"];
        $setor = $_POST["setor"];
        $cnpj_empresa = $_POST["CNPJ"];
        $estado = $_POST["estado"];
		$situacao = $_post["status"];

        //Todo funcionário novo cadastrado possui situacao ATIVO e não possui um motivo de desligamento
        $funcionario = new FuncionarioTerceirizado($nome, $CPF, $dataNascimento, $telefone, $situacao, '', $periodo, $setor, $terminal, $cidade, $endereco, $bairro, $CEP, $numero, $complemento, $estado);
        $msg = $funcionario->alterarDados($cnpj_empresa, $codigo);

        echo $msg;
    break;
  }
?>
