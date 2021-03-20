<?php
include("server.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM persona WHERE id =$id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $telefono = $row['telefono'];
    }
}
if(isset($_POST['actualizar'])){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];

    $query="UPDATE persona set nombre='$nombre',apellido=' $apellido',telefono=' $telefono' WHERE id = $id";
    mysqli_query($conn,$query);

    header("location: index.php");

}
?>


<div class="container p-4">
    <div class="row">
        <div class="cold-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id'] ?>" method="POST">
                <h1>actualizar datos</h1>
                <div class="form-group">
                    <input type="text" name="nombre" value="<?php echo $nombre  ?>" class="form-control" placeholder="actualizar nombre">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido" value="<?php echo $apellido ?>" class="form-control" placeholder="actualizar apellido">
                </div>
                <div class="form-group">
                    <input type="text" name="telefono" value="<?php echo $telefono ?>" class="form-control" placeholder="actualizar telefono">
                </div>
                <button class="btn btn-success" name="actualizar">
                    actualizar
                </button>
                </form>                                 
            </div>
        </div>
    </div>
</div>
