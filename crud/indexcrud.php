<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabla de contenido y modificacion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header style="background-color:black; color:white;">tabla de manejo de contenido </header>
        <h1 style="background-color:black; color:white;" ><!--Para Titulos-->
            </br>
          Administracion de contenido 
            </br>
        </h1>
            </br>
            <form action="Envio_datos.php"  method="POST" enctype="multipart/form-data">
                <p clase="0">
                    <div class="container"> 
                    <div class="row"> 
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label class="form-group">Selecciona una imagen</label>
                                        </br>
                                        <input  id="my-input" class="form-control" type="file" name="imagen" required =""/>
                                    </div>
                                </td>
                                <td>
                                    <label >Nombre del perfume</label> </br>
                                    </b>
                                    <input type="text" name="nombre" placeholder="Nombre...." value=""/ id="my-input" class="form-control" required =""/>
                                </td>
                                <td>
                                    <label >Descripcion</label> 
                                    </br>
                                    <input type="text" name="descripcion" placeholder="Aroma invierno.."  id="my-input" class="form-control" required =""/>
                                </td>
                                <td>
                                    <label class="form-group" >Precio</label> 
                                    </br>
                                    <input type="number"   step="0.1" placeholder="2500" name="precio"/ id="my-input" class="form-control" required ="">
                                </td>
                                <td>    
                                    <label class="form-group">idsex</label> 
                                    </br>
                                    <input  type="number" placeholder="1/2"  max="2" min="1" name="idsex"/ id="my-input" class="form-control" required =""> 
                                </td>   
                                <td >
                                    </br>
                                    <input type="submit" value="Enviar" id="my-input" class="form-control">
                                </td>
                            </tr >  
                        </table>
                    </div>
                     </div>
                      </br>
        



        </p>

             <p clase="0">
                <div class="container"> 
                <div class="row"> 
             <table style="width: 100%" >
                <tr style="background-color:black; color:white;">
                    <th >id</th>
                    <th>imagen</th>
                    <th> Nom_perf</th>
                    <th>descriocion</th>
                    <th>Presio</th>
                    <th>Genero</th>
                    <th>modificar</th>

                </tr>
                <tr>
                    <br>
                </tr>

                    <?php
                        include("../conexion/db.php");
                        $query = "SELECT * FROM perfumes";
                        $resultado = $conn->query($query);
                        while($row = $resultado->fetch_assoc()){
                    ?>
                        <tr>
                            <td>#<?php echo $row['id']; ?> </br></td>
                            <td><img height="110px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></br></td>
                             <td><?php echo $row['nombrePerfume']; ?> </br></td>
                            <td><?php echo $row['Descripcion']; ?> </br></td>
                            <td><?php echo $row['Precio']; ?>     $</br></td>
                            <td><?php echo $row['idCategoria']; ?> </br></td>
                            <td>
                                <a href="modificar.php?id=<?php echo $row['id']; ?>"> editar </a></br>
                                eliminar
                             </td>
                        </tr>
                    <?php
                         }
                    ?> 
            </table>
            </div>
            </div>
      </p>



     </br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>