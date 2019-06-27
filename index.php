<?php

if (isset($_COOKIE["panda"])) {
	echo $_COOKIE["panda"];
}
else{
	setcookie("panda", "panda", (time() + 30));	
}

exit;

session_start();

require_once("config/conexao_bd.php");

?>

<!DOCTYPE html>
<html>
	<head>

		<title>PANDAdom</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>

	<body>
		<div class="container" id="cabecalho">
			<div class="jumbotron">

			<h1 style="color: white;">PANDAdom</h1>

			<?php

				if(isset($_SESSION["nome_usuario"])){

					echo '<h3 style="color: white;>Bem vindo, '. $_SESSION["nome_usuario"] .'!</h3>';

				}else{
					echo '<h3 style="color: white;">Bem vindo!</h3>';
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

							if(isset($_SESSION["nome_usuario"])){

								echo '<a class="btn btn-primary"  role="button" href="?pg=inicio">Painel do usuário</a> ';
								echo '<a href="?pg=painel&logout=1">Sair</a>';

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
