<?php
  require_once '../conexao/Conexao.php';
  require_once "Funcionario.php";

  class FuncionarioTerceirizado extends Funcionario{
    //Atributos herdados da classe funcionário!!

    //Construtor da classe
    public function __construct($nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $logradouro, $bairro, $CEP, $numero, $complemento){
      //$this->codigoDoFuncionario = $codigo;
      $this->nome = $nome;
      $this->CPF = $CPF;
      $this->dataNascimento = $dataNascimento;
      $this->telefone = $telefone;
      $this->estado = $estado;
      $this->motivo = $motivo;
      $this->periodo = $periodo;
      $this->setor = $setor;
      $this->terminal = new Terminal($terminal);
      $this->logradouro = new Endereco($cidade, $logradouro, $bairro, $CEP, $numero, $complemento);
    }

    //Salvando os dados da classe no banco
    public function cadastrar($CNPJ){
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
          'TERCEIRIZADO',
          '".$this->periodo."',
          '".$this->terminal->getNome()."',
          '".$this->setor."',
          '".$this->logradouro->getCidade()."',
          '".$this->logradouro->getLogradouro()."',
          '".$this->logradouro->getBairro()."',
          '".$this->logradouro->getNumero()."',
          '".$this->logradouro->getComplemento()."',
          '".$this->logradouro->getCEP()."',
          '".$CNPJ."'
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

    //Metodos herdados da classe funcionário!!
}
?>
