<?php

if (isset($_POST["email"]) && isset($_POST["senha"])) {
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$sql = "SELECT * FROM pandas WHERE email = '$email' AND senha = '$senha'";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		
		$_SESSION["id_usuario"] = $row["id"];
		$_SESSION["nome_usuario"] = $row["nome"];

		header("Location: ?pg=painel");

	}
	else{
		echo "Usuário ou senha inválido!";
	}
	
}

?>

<h2 class="text-center">Entrar</h2>

<form action="?pg=valida" method="POST">

	<div class="row">
		<div class="col-md-3">
		</div>
		
		<div class="col-md-6">
			
				<form action="?pg=entrar" method="POST">
				  <div class="form-group">
				    <label for="emailInput">Email</label>
				    <input type="email" class="form-control" id="emailInput" name="emailInput" aria-describedby="emailHelp" placeholder="Digite seu email" value="<? $email ?>">
				  </div>

				  <div class="form-group">
				    <label for="senhaInput">Senha</label>
				    <input type="password" class="form-control" id="senhaInput" name="senhaInput" placeholder="Digite sua senha" value="<?= $senha ?>">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
				  </div>

				  <button type="submit" class="btn btn-primary">Entrar</button>
				</form>


			<br>

		</div>
	<div class="col-md-6">
	</div>

	</div>
</form>