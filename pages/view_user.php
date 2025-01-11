<?php 
require '../includes/connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuário Visualizar</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous"
    >
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  
    <?php include('../includes/navbar.php'); ?>
   
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Visualizar usuário</h4>
              <a href="index.php" class="btn btn-warning float-end">Voltar</a>
            </div>
            <div class="card-body">
            <?php
                if (isset($_GET['id'])){
                    $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                    $sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
                    $query = mysqli_query($conexao, $sql);

                    if(mysqli_num_rows($query) > 0){
                        $usuario = mysqli_fetch_array($query);
            ?>
                <div class="mb-3">
                    <label>Nome</label>
                    <p class="form-control">
                        <?=$usuario['nome'];?>
                    </p>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <p class="form-control">
                    <?=$usuario['email'];?>
                    </p>
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <p class="form-control">
                    Protegida Por Segurança de Todos!
                    </p>
                </div>
                <?php
                } else {
                    echo "<h5>Usuário Não Encontrado!</h5>";
                }
            }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('../includes/footer.php'); ?> 

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
      crossorigin="anonymous"
    ></script>
  </body>
</html>
