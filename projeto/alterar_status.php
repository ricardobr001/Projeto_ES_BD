<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alterar Status</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

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
                    <a href="index.html">
                        Projeto
                    </a>
                </li>
                <li>
                    <a href="cadastro.php">Cadastrar</a>
                </li>
                <li>
                    <a href="alterar_dados.php">Alterar Dados</a>
                </li>
                <li>
                    <a href="alterar_status.php">Alterar Status</a>
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
                        <h1>Alterar Status</h1>
                        <p><font color="RED">*</font>Código do Funcionário que será alterado: <input placeholder="562262"></p>
                        <p><font color="RED">*</font>Status:</p>
                        <input type="radio" name="status" value="ATIVO"> ATIVO<br>
                        <input type="radio" name="status" value="INATIVO"> INATIVO<br>
                        <P>O campo que possui <font color="RED">*</font> é obrigatório.</P>
                        <input type="submit" value="Submit">
                        <br />
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
