<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Buscar</title>

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
						<h1>Busca</h1>
						<form name="buscaCPF" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarCPF" style="display:none">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-btn">
										<button 
											type="button" 
											class="btn btn-default dropdown-toggle" 
											data-toggle="dropdown" 
											aria-haspopup="true" 
											aria-expanded="false"
											id="btnSearchType"
											>
											Por CPF<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Por CPF</a></li>
											<li><a href="#">Por nome</a></li>
											<li><a href="#">Por cargo</a></li>
											<li><a href="#">Por terminal</a></li>
											<li><a href="#">Por cidade</a></li>
										</ul>
										<script>
										 	$(function(){											
												$(".dropdown-menu").on('click', 'li a', function(){
													$("#btnSearchType:first-child").text($(this).text());
													$("#btnSearchType:first-child").val($(this).text());
												});
											});
										</script>
									</div>
									<input 
										class="form-control"
										placeholder="000.000.000-00" 
										pattern="[0-9.-]+" 
										type="text" 
										id="CPF" 
										name="CPF" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
											id="btnSearch"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<!--<form name="buscaNome" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarNome" style="display:none">

							<div class="form-group">
								<label for="nome" class="control-label">Por nome:</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="nome" 
										name="nome" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<form name="buscaCargo" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarCargo" style="display:none">

							<div class="form-group">
								<label for="cargo" class="control-label">Por cargo:</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="cargo" 
										name="cargo" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<form name="buscaTerminal" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarCargo" style="display:none">

							<div class="form-group">
								<label for="terminal" class="control-label">Por terminal:</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="terminal" 
										name="terminal" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<form name="buscaCidade" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarCidade" style="display:none">

							<div class="form-group">
								<label for="cidade" class="control-label">Por cidade:</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="cidade" 
										name="cidade" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<form name="buscaSalario" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarSalario" style="display:none">

							<div class="form-group">
								<label for="salario" class="control-label">Por faixa salarial (Funcionários ativos):</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="salario" 
										name="salario" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<form name="buscaFuncao" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarFuncao" style="display:none">

							<div class="form-group">
								<label for="funcao" class="control-label">Por função:</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="funcao" 
										name="funcao" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>

						<form name="buscaPeriodo" action="" method="post" onsubmit="return false;">
							<input id="pagina" name="pagina" value="buscarPeriodo" style="display:none">

							<div class="form-group">
								<label for="periodo" class="control-label">Por período:</label>
								<div class="input-group">
									<input 
										class="form-control"
										pattern="[0-9.-]+" 
										type="text" 
										id="periodo" 
										name="periodo" 
									>
									<span class="input-group-btn">
										<button
											type="submit"
											value="Submit" 
											class="btn btn-default" 
											type="button"
											aria-hidden="true"
										>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</div>
						</form>                                                                                                                        -->

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
