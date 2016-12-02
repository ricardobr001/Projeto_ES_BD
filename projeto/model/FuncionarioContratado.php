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
	public function __construct($nome, $CPF, $dataNascimento, $telefone, $situacao, $motivo, $periodo, $setor, $terminal, $cidade, $logradouro, $bairro, $CEP, $numero, $complemento, $dataEntrada, $cargo, $qtddHorasTrabalhadas, $dataSaida, $salario, $estado){
		//parent::Funcionario($codigo, $nome, $CPF, $dataNascimento, $telefone, $situacao, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento);
		//Atributos da classe mãe
		$this->nome = $nome;
		$this->CPF = $CPF;
		$this->dataNascimento = $dataNascimento;
		$this->telefone = $telefone;
		$this->situacao = $situacao;
		$this->motivo = $motivo;
		$this->periodo = $periodo;
		$this->setor = $setor;
		$this->terminal = new Terminal($terminal);
		$this->logradouro = new Endereco($cidade, $logradouro, $bairro, $CEP, $numero, $complemento, $estado);
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
				situacao,
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
				cnpj_empresa,
				estado
			) VALUES (
				'".$this->nome."',
				'".$this->CPF."',
				'".$this->dataNascimento."',
				'".$this->telefone."',
				'".$this->situacao."',
				'".$this->motivo."',
				'".$this->cargo."',
				'".$this->periodo."',
				'".$this->terminal->getNome()."',
				'".$this->setor."',
				'".$this->logradouro->getCidade()."',
				'".$this->logradouro->getLogradouro()."',
				'".$this->logradouro->getBairro()."',
				'".$this->logradouro->getNumero()."',
				'".$this->logradouro->getComplemento()."',
				'".$this->logradouro->getCEP()."',
				'00.000.000/0000-00',
				'".$this->logradouro->getEstado()."'
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
	public function alterarDados($codigo){
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
				situacao = '".$this->salario."',
				cargo = '".$this->cargo."',
				periodo = '".$this->periodo."',
				terminal = '".$this->terminal->getNome()."',
				setor = '".$this->setor."',
				cidade = '".$this->logradouro->getCidade()."',
				logradouro = '".$this->logradouro->getLogradouro()."',
				bairro = '".$this->logradouro->getBairro()."',
				numero = '".$this->logradouro->getNumero()."',
				complemento = '".$this->logradouro->getComplemento()."',
				cep = '".$this->logradouro->getCEP()."',
				estado = '".$this->logradouro->getEstado()."'
				WHERE codigo_funcionario = '".$codigo."';")){
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
