<?php
require 'db.php';

$message = '';
if (isset ($_POST['nome'])  && isset($_POST['logradouro']) && isset($_POST['numero']) && isset($_POST['bairro']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['telefone']) ) {

  $nome = $_POST['nome'];
  $logradouro = $_POST['logradouro'];
  $numero = $_POST['numero'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $telefone = $_POST['telefone'];

  $sql = 'INSERT INTO unidade(nome, logradouro, numero, bairro, cidade, estado, telefone) VALUES(:nome, :logradouro, :numero, :bairro, :cidade, :estado, :telefone)';

  $statement = $connection->prepare($sql);
  if ($statement->execute([':nome' => $nome, ':logradouro' => $logradouro, ':numero' => $numero, ':bairro' => $bairro, ':cidade' => $cidade, ':estado' => $estado, ':telefone' => $telefone])) {
    $message = 'Unidade cadastrada com sucesso';
  }

}

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
    
    <div class="container-fluid main offset-md-1 col-md-10">
        <div class="row">

  				<div class="card offset-md-1 col-md-10"">

			    <div class="card-header text-center">
			      <h2>Cadastrar unidade</h2>
			    </div>

			    <div class="card-body">

			      <?php if(!empty($message)): ?>
			        <div class="alert alert-success">
			          <?= $message; ?>
			        </div>
			      <?php endif; ?>
			      <form method="post">
			        <div class="form-group">
			          <label for="name">Nome</label>
			          <input type="text" name="nome" id="nome" class="form-control">
			        </div>
			        <div class="form-group">
			          <label for="email">Logradouro</label>
			          <input type="text" name="logradouro" id="logradouro" class="form-control">
			        </div>
			        <div class="form-group">
			          <label for="name">Numero</label>
			          <input type="text" name="numero" id="numero" class="form-control">
			        </div>
			        <div class="form-group">
			          <label for="name">Bairro</label>
			          <input type="text" name="bairro" id="bairro" class="form-control">
			        </div>
			        <div class="form-group">
			          <label for="name">Cidade</label>
			          <input type="text" name="cidade" id="cidade" class="form-control">
			        </div>
			        <div class="form-group">
			          <label for="name">Estado</label>
			          <input type="text" name="estado" id="estado" class="form-control">
			        </div>
			        <div class="form-group">
			          <label for="name">Telefone</label>
			          <input type="text" name="telefone" id="telefone" class="form-control">
			        </div>
			        <div class="form-group">
			          <button type="submit" class="btn btn-default-light btn-lg btn-block botao">Cadastrar</button>
			        </div>
			      </form>
			    </div>
			</div>
		</div>

		</div>
	</div>
     
  </body>
</html>