<?php

include("./conexion/db.php");

if(isset($_POST["submit"])){

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];
$clave=$_POST['clave'];
// Check connection


$sql = "INSERT INTO usuario(Nombre,Apellido,Correo,Clave,id_cargo)
VALUES ('$nombre','$apellido','$clave',2)";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
