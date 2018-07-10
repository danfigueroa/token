<?php
require 'db.php';

$senha_global = 'teste';
if (isset ($_GET['senha'])) {

  $senha = $_GET['senha'];
  $senha_global_sigla = $_GET['senha'];

  $sql = 'INSERT INTO senha(senha) VALUES(:senha)';

  $statement = $connection->prepare($sql);
  if ($statement->execute([':senha' => $senha])) {
    $message = 'Senha gerada com sucesso';
  }
  $sql_senha = 'SELECT * from SENHA  ORDER BY id DESC LIMIT 1';
  $statement = $connection->prepare($sql_senha);
  $statement->execute();
  $senha_global_numero = $statement->fetch(PDO::FETCH_OBJ);

}

?>

<!-- Grupo 8 - Daniel e Lorena-->

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">

    <title>Gerar senha</title>
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

            <div class="alert alert-success offset-md-2 col-md-8  text-center" role="alert">
                <h1 class="alert-heading">AGUARDE A CHAMADA NO MONITOR</h1>
                <h3 class="align-middle">Sua senha é:</h3>
                <hr>
            
            </div>

          <div class="offset-md-2 col-md-8 text-center">
                <span style="font-size: 10em; color: white;">
                <?php
               
                  echo $senha_global_sigla.$senha_global_numero->id;
               
                ?>
                </span>
                 
            </div>

          </div>  
          
          
        </div>
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
      setTimeout(() => {
        window.location = "/www/index.php";
      }, 5000);
      </script>
  </body>
</html>