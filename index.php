<!-- Grupo 8 - Daniel e Lorena-->
<?php
require 'db.php';

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      
    <link rel="stylesheet" href="css/styles.css">

      <title>Senha Fácil</title>    
      </head>
      <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Senha fácil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta.php">Unidades de atendimento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="unidades.php">Administrativo</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class="container-fluid main">
        <div class="row">

            <div class="alert alert-success offset-md-2 col-md-8" role="alert">
                <center>
                <h1>RETIRE A SUA SENHA AQUI!</h1>
                </center>    
                <center>
                <h3>Toque na tela para selecionar a opção desejada.</h3>
                </center>
                <hr>
                
            </div>

          <div class="offset-md-2 col-md-8">
           
            <button onclick="mudarDePagina('normal.html')"  type="button" class="btn btn-default-light btn-lg btn-block botao">Atendimento Normal</button>
            <button onclick="mudarDePagina('preferencial.html')" type="button" class="btn btn-default-light btn-lg btn-block botao">Atendimento Preferencial</button>
                 
            </div>

          </div>
  
          
        </div>
     <script>
        function mudarDePagina(url) {
          window.location = url;
        }

       </script>
  </body>
</html>

