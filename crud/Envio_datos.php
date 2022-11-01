
<?php 
//error_reporting(0); 
include("../conexion/db.php");


$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$idCategoria = $_POST['idsex'];

$query ="INSERT INTO perfumes(nombrePerfume,imagen,Descripcion,Precio,idCategoria) VALUES('$nombre','$imagen','$descripcion','$precio','$idCategoria')";
$resultado=$conn->query($query);

if($resultado){
                
                //echo"el formulario fue enviado";
                header("Location: indexcrud.php");

              
            }else{
                
                echo "el formulario no fue enviado";
            }








/*

//if(isset($_POST['nombre']) || isset($_POST['imagen']) || isset($_POST['descripcion']) ||  isset($_POST['precio']) || isset($_POST['idsex'])){

    //addslashes(file_get_contents());

    $imagen=addslashes(file_get_contents($_FILES['imagen']));
    $nombre = $_POST['nombre'];
   // $descripcion = $_POST['descripcion'];
   // $precio = $_POST['precio'];
   // $idCategoria = $_POST['idsex'];

    $query="INSERT INTO perfumes(nombrePerfume,Descripcion,Precio,idCategoria,imagen) VALUES('$nombre','$descripcion','$precio','$idCategoria','$imagen')";

    $resultado=$conn->query($query);

    if($resultado){
                
                echo"el formulario fue enviado";
              
            }else{
                
                echo "el formulario no fue enviado";
            }
//}
*/

?>
























