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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../index.html">
                        Projeto
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
                  <a href="javascript:;" data-toggle="collapse" data-target="#alterar_dados"><i class="fa fa-fw fa-arrows-v"></i> Alterar Dados <i class="fa fa-fw fa-caret-down"></i></a>
                     <ul id="alterar_dados" class="collapse">
                         <li>
                             <a href="alterar_dados_contratado.php">Funcionario Contratado</a>
                         </li>
                         <li>
                             <a href="alterar_dados_terceirizado.php">Funcionario Terceirizado</a>
                         </li>
                     </ul>
                </li>
                <li>
                  <a href="javascript:;" data-toggle="collapse" data-target="#alterar_status"><i class="fa fa-fw fa-arrows-v"></i> Alterar Status <i class="fa fa-fw fa-caret-down"></i></a>
                     <ul id="alterar_status" class="collapse">
                         <li>
                             <a href="alterar_status_contratado.php">Funcionario Contratado</a>
                         </li>
                         <li>
                             <a href="alterar_status_terceirizado.php">Funcionario Terceirizado</a>
                         </li>
                     </ul>
                </li>
                <li>
                    <a href="buscar.php">Buscar</a>
                </li>
                <li>
                    <a href="relatorio_funcao.php">Relatório por Função</a>
                </li>
                <li>
                    <a href="relatorio_terminal.php">Relatório por Terminal</a>
                </li>
                <li>
                    <a href="relatorio_salario.php">Relatório por Faixa Salarial</a>
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
                        <form>
                          <input id="pagina" name="pagina" value="alterar_dados" style="display:none">
                          <p>Todos os campos são de preenchimento obrigatório</p>
                          <p>Não inserir caracteres acentuados</p>
                          <p>Código do Funcionário que será alterado: <input placeholder="562262" pattern="[0-9]+" type="text" id="codigo" name="codigo" value=""></p>
                          <p>Nome: <input pattern="[a-zA-Z ]+" type="text" id="nome" name="nome" value="" placeholder="Ricardo Mendes Leal Junior"></p>
                          <p>CPF: <input pattern="[0-9.-]+" type="text" id="CPF" name="CPF" value="" size="14" maxlength="14" placeholder="429.649.048-63"></p>
                          <p>Data de Nascimento: <input pattern="[0-9/]+" type="text" id="dataNascimento" name="dataNascimento" size="10" maxlength="10" placeholder="dd/mm/aaaa"></p>
                          <p>Telefone: <input pattern="[0-9()-]+" type="text" id="telefone" name="telefone" value="" size="13" maxlength="13" placeholder="(16)3216-9874"></p>
                          <p>Cidade: <input type="text" id="cidade" name="cidade" value="" placeholder="Araraquara"></p>
                          <p>Rua: <input type="text" id="rua" name="rua" value="" placeholder="Av. Professor Eugenio Francisco Malaman"></p>
                          <p>Bairro: <input type="text" id="bairro" name="bairro" value="" placeholder="Vila Jose Bonifacio"></p>
                          <p>CEP: <input pattern="[0-9-]+" type="text" id="CEP" name="CEP" value="" size="9" maxlength="9" placeholder="14802-080"></p>
                          <p>Número: <input type="number" id="numero" name="numero" value="" min="0" placeholder="346"> Complemento: <input type="number" id="complemento" name="complemento" min="0" placeholder="103"></p>
                          <p>Terminal: <input pattern="[a-zA-Z0-9]+" type="text" id="terminal" name="terminal" value="" size="1" maxlength="1" placeholder="A"></p>
                          <p>Setor: <input pattern="[a-zA-Z]+" type="text" id="setor" name="setor" value="" placeholder="Limpeza"></p>
                          <p><font color="RED">*</font>CNPJ: <input pattern="[0-9/-.]+" type="text" id="CNPJ" name="CNPJ" size="18" maxlength="18" value="" placeholder="62.075.633/0001-16"></p>

                          <input type="submit" value="Submit">
                          <br />
                          <br />
                          <h1 id="msg"></h1>
                          <br />
                          <br />
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
