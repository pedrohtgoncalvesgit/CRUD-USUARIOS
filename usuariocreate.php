<?php
session_start();
require 'conexao.php'
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud JS</title>
  </head>
  <body>
        <!-- Incluindo o Nav  -->
    <?php include ('nav.php'); ?>

    <div class="container mt-4">
        <div class="row">
         
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Adicionar Usuarios
                        <a class="btn btn-primary float-end" href="index.php">Voltar</a> </h4>
                </div>

                <div class="card-body">
                    <form action="acoes.php" method="POST">
                        <div class="mb-3">
                            <label> Nome:</label>
                            <input type="text" name="nome" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label> Email:</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label> Data Nascimento:</label>
                            <input type="date" name="data_nasc" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label> Senha:</label>
                            <input type="password" name="senha" class="form-control">
                        </div>

                            <div class="mb-3">
                                <button type="submit" name="create_usuario" class="btn btn-primary">Salvar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>