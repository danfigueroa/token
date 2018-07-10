<?php
  require 'db.php';
  $sql = 'SELECT * FROM unidade';
  $statement = $connection->prepare($sql);
  $statement->execute();
  $unidade = $statement->fetchAll(PDO::FETCH_OBJ);
?>

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
    <div class="card mt-5">
      <div class="card-header text-center">
        <h2>Todas as unidades</h2>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Logradouro</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
          </tr>
          <?php foreach($unidade as $und): ?>
            <tr>
              <td><?= $und->id; ?></td>
              <td><?= $und->nome; ?></td>
              <td><?= $und->logradouro; ?></td>
              <td><?= $und->numero; ?></td>
              <td><?= $und->bairro; ?></td>
              <td><?= $und->cidade; ?></td>
              <td><?= $und->estado; ?></td>
              <td><?= $und->telefone; ?></td>
              <td>
                <a href="editar.php?id=<?= $und->id ?>" class="btn btn-info">Editar</a>
                <a onclick="return confirm('Tem certeza que deseja deletar esta unidade?')" href="deletar.php?id=<?= $und->id ?>" class='btn btn-danger'>Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

    </body>
</html>