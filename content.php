<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


  </head>
  <body>







    <table style="width: 100"  >
            
            <?php
            $columna=0;
            $fila=0;
                        include("conexion/db.php");
                        $query = "SELECT * FROM perfumes";
                        $resultado = $conn->query($query);
                        while($row = $resultado->fetch_assoc()){
                          if($fila==0) echo '<tr>';


                        echo '<td>';
                       ?>


          
          <div class="col-sm-6 col-md-9 col-lg-10">
            <div class="block2-pic hov-img0">
              <img   height="350px"   src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"  alt="IMG-PRODUCT"/>
              
              <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                Vistazo rápido
              </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  <?php echo $row['nombrePerfume']; ?>
                </a>

                <span class="stext-105 cl3">
                   $<?php echo $row['Precio']; ?>    
                </span>
              </div>
            </div>
              

      <?php 
      echo '</td>';
      $fila=$fila+1;
      if($fila==4){
        
        echo '</tr>';
        
         
        $fila=0;
        $columna=$columna+1;
        if($columna==6){
          break;
        }
        }
        } ?>

      </table>









    
  
            
                   <?php
                        include("conexion/db.php");
                        $query = "SELECT * FROM perfumes";
                        $resultado = $conn->query($query);
                        while($row = $resultado->fetch_assoc()){
    
                       ?>

        <div class="col-sm-6 col-md-4  p-b-35 isotope-item men">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" alt="IMG-PRODUCT">

              <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                Quick View
              </a>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                <?php echo $row['nombrePerfume']; ?>
                </a>

                <span class="stext-105 cl3">
                <?php echo $row['Precio']; ?> $
                </span>
              </div>        

           <?php
        } ?>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>