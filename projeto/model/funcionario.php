<?php
  require_once dirname(__FILE__) . '/../conexao/Connection.php';

  class Funcionario{
    protected $codigoDoFuncionario;
    protected $nome;
    protected $CPF;
    protected $dataNascimento;
    protected $telefone;
    protected $funcao;
    protected $salario;
    protected $estado;
    protected $motivo;
    protected $periodo;
    protected $terminal;
    protected $endereco;

    public function __construct($codigo, $nome, $CPF, $dataNascimento, $telefone, $funcao, $salario, $estado, $motivo, $periodo, Terminal $terminal, Endereco $endereco){
      $this->codigoDoFuncionario = $codigo;
      $this->nome = $nome;
      $this->CPF = $dataNascimento = $dataNascimento;
      $this->telefone = $telefone;
      $this->funcao = $funcao;
      $this->salario = $salario;
      $this->estado = $estado;
      $this->motivo = $motivo;
      $this->periodo = $periodo;
      $this->terminal = $terminal;
      $this->endereco = $endereco;
    }

    public function getCodigoDoFuncionario(){
      return $this->codigoDoFuncionario;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getCPF(){
      return $this->dataNascimento;
    }

    public function getTelefone(){
      return $this->telefone;
    }

    public function getFuncao(){
      return $this->funcao;
    }

    public function getSalario(){
      return $this->salario;
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

    public function getEndereco(){
      $this->endereco.getCidade();
      $this->endereco.getRua();
      $this->endereco.getBairro();
      $this->endereco.getCEP();
      $this->endereco.getNumero();
      $this->endereco.getComplemento();
    }

    public function getTerminal(){
      $this->terminal.getCodigoTerminal();
      $this->terminal.getNome();
      $this->terminal.getLocalizacao();
    }

    public function setCodigoDoFuncionario($valor){
      $this->codigoDoFuncionario = $valor;
    }

    public function setNome($valor){
      $this->nome = $valor;
    }

    public function setCPF($valor){
      $this->dataNascimento = $valor;;
    }

    public function setTelefone($valor){
      $this->telefone = $valor;
    }

    public function setFuncao($valor){
      $this->funcao = $valor;
    }

    public function setSalario($valor){
      $this->salario = $valor;
    }

    public function setEstado($valor){
      $this->estado = $valor;
    }

    public function setMotivo($valor){
      $this->motivo = $valor;
    }

    public function setPeriodo($valor){
      $this->periodo = $valor;
    }

    public function setEndereco(Endereco $valor){
      $this->endereco = $valor;
    }

    public function setTerminal(Terminal $valor){
      $this->terminal = $valor;
    }

    public function cadastrar(){

    }
  }
?>
