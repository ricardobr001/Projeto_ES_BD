<?php
  require_once '../conexao/Conexao.php';

  class Funcionario{
    private $codigoDoFuncionario;
    private $nome;
    private $CPF;
    private $dataNascimento;
    private $telefone;
    private $situacao;
    private $motivo;
    private $periodo;
    private $setor;
    private $terminal;
    private $endereco;

    //Construtor da classe, ja setando todos os valor para os atributos
    public function __construct($codigo, $nome, $CPF, $dataNascimento, $telefone, $situacao, $motivo, $periodo, $setor, $terminal, $cidade, $rua, $bairro, $CEP, $numero, $complemento, $estado){
      $this->codigoDoFuncionario = $codigo;
      $this->nome = $nome;
      $this->CPF = $CPF;
      $this->dataNascimento = $dataNascimento;
      $this->telefone = $telefone;
      $this->situacao = $situacao;
      $this->motivo = $motivo;
      $this->periodo = $periodo;
      $this->setor = $setor;
      $this->terminal = new Terminal($terminal);
      $this->endereco = new Endereco($cidade, $rua, $bairro, $CEP, $numero, $complemento, $estado);
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

    public function getSituacao(){
        return $this->situacao;
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

    public function setSituacao($situacao){
        $this->situacao = $situacao;
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
      //mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA INSERIR OS DADOS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Funcionário cadastrado com sucesso!';
      }

      return $msg;
    }

    //Buscando uma informação no banco
    public function buscarNome($nome){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
        /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/
        $sql = mysqli_query($conn, "SELECT * FROM funcionario WHERE nome LIKE '%".$nome."%' ORDER BY nome") or die(mysqli_error($conn));

        // Descobrimos o total de registros encontrados
    	$numRegistros = mysqli_num_rows($sql);

    	// Se houver pelo menos um registro, exibe-o
    	if ($numRegistros != 0) {
    		// Exibe os produtos e seus respectivos preços
    		while ($funcionario = mysqli_fetch_object($sql)) {
    			echo'
                <tr>
                    <td>' . $funcionario->codigo_funcionario . '</td>
                    <td>' . $funcionario->nome .'</td>
                    <td>' . $funcionario->cpf .'</td>
                    <td>' . $funcionario->cidade .'</td>
                    <td>' . $funcionario->terminal .'</td>
                    <td>' . $funcionario->periodo .'</td>
                    <td>' . $funcionario->estado .'</td>
                    <td>
                        <button
                            class="btn alteracao"
                            value="' . $funcionario->codigo_funcionario .'"
                        >alterar</button>
                    </td>
                </tr>';
            }
    	// Se não houver registros
    	} else {
    		echo "Nenhum funcionário com o nome ".$nome." foi encontrado.";
    	}

      }
      return $sql;
    }

    public function buscaCPF($CPF){
        $conn = Connection::open();

        if(!$conn){
          $msg = 'Problemas na conexão';
        }
        else{
          /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/
          $sql = mysqli_query($conn, "SELECT * FROM funcionario WHERE cpf LIKE '%".$CPF."%' ORDER BY nome") or die(mysqli_error($conn));

          // Descobrimos o total de registros encontrados
      	$numRegistros = mysqli_num_rows($sql);

      	// Se houver pelo menos um registro, exibe-o
      	if ($numRegistros != 0) {
      		// Exibe os produtos e seus respectivos preços
      		while ($funcionario = mysqli_fetch_object($sql)) {
      			echo'
                  <tr>
                      <td>' . $funcionario->codigo_funcionario . '</td>
                      <td>' . $funcionario->nome .'</td>
                      <td>' . $funcionario->cpf .'</td>
                      <td>' . $funcionario->cidade .'</td>
                      <td>' . $funcionario->terminal .'</td>
                      <td>' . $funcionario->periodo .'</td>
                      <td>' . $funcionario->estado .'</td>
                      <td>
                          <button
                              class="btn alteracao"
                              value="' . $funcionario->codigo_funcionario .'"
                          >alterar</button>
                      </td>
                  </tr>';
              }
      	// Se não houver registros
      	} else {
      		echo "Nenhum funcionário com o CPF ".$CPF." foi encontrado.";
      	}

        }
        return $sql;
    }

    public function buscaCidade($cidade){
        $conn = Connection::open();

        if(!$conn){
          $msg = 'Problemas na conexão';
        }
        else{
          /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/
          $sql = mysqli_query($conn, "SELECT * FROM funcionario WHERE cidade LIKE '%".$cidade."%' ORDER BY nome") or die(mysqli_error($conn));

          // Descobrimos o total de registros encontrados
      	$numRegistros = mysqli_num_rows($sql);

      	// Se houver pelo menos um registro, exibe-o
      	if ($numRegistros != 0) {
      		// Exibe os produtos e seus respectivos preços
      		while ($funcionario = mysqli_fetch_object($sql)) {
      			echo'
                  <tr>
                      <td>' . $funcionario->codigo_funcionario . '</td>
                      <td>' . $funcionario->nome .'</td>
                      <td>' . $funcionario->cpf .'</td>
                      <td>' . $funcionario->cidade .'</td>
                      <td>' . $funcionario->terminal .'</td>
                      <td>' . $funcionario->periodo .'</td>
                      <td>' . $funcionario->estado .'</td>
                      <td>
                          <button
                              class="btn alteracao"
                              value="' . $funcionario->codigo_funcionario .'"
                          >alterar</button>
                      </td>
                  </tr>';
              }
      	// Se não houver registros
      	} else {
      		echo "Nenhum funcionário morando na cidade ".$cidade." foi encontrado.";
      	}

        }
        return $sql;
    }

    public function buscaCargo($cargo){
        $conn = Connection::open();

        if(!$conn){
          $msg = 'Problemas na conexão';
        }
        else{
          /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/
          $sql = mysqli_query($conn, "SELECT * FROM funcionario WHERE cargo LIKE '%".$cargo."%' ORDER BY nome") or die(mysqli_error($conn));

          // Descobrimos o total de registros encontrados
      	$numRegistros = mysqli_num_rows($sql);

      	// Se houver pelo menos um registro, exibe-o
      	if ($numRegistros != 0) {
      		// Exibe os produtos e seus respectivos preços
      		while ($funcionario = mysqli_fetch_object($sql)) {
      			echo'
                  <tr>
                      <td>' . $funcionario->codigo_funcionario . '</td>
                      <td>' . $funcionario->nome .'</td>
                      <td>' . $funcionario->cpf .'</td>
                      <td>' . $funcionario->cidade .'</td>
                      <td>' . $funcionario->terminal .'</td>
                      <td>' . $funcionario->periodo .'</td>
                      <td>' . $funcionario->estado .'</td>
                      <td>
                          <button
                              class="btn alteracao"
                              value="' . $funcionario->codigo_funcionario .'"
                          >alterar</button>
                      </td>
                  </tr>';
              }
      	// Se não houver registros
      	} else {
      		echo "Nenhum funcionário com o cargo ".$cargo." foi encontrado.";
      	}

        }
        return $sql;
    }

    public function buscaTerminal($terminal){
        $conn = Connection::open();

        if(!$conn){
          $msg = 'Problemas na conexão';
        }
        else{
          /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO*/
          $sql = mysqli_query($conn, "SELECT * FROM funcionario WHERE terminal LIKE '%".$terminal."%' ORDER BY nome") or die(mysqli_error($conn));

          // Descobrimos o total de registros encontrados
      	$numRegistros = mysqli_num_rows($sql);

      	// Se houver pelo menos um registro, exibe-o
      	if ($numRegistros != 0) {
      		// Exibe os produtos e seus respectivos preços
      		while ($funcionario = mysqli_fetch_object($sql)) {
      			echo'
                  <tr>
                      <td>' . $funcionario->codigo_funcionario . '</td>
                      <td>' . $funcionario->nome .'</td>
                      <td>' . $funcionario->cpf .'</td>
                      <td>' . $funcionario->cidade .'</td>
                      <td>' . $funcionario->terminal .'</td>
                      <td>' . $funcionario->periodo .'</td>
                      <td>' . $funcionario->estado .'</td>
                      <td>
                          <button
                              class="btn alteracao"
                              value="' . $funcionario->codigo_funcionario .'"
                          >alterar</button>
                      </td>
                  </tr>';
              }
      	// Se não houver registros
      	} else {
      		echo "Nenhum funcionário trabalhando no terminal ".$terminal." foi encontrado.";
      	}

        }
        return $sql;
    }

    //Alterando os dados de um funcionário no banco
    public function alterarDados($codigo){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
      //mysqli_query($conn, /*INSTRUÇÃO MYSQL PARA ALTERAR OS DADOS NO BANCO*/);
        Connection::close($conn);
        $msg = 'Dados alterados com sucesso!';
      }

      return $msg;
    }

    //Alterando o status de um funcionário no banco
    public function alterarStatus(){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
        if(!mysqli_query($conn, "UPDATE funcionario
          SET motivo = '".$this->motivo."',
          situacao = '".$this->situacao."'
          WHERE codigo_funcionario = '".$this->codigoDoFuncionario."';")){
          die(mysqli_error($conn));
          $msg = 'Funcionário não cadastrado!';
        }
        Connection::close($conn);
        $msg = 'Status alterado com Sucesso!';
      }

      return $msg;
    }

    //Gerando o relatório
    public function gerarRelatorioPorFuncao($setor){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{

      $sql = mysqli_query($conn, "SELECT cargo, periodo,
          COUNT(*) AS quantidade
          FROM funcionario
          WHERE situacao LIKE
          'ATIVO' AND periodo = '".$setor."' ORDER BY nome;");

      // Descobrimos o total de registros encontrados
    $numRegistros = mysqli_num_rows($sql);

    // Se houver pelo menos um registro, exibe-o
    if ($numRegistros != 0) {
        // Exibe os produtos e seus respectivos preços
        while ($funcionario = mysqli_fetch_object($sql)) {
            echo'
              <tr>
                  <td>' . $funcionario->cargo . '</td>
                  <td>' . $funcionario->quantidade .'</td>
                  <td>' . $funcionario->periodo .'</td>
              </tr>';
          }
    // Se não houver registros
    } else {
        echo "Nenhum funcionário trabalhando no terminal ".$terminal." foi encontrado.";
    }

    }
    return $sql;

    }

    public function gerarRelatorioPorTerminal($terminal){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
      /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

      }


    }

    public function gerarRelatorioPorFaixaSalarial($min, $max){
      $conn = Connection::open();

      if(!$conn){
        $msg = 'Problemas na conexão';
      }
      else{
      /*IMPLEMENTAR A RECUPERAÇÃO OS DADOS NO BANCO E GERAR O RELATÓRIO*/

      }
    }

}
?>
