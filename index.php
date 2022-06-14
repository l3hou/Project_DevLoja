<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		
		<title>Loja Online do Dev</title>
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>

		<!-- imagem do cabecalho da pagina -->

		<div id="cabecalho">
				<img src="img/cabecalho.png" width="100%">

		</div>

		<!-- area de menu/navegacao -->
			
		<div id="menu-navegacao">
			
				<a href="?page=buscar">Página Inicial</a></li>
				<a href="?page=novo">Cadastrar Produtos</a>
			<a href="?page=listar">Todos os Produtos</a>
				

										
		</div>

		

		<!-- container códigos PHP redirecionamento sites -->

			<div class="container">
		<?php
			include("config.php");

			switch (@$_REQUEST['page']) {
			 	case "novo":
			 		include("novos_produtos.php");
			 		break;
			 	case "listar":
			 	include("lista_produtos.php");
			 	break;
			 	case "salvar":
			 		include("salvar_produto.php");
			 		break;
			 	case "editar":
			 		include("editar_produto.php");

			 		break;

			 			
			 		//mensagem de saudação ao entrar na page principal
			 	default:
			 	print "<h1>Bem vindo(a)!</h1>";
			 	print "<h2>Navegue nos menus.</h2>";



			 } 
				
			

		?>

			</div>






			


	

</body>
</html>