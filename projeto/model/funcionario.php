<?php
  require_once dirname(__FILE__) . '/../conexao/Connection.php';

  class Funcionario{
    private $codigoDoFuncionario;
    private $nome;
    private $CPF;
    private $dataNascimento;
    private $telefone;
    private $estado;
    private $motivo;
    private $periodo;
    private $setor;
    private $terminal;
    private $endereco;

    //Construtor da classe
    public function __construc($codigo, $nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento){
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
    }

    //Getters
    public function getCodigoDoFuncionario(){
        return $this->codigoDoFuncionario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getMotivo(){
        return $this->motivo;
    }

    public function getPeriodo(){
        return $this->periodo;
    }

    public function getSetor(){
        return $this->setor;
    }

    public function getTerminal(){
        return $this->terminal;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    //Setters
    public function setCodigoDoFuncionario($codigoDoFuncionario){
        $this->codigoDoFuncionario = $codigoDoFuncionario;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCPF($CPF){
        $this->CPF = $CPF;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function setMotivo($motivo){
        $this->motivo = $motivo;
    }

    public function setPeriodo($periodo){
        $this->periodo = $periodo;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function setTerminal(Terminal $terminal){
        $this->terminal = $terminal;
    }

    public function setEndereco(Endereco $endereco){
        $this->endereco = $endereco;
    }

    //Salvando os dados da classe no banco
    public function cadastrar(){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
        mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA INSERIR OS DADOS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Funcionário cadastrado com sucesso!';
      }

      return $msg;
    }

    //Buscando uma informação no banco
    public function buscar($codigoDoFuncionario){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
        /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/

      }

    }

    //Alterando os dados de um funcionário no banco
    public function alterarDados(){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
      mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA ALTERAR OS DADOS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Dados alterados com sucesso!';
      }

      return $msg;
    }

    //Alterando o status de um funcionário no banco
    public function alterarStatus(){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
      mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA ALTERAR O STATUS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Status alterado com Sucesso!';
      }

      return $msg;
    }

    //Gerando o relatório
    public function gerarRelatorioPorFuncao($setor){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
      /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

      }

    }

    public function gerarRelatorioPorTerminal($terminal){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
      /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

      }


    }

    public function gerarRelatorioPorFaixaSalarial($min, $max){
      $conn = Connection::open();

      if(!conn){
        $msg = 'Problemas na conexão';
      }
      else{
      /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

      }
    }

}
?>
