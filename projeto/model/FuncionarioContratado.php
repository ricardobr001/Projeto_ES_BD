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
    public function __construct($codigo, $nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento, $dataEntrada, $cargo, $qtddHorasTrabalhadas, $dataSaida, $salario){
      //parent::Funcionario($codigo, $nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento);
      //Atributos da classe mãe
      $this->codigoDoFuncionario = $codigo;
      $this->nome = $nome;
      $this->CPF = $CPF;
      $this->dataNascimento = $dataNascimento;
      $this->telefone = $telefone;
      $this->estado = $estado;
      $this->motivo = $motivo;
      $this->periodo = $periodo;
      $this->setor = $setor;
      $this->terminal = new Terminal($terminal);
      $this->endereco = new Endereco($cidade, $rua, $bairro, $CEP, $numero, $complemento);
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
        $msg = 'Problemas na conexão';
      }
      else{
        if(!mysqli_query($conn, "INSERT INTO funcionario(
          codigo_funcionario,
          nome,
          cpf,
          data_nascimento,
          telefone,
          estado,
          motivo,
          periodo,
          cidade,
          rua,
          bairro,
          numero,
          complemento,
          cep,
          cnpj_empresa
        ) VALUES (
          '".$this->getCodigoDoFuncionario()."',
          '".$this->getNome()."',
          '".$this->getCPF()."',
          '".$this->getDataNascimento()."',
          '".$this->getTelefone()."',
          '".$this->getEstado()."',
          '".$this->getMotivo()."',
          '".$this->getPeriodo()."',
          '".$this->endereco->getCidade()."',
          '".$this->endereco->getRua()."',
          '".$this->endereco->getBairro()."',
          '".$this->endereco->getNumero()."',
          '".$this->endereco->getComplemento()."',
          '".$this->endereco->getCEP()."',
          ''
        );"))
          die(mysqli_error());
        Connection::close($conn);
        $msg = 'Funcionário cadastrado com sucesso!';
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
        /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/

      }

    }

    //Alterando os dados de um funcionário no banco
    public function alterarDados(){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
      //mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA ALTERAR OS DADOS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Dados alterados com sucesso!';
      }

      return $msg;
    }

    //Alterando o status de um funcionário no banco
    public function alterarStatus(){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
      //mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA ALTERAR O STATUS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Status alterado com Sucesso!';
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
