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
		case "buscar":
			$nome = $_POST["CPF"];

			$funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");

			$msg = $funcionario->buscarNome($nome);

			break;
	}
?>
