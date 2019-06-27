<link href="css/bootstrap-form-helpers.min.css" rel="stylesheet">
<script src="js/bootstrap-formhelpers.min.js"></script>

<h2 class="text-center">Cadastro</h2>

<form action="?pg=processar" method="POST">

	<div class="row">
		<div class="col-md-3">
		</div>
		
		<div class="col-md-6">

				<label for="nomeInput">Nome</label>
				<input class="form-control" id="nomeInput" type="text" name="nomeInput" placeholder="Digite seu nome">
				<br>

			
				<form>
				  <div class="form-group">
				    <label for="emailInput">Email</label>
				    <input type="email" class="form-control" id="emailInput" name="emailInput" aria-describedby="emailHelp" placeholder="Digite seu email">
				    <small id="emailHelp" class="form-text text-muted">Não compartilharemos seu e-mail com ninguém.</small>
				  </div>

				  <div class="form-group">
				    <label for="senhaInput">Senha</label>
				    <input type="password" class="form-control" id="senhaInput" name="senhaInput" placeholder="Digite sua senha">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
				  </div>

				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>


			<br>

		</div>
	<div class="col-md-6">
	</div>

	</div>

	
</form>
