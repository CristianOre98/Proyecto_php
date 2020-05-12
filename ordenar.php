<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 5</title>
    <link rel="stylesheet" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head>

  
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Menu</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../ejercicio 1/index.php">Ejercicio 1</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="../ejercicio 2/index.php">Ejercicio 2</a>
      </li>
    </ul>
  </div>
</nav>

<body>

<div class="container" style="background: #bff09e;">
  <div class="row">
  <div class="col-10 mx-auto">

<hr>

<hr>
<div class="mx-auto text-center">

<?php
    if (isset($_POST["txtCantidad"]  ) ) {
        $cantidad = $_POST["txtCantidad"];
        
      

       
            $Especies = $_POST["aves"];
     
            
           
          
                 #estructura for
              sort($Especies);
     
                $e=0;

                echo "<h3><b> Nombres de aves ordenados alfabeticamente </b></h3>";
                for ($i=0; $i < $cantidad ; $i++) { 
                    $e += 1;
                   echo "<h3><b>Nombre # ".$e.": ".$Especies[$i]." </b></h3>";
                
                }
                     
             # volver al inicio
             echo '<a href="index.php">Calcular nuevamente...</a>';
            
           
        
     
    } else {
        # volver al inicio
        echo '<a href="index.php">Debe enviar la cantidad de de nombres de aves...</a>';
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