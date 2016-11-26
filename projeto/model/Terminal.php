<?php
  class Terminal{
    private $codigoDoTerminal;
    private $nome;
    private $localizacao;

    //Contrutor da classe
    public function __construct($terminal){
      $this->nome = $terminal;
      $this->codigo = 1;            //Como cadastros de terminal não é o escopo do nosso grupo, simularemos os dados para o nosso projeto
      $this->localizacao = 'oeste';
    }

    //Getters e Setters
    public function setCodigoDoTerminal($codigoDoTerminal){
        $this->codigoDoTerminal = $codigoDoTerminal;
    }

    public function getCodigoDoTerminal(){
        return $this->codigoDoTerminal;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setLocalizacao($localizacao){
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao(){
        return $this->localizacao;
    }

}
?>
