<?php
  class Endereco{
    private $cidade;
    private $rua;
    private $bairro;
    private $CEP;
    private $numero;
    private $complemento;

    //Construtor da classe
    public function __construc($cidade, $rua, $bairro, $CEP, $numero, $complemento){
      $this->cidade = $cidade;
      $this->rua = $rua;
      $this->bairro = $bairro;
      $this->CEP = $CEP;
      $this->numero = $numero;
      $this->complemento = $complemento;
    }

    //Getters e Setters
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setRua($rua){
        $this->rua = $rua;
    }

    public function getRua(){
        return $this->rua;
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
