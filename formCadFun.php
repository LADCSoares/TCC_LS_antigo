<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


	<title>SCAEM</title>
</head>
<body>

<?php 
   
//   require_once "cabeca.php";
  require_once "conecta.php";
  require_once "topo.html"

    ?>
    <br>

	<div class="row">
		<div class="col s7 offset-s4">

			<div class="container">

			<h3 class="center-align"> Cadastrar Funcionário </h3>
				<form method="POST" action="cadFuncionario.php">

					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="namo">Nome </label>
						<input type="text" name="nome" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix ">email</i>
						<label for="cpf">CPF</label>
						<input type="number" name="cpf" required>
					</div>

          			<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="cargo">Cargo</label>
						<input type="text" name="cargo" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix ">email</i>
						<label for="telefone">telefone</label>
						<input type="number" name="telefone" required>
					</div>

				
					<p class="right-align">
						<button class="waves-effect waves-light btn #ffab00 amber accent-4" type="submit"><i class="material-icons right">send</i> Cadastrar </button>
					</p>

				</form>

			</div>
		</div>
	</div>


			


    </form>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">

	</script>
</body>
</html>