<?php

	session_start();

	require_once("config/conexao_bd.php");

?>

<!DOCTYPE html>
<html>
	<head>

		<title>PANDAdom</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

		<link rel="icon" type="image/png" href="imagens/panda.png">

	</head>

	<body>
		<div class="container" id="cabecalho">
			<div class="jumbotron">

			<h1 style="color: white;">PANDAdom</h1>

			<?php

				if(isset($_SESSION["nome_usuario"])){

					echo '<h3 style="color: white;>Bem vindo(a), '. $_SESSION["nome_usuario"] .'!</h3>';

				}else{

					echo '<h3 style="color: white;>Bem vindo(a)!</h3>';

				}

			?>

			<h3 style="color: white;">Bem vindo!</h3>

			<hr style="color: white;" class="my-4">

				<div align="right" id="buttons">
					<ul class="col-md-6" class="menu">
						<a class="btn btn-primary"  role="button" href="?pg=inicio">Inicio</a>
						<a class="btn btn-primary"  role="button" href="?pg=sobre">Sobre</a>
						<a class="btn btn-primary"  role="button" href="?pg=apink">Sobre Apink</a>

						<?php

							if(isset($_SESSION["id_usuario"])){

								echo '<a class="btn btn-primary"  role="button" href="?pg=painel">Painel do usuário</a> ';
								echo '<a class="btn btn-primary" name="sair" method="post" href="?pg=painel&sair=1">Sair</a>';

							}else{

								echo '<a class="btn btn-primary"  role="button" href="?pg=cadastro">Seja um Panda</a> ';
								echo '<a class="btn btn-primary"  role="button" href="?pg=entrar">Entrar</a>';

							}

						?>

					</ul>
				</div>
			</div>
		</div>

		</div>

			<div class="container" id="corpo">
				<?php
					if(isset($_GET["pg"])){
							$pagina= $_GET["pg"];
					}
					else{
							$pagina = "inicio";
					}				
					include("paginas/". $pagina . ".php");
				?>
			</div>
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<p10 style="color: white;">Edivaldo F. M. Júnior - 2019/1</p10>			

			</div>
		</div>
	</body>
</html>
