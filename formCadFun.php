<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita+One|Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>SCAEM</title>
	<style>
    .cont1{
		font-family: "Roboto", sans-serif;
		background-color: rgb(8,83,148);
	}

	.topicos{
		font-family: "Roboto", sans-serif;
		font-size: 18px;
		margin-left: 46px;
		font-weight: 500;
	}
	.topicos2{
		font-family: "Roboto", sans-serif;
		font-size: 18px;
		margin-left: 46px;
		font-weight: 600;
	}
	</style>
</head>
<body>

<?php 
   
//   require_once "cabeca.php";
  require_once "conecta.php";
  require_once "topo.html"

    ?>

<br><br>
	<div class="row">
	
		<div class="container z-depth-3 col s6 offset-s4 cont1">
		<h4 class="center-align white-text"> Cadastrar Funcionário </h4>
		</div>
		
		<div class="col s8 offset-s3">

			<div class="container ">
			<br>
			<div class="col s10 offset-s1">
				<form method="POST" action="cadFuncionario.php">
                    <p class="topicos">Nome:</p>
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="name"> </label>
						<input type="text" name="nome" required>
					</div>

					<p class="topicos">CPF:</p>
					<div class="input-field">
						<i class="material-icons prefix ">email</i>
						<label for="cpf"></label>
						<input type="number" name="cpf" required>
					</div>
					
					<p class="topicos">Cargo:</p>
          			<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="cargo"></label>
						<input type="text" name="cargo" required>
					</div>

					<p class="topicos">Telefone:</p>
					<div class="input-field">
				
						<i class="material-icons prefix ">email</i>
						<label for="telefone:"></label>
						<input type="tel" name="telefone"   required>
						</div>
						<!-- placeholder="(99)9999-9999" pattern="(\([0-9]{2}\))([9]{1})?([0-9]{5})-([0-9]{4})" title="Número de telefone precisa ser no formato (99)9999-9999"  -->
					<!-- pattern="[0-9]{7}-[0-9]{4}" -->
				


	
              </div>
			  <br>
			  		<p class="right-align">
						<button class="waves-effect waves-light btn yellow black-text topicos2" type="submit"><i class="material-icons left">add</i> Cadastrar </button>
					</p>

			  </form>
			</div>
		</div>
	</div>





    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">

	</script>
</body>
</html>