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
                          <p><font color="RED">*</font>Código do funcionário que será alterado: <input placeholder="562262"></p>
                          <p>Nome: <input type="text" name="nome" placeholder="Ricardo Mendes Leal Junior"></p>
                          <p>CPF: <input type="number" name="CPF" maxlength="11" placeholder="42964904863"></p>
                          <p>Data de Nascimento: <input type="date" name="dataNascimento"></p>
                          <p>Telefone: <input type="text" name="telefone" placeholder="(16)99760-6009"></p>
                          <p>Salário: <input type="number" name="salario" min="0" placeholder="2000.00"></p>
                          <p>Cidade: <input type="text" name="cidade" placeholder="Araraquara"></p>
                          <p>Rua: <input type="text" name="rua" placeholder="Av. Professor Eugênio Francisco Malaman"></p>
                          <p>Número: <input type="number" name="numero" min="0" placeholder="346"> Complemento: <input type="number" min="0" name="complemento" placeholder="103"></p>
                          <p>Terminal: <input type="text" name="" placeholder="Limpeza"></p>
                          <p>Função:</p>
                          <input type="radio" name="status" value="COMUM"> COMUM<br>
                          <input type="radio" name="status" value="GERENTE"> GERENTE<br>
                          <input type="radio" name="status" value="TERCEIRIZADO"> TERCEIRIZADO<br>
                          <P>O campo que possui <font color="RED">*</font> é obrigatório.</P>
                          <input type="submit" value="Submit">
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
