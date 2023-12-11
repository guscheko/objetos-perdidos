<?php 
session_start();

if(isset($_SESSION['user_id']) && $_SESSION["status"]=="Activo")
{
  
  require 'conexion.php';
  $query = "select * from images_";
  $resultado = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="subcategoria.js"></script>   
  
    <title>imagenes</title>
</head>
<body>
  <style type="text/css">
    .container{
      margin-top: 100px;
    }
    .cuadro{
      background-color: green;
      color:white;
      border: 3px solid black;
    }
  </style>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <ul class="nav justify-content-end ml-auto" >
            <li class="nav-item">
                      <a class="nav-link text-light"><?php echo "Bienvendo ".$_SESSION['user']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="images.php">subir imagen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="cerrar_sesion.php">Cerrar sesion</a>
            </li>
        </ul>
    </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center" class="text-success">HE ENCONTRADO</h3>
      </div>
      <div class="col-lg-3">
       
      </div>
      <div class="col-lg-6">
        <p class="cuadro" align="center"> Qué? / ¿Cuándo? / ¿Dónde? </p>
      </div>
      <div class="col-lg-3">
        
      </div>
      
    </div>
    <form action="subir.php" method="post" enctype="multipart/form-data" id="f1" name="f1">
    <div class="row">

       <div class="col-lg-12">
          <div class="row">
              <div class="col-lg-6">
                  <label class="text-info"> Categoria *</label>
                    <select class="form-control" name="categoria" id="categorias" onchange="cambia_categoria()">
                        <option value="0">Seleccione...</option>
                        <option value="ACCESORIOS">ACCESORIOS</option>
                        <option value="DOCUMENTACION">DOCUMENTACION</option>
                        <option value="GAFAS">GAFAS</option>
                        <option value="JOYERIA">JOYERIA</option>
                        <option value="LIBROS Y PAPELERIA">LIBROS Y PAPELERIA</option>
                        <option value="MOVIL">MOVIL</option>
                        <option value="INFORMATICA">INFORMATICA</option>
                        <option value="JUEGOS Y DEPORTES">JUEGOS Y DEPORTES</option>
                        <option value="LLAVES">LLAVES</option>
                        <option value="MEDICINA">MEDICINA</option>
                        <option value="ROPA Y CALZADO">ROPA Y CALZADO</option>
                        <option value="SALUDOS Y BELLEZA">SALUD Y BELLEZA</option>
                        <option value="OTROS">OTROS</option>
                    </select>
                
              </div>

              <div class="col-lg-6">
                  <label class="text-info"> SubCategoria *</label>
                    <select class="form-control" name="subcategoria" id="subcategorias">
                      <option value="0">SIN ASIGNAR</option>
                    </select>  
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-lg-12">
                 <label for="my-input"  class="text-info">Titulo de la Imagen</label>
              <input id="my-input" REQUIRED class="form-control" type="text" name="titulo" class="form-control">
              </div>
             
          </div>
           <hr>
           <div class="row">
              <div class="col-lg-12">
                 <label class="text-info"> Descripcion *</label>
                <textarea name="Descripcion" class="form-control"></textarea> 
              </div>
             
          </div>
           <hr>
          <div class="row">
              <div class="col-lg-12">
                <label for="my-input"  class="text-info">Seleccione una Imagen</label>
                <input id="my-input" REQUIRED type="file" name="imagen" class="form-control">
              </div>
             
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
                <?php if(isset($_SESSION['mensaje'])){ ?>
                <div class="alert alert-<?php echo $_SESSION['tipo']?> alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['mensaje'];?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php }?>
                
            </div>
           
                        
          </div>
           <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-3">
                <center><input type="submit" value="GUARDAR" class="btn btn-primary btn-block " name="Guardar"></center>
              </div>
              <div class="col-sm-3">
                <center><a href="index.php"><button type="button" class="btn btn-danger btn-block">REGRESAR</button></a></center>
              </div>
              <div class="col-sm-3"></div>
          </div>
       </div>
       
       <hr>
       <div class="col-lg-12">
        <br><br><br>
           <h1 class="text-primary text-center">Galeria de Imagenes</h1>
           <hr>
           <div class="row">
               <?php foreach($resultado as $row){ ?>
                  <div class="col-lg-4">
                    <img src="images/<?php echo $row['Imagen']; ?>" class="card-img-top" alt="..." style="width:200px; height:200px"><h5 class="card-title"><strong><?php echo $row['Titulo']; ?></strong></h5>
                  </div>
               
                  
                  <?php }?>
            </div>
        </div>
       
  </div>
  </form>
</div>

<?php
}
else
{

    header("Location:iniciar_sesion.php");
}

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>