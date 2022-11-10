 <?php 
//error_reporting(0); 
include("../conexion/db.php");
$id=$_REQUEST['id'];



$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$idCategoria = $_POST['idsex'];

$query ="UPDATE perfumes SET nombrePerfume='$nombre', imagen='$imagen',  Descripcion='$descripcion', Precio='$precio', idCategoria='$idCategoria' WHERE id = '$id'";
$resultado=$conn->query($query);

if($resultado){
                
                //echo"el formulario fue enviado";
                header("Location: indexcrud.php");

              
            }else{
                
                echo "el formulario no fue enviado";
            }


?>