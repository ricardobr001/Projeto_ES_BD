<?php
  class Endereco{
    private $cidade;
    private $logradouro;
    private $bairro;
    private $CEP;
    private $numero;
    private $complemento;

    //Construtor da classe
    public function __construct($cidade, $logradouro, $bairro, $CEP, $numero, $complemento){
      $this->cidade = $cidade;
      $this->logradouro = $logradouro;
      $this->bairro = $bairro;
      $this->CEP = $CEP;
      $this->numero = $numero;
      $this->complemento = $complemento;
    }

    //Getters e Setters
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setCEP($CEP){
        $this->CEP = $CEP;
    }

    public function getCEP(){
        return $this->CEP;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }

    public function getComplemento(){
        return $this->complemento;
    }

}
?>
