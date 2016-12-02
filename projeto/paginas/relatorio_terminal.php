<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Relatório Terminal</title>

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
    url: '../control/funcionarioController.php',
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
                        Gerência de funcionários
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
                        <h1>Relatório por terminal</h1>
                        <p class="small">Escolha um campo.</p>
                        <form name="cadastro" action="" method="post" onsubmit="return false;">
                            <input id="pagina" name="pagina" value="relatorio_terminal" style="display:none">

                            <div class="form-group col-sm-4">
                                <label for="periodo">Período:</label>
                                <select class="form-control" id="cargo" name="cargo" class="form-control">
                                    <option>COMUM</option>
                                    <option>GERENTE</option>
                                    <option>TERCEIRIZADO</option>
                                </select>
                            </div>

                            <p class="col-sm-12">
                                <input type="submit" name="submit" value="Enviar" class="btn btn-primary btn-md"/>
                                <input type="reset" id="limpar" name="limpar" value="Limpar" class="btn btn-danger btn-md"/>
                            </p>

                            <h1 id="msg" class="col-sm-12"></h1>
                        </form>

                        <div class="container col-sm-12">
                            <table id="results" class="table table-hover table-striped">
								<thead>
								<tr>
									<th>Cargo</th>
									<th>Terminal</th>
									<th>Quantidade</th>
									<th></th>
								</tr>
								<tr>
								</thead>
								<tbody id="msg">
								</tbody>
							</table>
						</div>
                    </div>
                </div>
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
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
