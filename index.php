<?php
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
                    <h4>Listar Usuarios
                        <a class="btn btn-primary float-end" href="usuariocreate.php">Adicionar usuario</a> </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th> 
                                <th>EMAIL</th>
                                <th>DATA NASCIMENTO</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql='select * from usuarios';
                            $usuarios = mysqli_query($conexao,$sql);
                            if(mysqli_num_rows($usuarios)>0){
                            foreach ($usuarios as $usuario){

                            ?>
                            <tr>
                                <td><?=$usuario['idusuarios']?></td>
                                <td><?=$usuario['nome']?></td>
                                <td><?=$usuario['email']?></td>
                                <td><?= date('d/w/Y',strtotime($usuario['data_nasc']))?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm text-white" href="">Editar</a>
                                    <form action="" method="post" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm" name="delete_usuarios">
                                        Excluir
                                    </button></form>
                                </td>
                            </tr>
                           <?php
                        }
                       }else{
                            echo("<h5>Nenhum usuario cadastrado </h5>");
                        }
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>