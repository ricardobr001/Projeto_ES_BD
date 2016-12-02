<?php
	require_once dirname(__FILE__) .'/../model/FuncionarioContratado.php';
	require_once dirname(__FILE__) .'/../model/Funcionario.php';
	require_once dirname(__FILE__) .'/../model/Endereco.php';
	require_once dirname(__FILE__) .'/../model/Terminal.php';
	spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

	$pagina = $_POST["pagina"];

	switch ($pagina){
		case "alterar_status":
			$codigo = $_POST["codigo"];
			$motivo = $_POST["motivo"];
			$status = $_POST["status"];

			$funcionario = new Funcionario($codigo, "", "", "", "", $status, $motivo, "", "", "", "", "", "", "", "", "");
			$msg = $funcionario->alterarStatus();

			echo $msg;
		break;

		case "Por nome":
			$nome = $_POST["CPF"];

			$funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
			$msg = $funcionario->buscarNome($nome);
		break;

		case "Por CPF":

			$CPF = $_POST["CPF"];

			$funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
			$msg = $funcionario->buscaCPF($CPF);
		break;

		case "Por cargo":
			$cargo = $_POST["CPF"];

			$funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
			$msg = $funcionario->buscaCargo($cargo);
		break;

		case "Por cidade":
			$cidade = $_POST["CPF"];

			$funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
			$msg = $funcionario->buscaCidade($cidade);
		break;

		case "Por terminal":
			$terminal = $_POST["CPF"];

			$funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
			$msg = $funcionario->buscaTerminal($terminal);
		break;
	}
?>
