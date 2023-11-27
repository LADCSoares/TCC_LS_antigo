<?php

if(isset($_POST['login'])){

    include_once('conecta.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email='$usuario'";
    $resultado = mysqli_query($conexao, $sql);  

    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_assoc($resultado);
        // if(password_verify($senha,$dados['senha'])){
        if($senha == $dados['senha']){
           
            session_start();
            $_SESSION["id"] = $dados['id'];
            $_SESSION["usuario"] = $dados['email'];
            $_SESSION["privilegio"] = $dados['privilegio'];

            if($dados['privilegio'] == 1){
                header("location:inicioAdm.php");
            } else {
                header("location:inicioUsu.php");
            }
            
        }
    } 
}
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
       

        <title>Login</title>
        <style>
            body {

            background-image: url(imagens/exemplo3.png);

            }

            #login {

            display: flex; /*     centraliza no meio da página        */

            align-items: center; /* centralizar itens */ 

            justify-content: center;  /* coloca bem ao meio */

            height: 92vh;;  

            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

            }

            .formulario {
            
            background-color: rgba(19, 19, 19, 0.3); /* cor de fundo do formulario de login */
            
            padding: 40px; /* tamanho das bordas */
            
            border-radius: 2px;
            
            width:280px; /* largura do fundo */
            
            }

            .titleLogin {
            
            
            padding-bottom: 50px;
            
            opacity: 0.8;
            
            color: #fff; /* cor do titulo de login */
            
            }

            .conteudoUsuario {
            
            color : #fff; /* cor de email e senha */
            
            opacity: 0.8;  /* opacidade da cor do email e senha */
            
            }

            .card-content-area {
            
            display: flex; /* joga as linhas para baixo além de distanciar o "login" e o esqueci minha senha */
            
            flex-direction: column;
            
            padding:15px 0; /* distancia das escritas */
            
            }

            .card-content-area input {
            
            margin-top: 10px;
            
            padding:0 5px;
            
            background-color: transparent;  /* em vez de ser colunas deixa como linhas */
            
            border:none; /* deixa sem bordas na parte de inserir seus dados */
            
            border-bottom: 1px solid #e1e1e1; /* mostra as linhas tamanho e suas cores */
            
            outline: none;
            
            color: #fff;
            
            
            }

            .card-footer {
            
            display: flex; /* centraliza o esqueci minha senha */
            
            flex-direction: column;
            
            }

            .card-footer .submit{
            
            width: 100%; /* tamanho do botão de login */
            
            height: 40px; /* comprimento do botão */
            
            background-color: rgb(124, 57, 57); /* cor do botão do login */
            
            border:none; /* deixa o botão sem bordas */
            
            color:#e1e1e1; /* cor da letra do login */
            
            margin: 10px 0;
            
            }

            .card-footer a {
            
            text-align: center;
            
            font-size: 12px; 
            
            opacity: 0.8;
            
            color: #fff;
            
            
            
            }

        </style>

    </head>

    <body>
        <br> <br> <br>
        <div id="login">

            <form method="POST" class="formulario">

                <div class="titleLogin">

                    <h2>Login</h2>

                </div>

                <div class="conteudoUsuario">

                    <div class="card-content-area">

                        <label for="usuario">Usuário</label>

                        <input type="usuario" name="usuario" class="validate" id="usuario" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" name="senha" id="password" autocomplete="off">

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" name="login" value="login" class="submit">

                    <a href="recuperar-senha.php" class="recuperar_senha">Esqueci minha senha</a>
                  

                </div>

            </form>

        </div>

    </body>

</html>