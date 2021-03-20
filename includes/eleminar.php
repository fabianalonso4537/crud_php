<?php
include("server.php");

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM persona WHERE id =$id";
    $resultado=mysqli_query($conn,$query);
    if(!$resultado){
        die("consulta fallida");
    }
    $_SESSION ['msg']='datos eliminados correctamente';

    header("location: index.php");
}
?>