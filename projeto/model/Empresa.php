<?php
  require_once '../conexao/Conexao.php';

  class Empresa{
    private $cnpj_empresa;
    private $nomeFantasia;
    private $razaoSocial;

    //Construtor da classe
    public function __construct($cnpj_empresa, $nomeFantasia, $razaoSocial){
      $this->cnpj_empresa = $cnpj_empresa;
      $this->nomeFantasia = $nomeFantasia;
      $this->razaoSocial = $razaoSocial;
    }

    //Getters e Setters
    public function setCNPJ($cnpj_empresa){
        $this->cnpj_empresa = $cnpj_empresa;
    }

    public function getCNPJ(){
        return $this->cnpj_empresa;
    }

    public function setNomeFantasia($nomeFantasia){
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getNomeFantasia(){
        return $this->nomeFantasia;
    }

    public function setRazaoSocial($razaoSocial){
        $this->razaoSocial = $razaoSocial;
    }

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    //Salvando os dados da classe no banco
    public function cadastrar(){
      $conn = Connection::open();

      if(!$conn){
        $msg = '<div class="alert alert-danger" role="alert">Problemas na conexão</div>';
      }
      else{
        mysqli_query($conn, "INSERT INTO empresa(
          cnpj_empresa,
          nome_fantasia,
          razao_social
        ) VALUES (
          '".$this->cnpj_empresa."',
          '".$this->nomeFantasia."',
          '".$this->razaoSocial."'
        )");
        Connection::close($conn);
        $msg = '<div class="alert alert-success" role="alert">Empresa cadastrada com sucesso!</div>';
      }

      return $msg;
    }
}
?>
