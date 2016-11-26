<?php
  require_once '../conexao/Conexao.php';

  class Empresa{
    private $CNPJ;
    private $nomeFantasia;
    private $razaoSocial;

    //Construtor da classe
    public function __construct($CNPJ, $nomeFantasia, $razaoSocial){
      $this->CNPJ = $CNPJ;
      $this->nomeFantasia = $nomeFantasia;
      $this->razaoSocial = $razaoSocial;
    }

    //Getters e Setters
    public function setCNPJ($CNPJ){
        $this->CNPJ = $CNPJ;
    }

    public function getCNPJ(){
        return $this->CNPJ;
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
        $msg = 'Problemas na conexão';
      }
      else{
        mysqli_query($conn, "INSERT INTO empresa(
          cnpj,
          nome_fantasia,
          razao_social
        ) VALUES (
          '".$this->CNPJ."',
          '".$this->nomeFantasia."',
          '".$this->razaoSocial."'
        )");
        Connection::close($conn);
        $msg = 'Empresa cadastrada com sucesso!';
      }

      return $msg;
    }
}
?>
