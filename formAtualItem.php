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
   $sql = "SELECT * FROM item WHERE idItem=$id";
   $resultado = mysqli_query($conexao, $sql);
   $linha = mysqli_fetch_array($resultado);
   mysqli_close($conexao);
    ?>
    <br><br><br>

<section class="container">
<div class="row">
	
    <div class="container z-depth-3 col s6 offset-s4 cont1">
    <h4 class="center-align white-text"> Cadastrar Item </h4>
    </div>
    
    <div class="col s8 offset-s3">

        <div class="container ">
        <br>
        <div class="col s10 offset-s1">
            <form method="POST" action="cadFuncionario.php">
                <p class="topicos">Item:</p>
                <div class="input-field">
                    <i class="material-icons prefix">perm_identity</i>
                    <label for="name"> </label>
                    <input type="text" name="tipo" required>
                </div>

                <p class="topicos">Descrição:</p>
                <div class="input-field">
                    <i class="material-icons prefix ">email</i>
                    <label for="cpf"></label>
                    <input type="text" name="descricao" required>
                </div>
            
            
                <p class="right-align">
                    <button class="waves-effect waves-light btn #ffab00 amber accent-4" type="submit"><i class="material-icons right">send</i> Cadastrar </button>
                </p>

            </form>
          </div>
        </div>
    </div>
</div>
	</section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  

</form>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</body>
</html>