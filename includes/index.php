<?php include("server.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">DATOS PERSONALES</a>
        </div>
    </nav>
    
    <nav class="navbar navbar-secondary bg-secondary">
        <div class="container">
        <div class="container p-8">
        <div class="row">
            <div class="col-md-4">
                <?php if (isset($_SESSION['msg'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $_SESSION['msg'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();
                } ?>
                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <h1>Ingrese sus datos</h1>
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="escribe su nombre" autofocus>
                        </div>
                        </br>
                        <div class="form-group">
                            <input type="text" name="apellido" class="form-control" placeholder="escribe su apellido" autofocus>
                        </div>
                        </br>
                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control" placeholder="escribe su telefono" autofocus>
                        </div>
                        </br>
                        <input type="submit" class="btn btn-success btn-block" name="save" value="guardar">
                    </form>
                </div>

            </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>createdAt</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM persona";
                        $resulatdo_persona = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($resulatdo_persona)) { ?>
                            <tr>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['apellido'] ?></td>
                                <td><?php echo $row['telefono'] ?></td>
                                <td><?php echo $row['createdAt'] ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>

                                    <a href="eleminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>

        </div>
        </div>
    </nav>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/53cdf303c0.js" crossorigin="anonymous"></script>

</html>