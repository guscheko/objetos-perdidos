<?php 
session_start();
require 'conexion.php';
if(isset($_SESSION['user_id']) && $_SESSION["status"]=="Activo")
{



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="estilos.css" />
</head>

<style type="text/css">
    
</style>


<body>
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">   
        <ul class="nav justify-content-end ml-auto"  >
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
    <div class="contenedor ">
        <header class="cabeza">
            <div class="logo">
                <h1 class="text-primary"> Resultado de Busqueda</h1>
            </div>
            <!-- Input donde se colocara la busqueda especifica -->
            <form method="" action="">
                <input type="text" class="barra-busqueda" id="search" placeholder="Buscar" >
            </form>
        </header>
        
        <!-- Este div se activara cuando exista una peticion POST del archivo he_perdido para una busqueda especifica -->
        <div class="row" id="div1">
            <?php 
                $cate=$_POST['categoria'];
                $subc=$_POST['subcategoria'];               
                if(isset($_POST))
                {
                      
                       
                      $query1 = "select * from images_ where Categoria='$cate' && Subcategoria='$subc'";
                      $resultado1 = mysqli_query($conn,$query1);
                      foreach($resultado1 as $row1){ 
                ?>
                    <div class="col-sm-4">
                        <a href="descripcion_objeto.php?id_img=<?php echo $row1['id']?>"><img src="images/<?php echo $row1['Imagen']; ?>" class="card-img-top img-thumbnail remove-bg" style="width:200px; height:200px"></a><center><h5 class="text-primary"><?php echo $row1['Titulo']?></h5></center>
                    </div>
                <?php }  
                   
                }
                if(empty($_POST))
                {
                    $query = "select * from images_";
                      $resultado = mysqli_query($conn,$query);
                      foreach($resultado as $row){ 
                ?>
                    <div class="col-sm-4">
                        <a href="descripcion_objeto.php?id_img=<?php echo $row['id']?>"><img src="images/<?php echo $row['Imagen']; ?>" class="card-img-top remove-bg img-thumbnail" style="width:200px; height:200px"></a><center><h5 class="text-primary"><?php echo $row['Titulo']?></h5></center>
                    </div>
                <?php } 
                }


            ?>
        </div>
        
        <!-- Este div se activara al hacer busqueda del input de busqueda mediante ajax o si no hay ninguna peticion post-->
        <div class="row" id="div2"> 

             
            
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    //La funcion se activara cuando la pagine se termine de cargar
    $(document).ready(function(){
         // Al presionar un caracter o letra en el input search se mandara las peticiones mediante ajax al archivo busqueda.php
         $("#search").keyup(function(){
              //obtenemos el valor de input
              var parametros="search="+$(this).val()
              $.ajax({
                    //encriptamos los valores que seran enviados 
                    data:  parametros,
                    url:   'busqueda.php',
                    type:  'post',

                    beforeSend: function () { },
                    // Si el resultado es verdadero se deshabilitara el div2 y se activara el div1 con los datos del archivo busqueda.php
                    success:  function (response) {  
                        $("#div2").html("");               
                        $("#div1").html(response);
                  },
                  error:function(){
                       alert("error")
                    }
               });
         })
})
    </script>
</body>

</html>

<?php
}
else
{

    header("Location:iniciar_sesion.php");
}

?>