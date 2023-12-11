<?php

require 'database.php';
session_start();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>Objetos perdidos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link  rel="stylesheet" href="estilos.css"/> 
</head>
<body>					

   
<header>	
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">	
            <ul class="nav justify-content-end ml-auto">
                <?php if(isset($_SESSION['user_id']) && $_SESSION["status"]=="Activo"){ ?>
                  <li class="nav-item">
                      <a class="nav-link text-light"><?php echo "Bienvendo ".$_SESSION['user']; ?></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="cerrar_sesion.php">Cerrar sesion</a>
                  </li>
              <?php } 
              else 
                { ?>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="iniciar_sesion.php">Iniciar sesion</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="registrate.php">Registrate</a>
                  </li>   
              <?php } ?>
            </ul>
        </nav>


        <div class="cover   d-flex justify-content-center align-items-center flex-column">
            <h2>
             <b>OBJETOS PERDIDOS</b> 
            </h2>
            <p>
             <h3> <b> Porque encontrar tus pertenencias nunca fue tan fácil</b></h3>
            </p>
        </div>
        <section>
           <div class="row">
            <div class="opcion col s12 m4 l3">
                <a  href="he_perdido.php" class="perdido" style = "text-decoration: none">
                    <span class="middle-helper"></span>
                    <h2>HE PERDIDO</h2> 
                </a>
                <a href="buscar.php" class="encontrado" style = "text-decoration: none">
                    <span class="middle-helper"></span>
                    <h2>HE ENCONTRADO</h2> 
                </a>
            </div>
        </div>

        </section>

</header>
</body>
</html>
