
    <!DOCTYPE html>
      <html lang="PT-br">
    <head>
        <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lilita+One|Roboto+Slab">
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
	      </style>
  </head>
  
        <body>
      <?php 
      
      require_once "topo.html";
      require_once "conecta.php";
  
        ?>
      
      <main class="container">
        <h1> Funcionários </h1>
  
      
    <table class="bordered highlight responsive-table">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Cargo</th>
                  <th>Telefone</th>
                
              </tr>
            </thead>
            <tbody>
    
    <?php
    
      $sql = "SELECT idFuncionario,nome,cpf,cargo,telefone FROM funcionario";
      $resultado = mysqli_query($conexao,$sql); 
    // var_dump($resultado);
    //  $dados = mysqli_fetch_assoc($resultado);
  
    while($linha = mysqli_fetch_assoc($resultado))
        { 
          echo "<tr>";
          $id = $linha['idFuncionario'];
          $nome = $linha['nome'];
          $cpf = $linha['cpf']; 
          $cargo = $linha['cargo'];
          $telefone = $linha['telefone'];
        
          echo "<tr>";
          echo "<td>" . $id. "</td>";
          echo "<td>" . $nome . "</td>";
          echo "<td>" . $cpf . "</td>";
          echo "<td>" . $cargo . "</td>";
          echo "<td>" . $telefone . "</td>";
        
          echo "<td>  <a href= 'formAtualFun.php?idFuncionario=$id' class='btn-floating waves-effect waves-light  '> <i class='material-icons'>mode_edit</i></a> </td>";
          echo "<td> <a href='#modal1' onclick='preencheId($id)' class='btn-floating waves-effect waves-light#ffb300 amber darken-1 modal-trigger'> <i class='material-icons'>delete</i></a> </td>";
  
          echo "</tr>";
        } 
  
        ?>
        </tbody>
        </table>
        <br>
  
  
        
        <a href='formCadFun.php' class="waves-effect  waves-light btn yellow black-text topicos"><i class="material-icons right">add</i>Atualizar </a>
  
        </main>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br>
            <!-- <?php require_once "pe.php"?>  -->
  
      <!-- Modal Trigger -->
      <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
  
      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Excluir funcionário</h4>
          <p>Tem certeza que deseja excluir o funcionário?</p>
        </div>
        <div class="modal-footer center">
          <a href="" id="btn-sim" class="modal-close waves-effect waves-green btn-flat">Sim</a>
          <a href="#!" class="modal-close waves-effect waves-red btn-flat">Não</a>
        </div>
      </div>
    


      
          <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
          <script type="text/javascript" src="js/materialize.min.js"></script>


        <script type="text/javascript">
        $(document).ready(function(){
        $('.modal').modal();
        $('.dropdown-trigger').dropdown();
          <?php
            if (isset($_GET['result'])) {
              if ($_GET['result'] == true) {
                echo "M.toast({html: 'Funcionário salvo com sucesso!'})";
              } else {
                echo "M.toast({html: 'Erro ao salvar o funcionário!'})";
              }
            }?>
          });
  
        function preencheId(id) {
          let btnSim = document.getElementById("btn-sim");
          btnSim.href = "deletarFun.php?idFuncionario=" + id;
        }
        </script>
  
        </body>
      </html>
  
  