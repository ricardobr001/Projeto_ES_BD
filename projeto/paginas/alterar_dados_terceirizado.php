<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alterar Dados</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <script>
$(document).ready(function() {
  $('#limpar').click(function () {
      $('#msg').html("Mensagem");
  }

              );

  $('form').submit(function(){
 var dados= $(this).serialize();
  $.ajax({
  type: "POST",
  url: '../control/terceirizadoController.php',
  data: dados ,
  success: function(data, textStatus, jqXHR)  {
                 $('#msg').html(data);
              }
});
});
});

     </script>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../index.html">
                        Gerência de funcionárioss
                    </a>
                </li>
                <li>
                  <a href="javascript:;" data-toggle="collapse" data-target="#cadastro"><i class="fa fa-fw fa-arrows-v"></i> Cadastrar Funcionário<i class="fa fa-fw fa-caret-down"></i></a>
                     <ul id="cadastro" class="collapse">
                         <li>
                             <a href="cadastrar_contratado.php">Funcionario Contratado</a>
                         </li>
                         <li>
                             <a href="cadastrar_terceirizado.php">Funcionario Terceirizado</a>
                         </li>
                     </ul>
                </li>
                <li>
                    <a href="cadastrar_empresa.php">Cadastrar Empresa</a>
                </li>
                <li>
                    <a href="buscar.php">Buscar</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#relatorio"><i class="fa fa-fw fa-arrows-v"></i> Relatórios <i class="fa fa-fw fa-caret-down"></i></a>
                       <ul id="relatorio" class="collapse">
                           <li>
                               <a href="relatorio_funcao.php">Função</a>
                           </li>
                           <li>
                               <a href="relatorio_salario.php">Salario</a>
                           </li>
                           <li>
                               <a href="relatorio_terminal.php">Terminal</a>
                           </li>
                       </ul>
                </li>
                <li>
                    <a href="sobre.html">Sobre</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Campos que podem ser alterados</h1>
                        <p class="small">Os campos que possuem (*) são obrigatórios. Não insira caracteres acentuados.</p>
                        <form name="cadastro" action="" method="post" onsubmit="return false;">
                            <input id="pagina" name="pagina" value="alterar_dados" style="display:none">
                              <input id="pagina" name="pagina" value="alterar_dados" style="display:none">

                              <h3>Informações básicas</h3>

                              <div class="form-group col-sm-12">
                                  <label for="nome" class="control-label">*Nome:</label>
                                  <input
                                      type="text"
                                      id="nome"
                                      name="nome"
                                      class="form-control"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-4">
                                  <label for="CPF" class="control-label">*CPF:</label>
                                  <input
                                      pattern="[0-9.-]+"
                                      type="text"
                                      id="CPF"
                                      name="CPF"
                                      class="form-control"
                                      placeholder="000.000.000-00"
                                      maxlength="14"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-4">
                                  <label for="dataNascimento">*Data de nascimento:</label>
                                  <input
                                      type="date"
                                      id="dataNascimento"
                                      name="dataNascimento"
                                      class="form-control"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-4">
                                  <label for="telefone">Telefone:</label>
                                  <input
                                      type="tel"
                                      id="telefone"
                                      name="telefone"
                                      class="form-control"
                                      placeholder="(00)00000-0000"
                                  >
                              </div>

                              <h3>Endereço</h3>

                              <div class="form-group col-sm-4">
                                  <label for="endereco">*Endereço:</label>
                                  <input
                                      type="text"
                                      id="endereco"
                                      name="endereco"
                                      class="form-control"
                                      placeholder="Ex: Rua Castelo Branco"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-2">
                                  <label for="numero">*Número:</label>
                                  <input
                                      type="text"
                                      id="numero"
                                      name="numero"
                                      class="form-control"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-2">
                                  <label for="complemento">Complemento:</label>
                                  <input
                                      type="text"
                                      id="complemento"
                                      name="complemento"
                                      class="form-control"
                                  >
                              </div>

                              <div class="form-group col-sm-4">
                                  <label for="bairro">*Bairro:</label>
                                  <input
                                      type="text"
                                      id="bairro"
                                      name="bairro"
                                      class="form-control"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-4">
                                  <label for="cidade">*Cidade:</label>
                                  <input
                                      type="text"
                                      id="cidade"
                                      name="cidade"
                                      class="form-control"
                                      required
                                  >
                              </div>

                              <div class="form-group col-sm-4">
                                  <label for="situacao">*Situacao:</label>
                                  <input
                                      type="text"
                                      id="situacao"
                                      name="situacao"
                                      class="form-control"
                                      required
                                  >
                              </div>

                               <div class="form-group col-sm-4">
                                  <label for="CEP">CEP:</label>
                                  <input
                                      type="text"
                                      id="CEP"
                                      name="CEP"
                                      class="form-control"
                                      pattern="[0-9-]+"
                                      placeholder="00000-000"
                                      maxlength="9"
                                  >
                              </div>

                              <h3>Informações da rotina de trabalho</h3>

                              <div class="form-group col-sm-2">
                                  <label for="terminal">Terminal:</label>
                                  <select class="form-control" id="terminal" name="terminal" class="form-control">
                                      <option>A</option>
                                      <option>B</option>
                                      <option>C</option>
                                      <option>D</option>
                                      <option>E</option>
                                  </select>
                               </div>

                               <div class="form-group col-sm-2">
                                   <label for="periodo">Período:</label>
                                   <select class="form-control" id="periodo" name="periodo" class="form-control">
                                       <option>Manha</option>
                                       <option>Tarde</option>
                                       <option>Noite</option>
                                       <option>Madrugada</option>
                                   </select>
                               </div>

                               <div class="form-group col-sm-4">
                                   <label for="setor">Setor:</label>
                                   <select class="form-control" id="setor" name="setor" class="form-control">
                                       <option>Financeiro</option>
                                       <option>Limpeza</option>
                                       <option>Seguranca</option>
                                       <option>Informacoes</option>
                                   </select>
                               </div>

                               <div class="form-group col-sm-4">
                                   <label for="cnpj_empresa">CNPJ:</label>
                                   <input
                                       pattern="[0-9/-.]+"
                                       type="text"
                                       id="cnpj_empresa"
                                       name="cnpj_empresa"
                                       class="form-control"
                                       size="18"
                                       maxlength="18"
                                       placeholder="00.000.000/0000-00"
                                       required
                                   >
                               </div>

                               <p class="col-sm-12">
                                   <input type="submit" name="submit" value="Enviar" class="btn btn-primary btn-md"/>
                                   <input type="reset" id="limpar" name="limpar" value="Limpar" class="btn btn-danger btn-md"/>
                               </p>

                               <h1 id="msg" class="col-sm-12"></h1>

                        </form>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
