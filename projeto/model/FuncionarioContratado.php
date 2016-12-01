<?php
	require_once '../conexao/Conexao.php';
	require_once "Funcionario.php";

	class FuncionarioContratado extends Funcionario{
		private $dataEntrada;
		private $cargo;
		private $qtddHorasTrabalhadas;
		private $dataSaida;
		private $salario;

		//Construtor da classe
	public function __construct($nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $logradouro, $bairro, $CEP, $numero, $complemento, $dataEntrada, $cargo, $qtddHorasTrabalhadas, $dataSaida, $salario){
		//parent::Funcionario($codigo, $nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento);
		//Atributos da classe mãe
		$this->nome = $nome;
		$this->CPF = $CPF;
		$this->dataNascimento = $dataNascimento;
		$this->telefone = $telefone;
		$this->estado = $estado;
		$this->motivo = $motivo;
		$this->periodo = $periodo;
		$this->setor = $setor;
		$this->terminal = new Terminal($terminal);
		$this->endereco = new Endereco($cidade, $logradouro, $bairro, $CEP, $numero, $complemento);
		//Atributos da classe filha
		$this->dataEntrada = $dataEntrada;
		$this->cargo = $cargo;
		$this->qtddHorasTrabalhadas = $qtddHorasTrabalhadas;
		$this->dataSaida = $dataSaida;
		$this->salario = $salario;
	}

	//Getters e Setters
	public function setDataEntrada($dataEntrada){
		$this->dataEntrada = $dataEntrada;
	}

	public function getDataEntrada(){
		return $this->dataEntrada;
	}

	public function setCargo($cargo){
		$this->cargo = $cargo;
	}

	public function getCargo(){
		return $this->cargo;
	}

	public function setQtddHorasTrabalhadas($qtddHorasTrabalhadas){
		$this->qtddHorasTrabalhadas = $qtddHorasTrabalhadas;
	}

	public function getQtddHorasTrabalhadas(){
		return $this->qtddHorasTrabalhadas;
	}

	public function setDataSaida($dataSaida){
		$this->dataSaida = $dataSaida;
	}

	public function getDataSaida(){
		return $this->dataSaida;
	}

	public function setSalario($salario){
		$this->salario = $salario;
	}

	public function getSalario(){
		return $this->salario;
	}

	//Salvando os dados da classe no banco
	public function cadastrar(){
		$conn = Connection::open();

		if(!$conn){
			$msg = '
				<div class="alert alert-danger">
					Erro ao estabelecer conexão ao banco de dados.
				</div>';
		}
		else{
			if(!mysqli_query($conn, "INSERT INTO funcionario(
				nome,
				cpf,
				data_nascimento,
				telefone,
				estado,
				motivo,
				cargo,
				periodo,
				terminal,
				setor,
				cidade,
				logradouro,
				bairro,
				numero,
				complemento,
				cep,
				cnpj_empresa
			) VALUES (
				'".$this->nome."',
				'".$this->CPF."',
				'".$this->dataNascimento."',
				'".$this->telefone."',
				'".$this->estado."',
				'".$this->motivo."',
				'".$this->cargo."',
				'".$this->periodo."',
				'".$this->terminal->getNome()."',
				'".$this->setor."',
				'".$this->endereco->getCidade()."',
				'".$this->endereco->getLogradouro()."',
				'".$this->endereco->getBairro()."',
				'".$this->endereco->getNumero()."',
				'".$this->endereco->getComplemento()."',
				'".$this->endereco->getCEP()."',
				'00.000.000/0000-00'
			);"))
					die(mysqli_error($conn));
			Connection::close($conn);
			$msg = '
				<div class="alert alert-success">
					Funcionário cadastrado com sucesso!
				</div>';
		}

		return $msg;
	}

	//Buscando uma informação no banco
	public function buscar($codigoDoFuncionario){
		$conn = Connection::open();

		if(!$conn){
			$msg = 'Problemas na conexão';
		}
		else{
			//if(!mysqli_query($conn, "SELECT * FROM funcionario WHERE codigo_funcionario = '".$this->codigoDoFuncionario."'");))
					//die(mysqli_error($conn));
					echo mysqli_query($conn, "SELECT * FROM funcionario WHERE codigo_funcionario = '".$this->codigoDoFuncionario."'");
		}

	}

	//Alterando os dados de um funcionário no banco
	public function alterarDados(){
		$conn = Connection::open();

		if(!$conn){
			$msg = 'Problemas na conexão';
		}
		else{
			if(!mysqli_query($conn, "UPDATE funcionario
				SET nome = '".$this->nome."',
				cpf = '".$this->CPF."',
				data_nascimento = '".$this->dataNascimento."',
				telefone = '".$this->telefone."',
				estado = '".$this->salario."',
				cargo = '".$this->cargo."',
				periodo = '".$this->periodo."',
				terminal = '".$this->terminal->getNome()."',
				setor = '".$this->setor."',
				cidade = '".$this->endereco->getCidade()."',
				rua = '".$this->endereco->getRua()."',
				bairro = '".$this->endereco->getBairro()."',
				numero = '".$this->endereco->getNumero()."',
				complemento = '".$this->endereco->getComplemento()."',
				cep = '".$this->endereco->getCEP()."'
				WHERE codigo_funcionario = '".$this->codigoDoFuncionario."';")){
				die(mysqli_error($conn));
				$msg = 'Funcionário não cadastrado!';
			}

			Connection::close($conn);
			$msg = 'Dados alterados com sucesso!';
		}

		return $msg;
	}

	//Gerando o relatório
	public function gerarRelatorioPorFuncao($setor){
		$conn = Connection::open();

		if(!$conn){
			$msg = 'Problemas na conexão';
		}
		else{
		/*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

		}

	}

	public function gerarRelatorioPorTerminal($terminal){
		$conn = Connection::open();

		if(!$conn){
			$msg = 'Problemas na conexão';
		}
		else{
		/*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

		}


	}

	public function gerarRelatorioPorFaixaSalarial($min, $max){
		$conn = Connection::open();

		if(!$conn){
			$msg = 'Problemas na conexão';
		}
		else{
		/*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

		}
	}
}
?>
