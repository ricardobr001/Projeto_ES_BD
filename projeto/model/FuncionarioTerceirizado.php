<?php
  require_once '../conexao/Conexao.php';
  require_once "Funcionario.php";

  class FuncionarioTerceirizado extends Funcionario{
    //Atributos herdados da classe funcionário!!

    //Construtor da classe
    public function __construct($nome, $CPF, $dataNascimento, $telefone, $situacao, $motivo, $periodo, $setor, $terminal, $cidade, $logradouro, $bairro, $CEP, $numero, $complemento, $estado){
      //$this->codigoDoFuncionario = $codigo;
      $this->nome = $nome;
      $this->CPF = $CPF;
      $this->dataNascimento = $dataNascimento;
      $this->telefone = $telefone;
      $this->situacao = $situacao;
      $this->motivo = $motivo;
      $this->periodo = $periodo;
      $this->setor = $setor;
      $this->terminal = new Terminal($terminal);
      $this->endereco = new Endereco($cidade, $logradouro, $bairro, $CEP, $numero, $complemento, $estado);
    }

    //Salvando os dados da classe no banco
    public function cadastrar($cnpj_empresa){
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
          'TERCEIRIZADO',
          '".$this->periodo."',
          '".$this->terminal->getNome()."',
          '".$this->setor."',
          '".$this->endereco->getCidade()."',
          '".$this->endereco->getLogradouro()."',
          '".$this->endereco->getBairro()."',
          '".$this->endereco->getNumero()."',
          '".$this->endereco->getComplemento()."',
          '".$this->endereco->getCEP()."',
          '".$cnpj_empresa."',
          '".$this->endereco->getEstado()."'
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
