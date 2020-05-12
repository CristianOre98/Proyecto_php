<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 5</title>
    <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head>

  


<body>

<div class="container" style="background: #bff09e;">
  <div class="row">
  <div class="col-10 mx-auto">

<hr>

<hr>
<div class="mx-auto">

<?php
    if (isset($_POST["txtCantidad"])) {
        $cantidad = $_POST["txtCantidad"];

        # crear el formulario
        echo '<form action="ordenar.php" method="post" class=" mx-auto">';
            $cuerpoForm = "";

          $cuerpoForm = $cuerpoForm.'<h2 class="text-center">Ingrese nombres de aves</h2>';
            #estructura for
            $e=0;
            for ($i=1; $i <= $cantidad; $i++) { 
             $e+=1;
               $cuerpoForm = $cuerpoForm.'  <div class="form-row ">
                <div class="form-group col-md-3 mx-auto">
                  <label for="aves">Nombre '.$e.'</label>
                  <input type="text" class="form-control" name="aves[]" id="aves[]" placeholder="Nombre de especies" required >
                </div>
              </div>';

            }

        echo $cuerpoForm.'<input type="hidden" name="txtCantidad" class="btn btn-success form-control mx-auto text-center" value="'.$cantidad.'">
          <input type="submit" value="Ordenar" class="btn btn-success form-control mx-auto text-center">

        </form>';
    } else {
        # volver al inicio
        echo '<a href="index.php">Debe enviar la cantidad de nombre de aves va a ingresar...</a>';
    }
    
?>

</div>

  </div>


  
 


  

</div>
</div>

<script src="../bootstrap-4.0.0/dist/js/jquery-3.3.1.slim.min.js"></script>
  <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>  
</body>
</html>