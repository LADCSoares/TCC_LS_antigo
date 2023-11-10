            <!DOCTYPE html>
            <html lang="pt-BR">
            <head>
            <meta charset="UTF-8">
                    <!--Import Google Icon Font-->
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita+One|Roboto|Rowdies">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                    <!--Import materialize.css-->
                    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
                    <link rel="stylesheet" href="css/estilo.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                    <!--Let browser know website is optimized for mobile-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

                <title>SCAEM</title>
                <style>
                .cont1{
                    font-family: "Lilita One", sans-serif;
                    background-color: rgb(8,83,148);
                }
                .cont4{
                    font-family: "Lilita One", sans-serif;
                }
                .margem{
                margin-left: 200px;
                }
                .topicos{
                    font-family: "Roboto", sans-serif;
                    text-transform: capitalize;
                    font-weight: 800;
                    font-size: 22px;
                }
                </style>

            </head>
            <body>

            <?php 
            
            //   require_once "cabeca.php";
            require_once "conecta.php";
            require_once "topo.html";
            
            $id= $_GET['idItem'];
            $item = "SELECT * FROM item WHERE idItem=$id";

            $estoque = "SELECT * FROM item WHERE idItem=$id";

            $resultado1 = mysqli_query($conexao, $item);

            $resultado2 = mysqli_query($conexao, $estoque);

            $linha = mysqli_fetch_array($resultado1);

            $controle = mysqli_fetch_array($resultado2);

            mysqli_close($conexao);

            ?>
        
                <!-- Programação do cabeçalho -->

        <div class="row">
            <div class="margem center-alling col s11 offset-s1">
            <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s6 "><a class=" black-text cont4 " href="#entrada">Entrada</a></li>
            <li class="tab col s6"><a class="black-text cont4 " href="#retirada">Retirada</a></li>
            </ul>


            <!-- Programação da parte da entrada -->

            <div id="entrada" class="col s12">
            <br><br><br>
                    <div class="row">
                    <div class="container z-depth-3 col s7 offset-s3 cont1">
                    <h4 class="center-align white-text"> ENTRADA </h4>
                    </div>
                    
                    <div class="col s9 offset-s2">

                        <div class="container ">
                        <br>
                        <div class="col s10 offset-s1">
                            <form method="POST" action="cadEntrada.php">

                                <p class="topicos">Item: <?php echo $linha['nomeItem']; ?></p>
           
                                    
                                

                                
                            



                        </div>
                        <br>
                                <p class="right-align">
                                    <button class="waves-effect waves-light btn yellow black-text topicos2" type="submit"><i class="material-icons left">add</i> Cadastrar </button>
                                </p>

                        </form>
                        </div>
                    </div>
                </div>
                    </div>



                <!-- Programação da parte da Saída -->


            <div id="retirada" class="col s12"><div class="row">
                    <br><br><br><br><br><br><br><br><br>
                    <div class="container z-depth-3 col s6 offset-s4 cont1">
                    <h4 class="center-align white-text"> CADASTRAR FUNCIONÁRIO </h4>
                    </div>
                    
                    <div class="col s8 offset-s3">

                        <div class="container ">
                        <br>
                        <div class="col s10 offset-s1">
                            <form method="POST" action="cadFuncionario.php">

                                <p class="topicos">Nome:</p>
                                <div class="input-field">
                                    <i class="material-icons prefix"></i>
                                    <label for="name"> </label>
                                    <input type="text" name="nome" required>
                                </div>

                                <p class="topicos">CPF:</p>
                                <div class="input-field">
                                    <i class="material-icons prefix"></i>
                                    <label for="cpf"></label>
                                    <input type="text"  name="cpf" placeholder="xxx.xxx.xxx-xx" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"  title="O CPF precisa estar neste formato xxx.xxx.xxx-xx"  maxlength="14"  required>
                                </div>	

                                <!-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" -->
                                
                                <p class="topicos">Cargo:</p>
                                <div class="input-field">
                                    <i class="material-icons prefix"></i>
                                    <label for="cargo"></label>
                                    <input type="text" name="cargo" required>
                                </div>

                                <p class="topicos">Telefone:</p>
                                <div class="input-field">
                            
                                    <i class="material-icons prefix "></i>
                                    <label for="telefone:"></label>
                                    <input type="tel"  name="telefone" id="telefone"  placeholder="(DDD)xxxx-xxxx" pattern="(\([0-9]{2}\))([9]{1})?([0-9]{4})-([0-9]{4})"  title="O número de telefone precisa estar neste formato (DDD)xxxx-xxxx"  maxlength="14"  required>
                                    </div>
                                    
                                

                                
                            



                        </div>
                        <br>
                                <p class="right-align">
                                    <button class="waves-effect waves-light btn yellow black-text topicos2" type="submit"><i class="material-icons left">add</i> Cadastrar </button>
                                </p>

                        </form>
                        </div>
                    </div>
        </div>
        </div>
            </div>





                    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                    
                    <script>
                            $(document).ready(function(){
                            $('.collapsible').collapsible();
                            });
                            
                            $(document).ready(function(){
                            $('.sidenav').sidenav();
                            });

                            $(document).ready(function(){
                            $('.tabs').tabs();
                            });

                    </script>
            
        </body>
        </html>