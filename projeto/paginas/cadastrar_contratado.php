<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastrar Contratado</title>

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
                        <h1>Insira os dados</h1>
                          <form name="cadastro" action="" method="post" onsubmit="return false;">
                            <p><font color="RED">*</font>Código do Funcionário: <input placeholder="562262" pattern="[0-9]+" type="text" id="codigo" name="codigo" value=""></p>
                            <p><font color="RED">*</font>Nome: <input pattern="[a-zA-Z ]+" type="text" id="nome" name="nome" value="" placeholder="Ricardo Mendes Leal Junior"></p>
                            <p><font color="RED">*</font>CPF: <input pattern="[0-9.-]+" type="text" id="CPF" name="CPF" value="" size="14" maxlength="14" placeholder="429.649.048-63"></p>
                            <p><font color="RED">*</font>Data de Nascimento: <input pattern="[0-9/]+" type="text" id="dataNascimento" name="dataNascimento" size="10" maxlength="10" placeholder="dd/mm/aaaa"></p>
                            <p><font color="RED">*</font>Telefone: <input pattern="[0-9()-]+" type="text" id="telefone" name="telefone" value="" size="13" maxlength="13" placeholder="(16)3216-9874"></p>
                            <p><font color="RED">*</font>Salário: <input type="number" id="salario" name="salario" value="" min="1" placeholder="2000.00"></p>
                            <p><font color="RED">*</font>Período: <input pattern="[a-zA-Z]+" type="text" id="periodo" name="periodo" value="" placeholder="Manhã"></p>
                            <p><font color="RED">*</font>Cidade: <input pattern="[a-zA-Z]+" type="text" id="cidade" name="cidade" value="" placeholder="Araraquara"></p>
                            <p><font color="RED">*</font>Rua: <input pattern="[a-zA-Z.]+" type="text" id="rua" name="rua" value="" placeholder="Av. Professor Eugênio Francisco Malaman"></p>
                            <p><font color="RED">*</font>Bairro: <input pattern="[a-zA-Z.]+" type="text" id="bairro" name="bairro" value="" placeholder="Vila José Bonifácio"></p>
                            <p><font color="RED">*</font>CEP: <input pattern="[0-9-]+" type="text" id="CEP" name="CEP" value="" size="9" maxlength="9" placeholder="14802-080"></p>
                            <p><font color="RED">*</font>Número: <input type="number" id="numero" name="numero" value="" min="0" placeholder="346"> Complemento: <input type="number" id="complemento" name="complemento" min="0" placeholder="103"></p>
                            <p><font color="RED">*</font>Terminal: <input pattern="[a-zA-Z0-9]+" type="text" id="terminal" name="terminal" value="" size="1" maxlength="1" placeholder="A"></p>
                            <p><font color="RED">*</font>Setor: <input pattern="[a-zA-Z]+" type="text" id="setor" name="setor" value="" placeholder="Limpeza"></p>
                            <p><font color="RED">*</font>Data de Entrada: <input pattern="[0-9/]+" type="text" id="dataEntrada" name="dataEntrada" size="10" maxlength="10" placeholder="dd/mm/aaaa"></p>
                            <p><font color="RED">*</font>Quantidade de horas semanais: <input type="number" id="qtddHorasTrabalhadas" name="qtddHorasTrabalhadas" value="" min="1" placeholder="40"></p>
                            <p><font color="RED">*</font>Cargo:</p>
                            <input type="radio" id="cargo" name="cargo" value="COMUM"> COMUM<br>
                            <input type="radio" id="cargo" name="cargo" value="GERENTE"> GERENTE<br>
                            <P>O campo que possui <font color="RED">*</font> é obrigatório.</P>
                            <input type="submit" name="submit" value="Enviar">
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
    url: 'control/contratadoController.php',
    data: dados ,
    success: function(data, textStatus, jqXHR)  {
                   $('#msg').html(data);
                }
});
});
});

       </script>
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
