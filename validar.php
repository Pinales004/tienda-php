<?php
include("./conexion/db.php");
$correo=$_POST['correo'];
$clave=$_POST['clave'];

$_SESSION['nombre']=$correo;


$consulta="SELECT*FROM usuario WHERE correo='$correo' and clave='$clave'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){//administrador
    header("location:indexadmin.php");

}else
    if($filas['id_cargo']==2){//cliente
        header("location:index.php");
}

else{
    ?> 
    <?php
    ?>
    <h1 class="bad">Error</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);

