<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Contacto</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  
    <?php
//    require_once "cabeca.php";
   include "conecta.php";
   include "topo.html";

   $id = $_GET['idFuncionario'];
   $sql = "SELECT * FROM funcionario WHERE idFuncionario=$id";
   $resultado = mysqli_query($conexao, $sql);
   $linha = mysqli_fetch_array($resultado);
   mysqli_close($conexao);
    ?>
    <br><br><br>

<section class="container">
		<div class="row">
		<h3 class="center-align">  Atualizar </h3>
			<article class="col s6 offset-s3">
				<form method="POST" action="atualizarFun.php">
                    
                <input type="hidden" name="idFuncionario" value="<?php echo $linha['idFuncionario']?>">
					
                    <div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nome </label>
						<input type="text" name="nome" value="<?php echo $linha['nome']; ?>" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix ">email</i>
						<label for="email">cpf</label>
						<input type="text" name="cpf" value="<?php echo $linha['cpf']; ?>" required>
					</div>

          <div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="apellido">cargo</label>
						<input type="text" name="cargo"  value="<?php echo $linha['cargo']; ?>" required>
					</div>

          <div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="apellido">Telefone</label>
						<input type="number" name="telefone"  value="<?php echo $linha['telefone']; ?>" required>
					</div>

				
					<p class="center-align">
						<button class="waves-effect waves-light btn #ffab00 amber accent-4" type="submit"><i class="material-icons right">send</i> Atualizar </button>
					</p>

				</form>

			</article>
		</div>
	</section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  

</form>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</body>
</html>