<?php

include("./conexion/db.php");


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];
$clave=$_POST['clave'];
// Check connection


$sql ="INSERT INTO usuario(Nombre,Apellido,Correo,Clave,id_cargo) VALUES('$nombre','$apellido','$mail','$clave',2)";
$resultado=$conn->query($sql);

if($resultado){
                
  //echo"perfume modificado";
  header("Location: ModalLogin.php");


}else{
  
  echo "el formulario no fue enviado";
}

?>