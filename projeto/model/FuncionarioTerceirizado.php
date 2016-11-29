<?php
  require_once '../conexao/Conexao.php';
  require_once "Funcionario.php";

  class FuncionarioTerceirizado extends Funcionario{
    //Atributos herdados da classe funcionário!!

    //Construtor da classe
    public function __construct($codigo, $nome, $CPF, $dataNascimento, $telefone, $estado, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento){
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

    //Salvando os dados da classe no banco
    public function cadastrar($CNPJ){
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
          cargo,
          periodo,
          terminal,
          setor,
          cidade,
          rua,
          bairro,
          numero,
          complemento,
          cep,
          cnpj_empresa
        ) VALUES (
          '".$this->codigoDoFuncionario."',
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
          '".$this->endereco->getCidade()."',
          '".$this->endereco->getRua()."',
          '".$this->endereco->getBairro()."',
          '".$this->endereco->getNumero()."',
          '".$this->endereco->getComplemento()."',
          '".$this->endereco->getCEP()."',
          '".$CNPJ."'
        );"))
           die(mysqli_error($conn));
        Connection::close($conn);
        $msg = 'Funcionário cadastrado com sucesso!';
      }

      return $msg;
    }

    //Alterando os dados de um funcionário no banco
    public function alterarDados($CNPJ){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
        if(!mysqli_query($conn, "UPDATE funcionario
          SET nome = '".$this->nome."',
          cpf = '".$this->CPF."',
          data_nascimento = '".$this->dataNascimento."',
          telefone = '".$this->telefone."',
          estado = '".$this->salario."',
          cargo = '".$this->cargo."',
          periodo = '".$this->periodo."',
          terminal = '".$this->terminal->getNome()."',
          setor = '".$this->setor."',
          cidade = '".$this->endereco->getCidade()."',
          rua = '".$this->endereco->getRua()."',
          bairro = '".$this->endereco->getBairro()."',
          numero = '".$this->endereco->getNumero()."',
          complemento = '".$this->endereco->getComplemento()."',
          cep = '".$this->endereco->getCEP()."',
          cnpj_empresa = '".$CNPJ."'
          WHERE codigo_funcionario = '".$this->codigoDoFuncionario."';")){
          die(mysqli_error($conn));
          $msg = 'Funcionário não cadastrado!';
        }

        Connection::close($conn);
        $msg = 'Dados alterados com sucesso!';
      }

      return $msg;
    }
    //Metodos herdados da classe funcionário!!
}
?>
