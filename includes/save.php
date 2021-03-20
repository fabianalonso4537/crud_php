<?php 
include("server.php");
if (isset($_POST['save'])){
   $nombre=$_POST['nombre'];
   $apellido =$_POST['apellido'];
   $telefono =$_POST['telefono'];

   $query= "INSERT INTO  persona(nombre,apellido,telefono) VALUES ( '$nombre','$apellido','$telefono')";
   $resultado= mysqli_query($conn,$query );
   if (!$resultado){
      die("consulta fallida");
   }

   $_SESSION ['msg']='datos guardados';

   header("location:index.php");
}
?>