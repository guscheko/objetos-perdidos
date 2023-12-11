<?php 
session_start();
if(isset($_SESSION['user_id']) && $_SESSION["status"]=="Activo")
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>detalle imagen</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">
		.container{
		
			margin-top: 100px;
		}
    </style>

    <?php
    require 'conexion.php';
    $id_imagen=$_GET['id_img'];

    if($_GET['msg']==1)
    {
        $mensaje="Registro modificado correctamente";
    }
    ?>	

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
     <form method="post" action="upd_descripcion_detalle.php">
   	 <div class="row">
     <div class="col-lg-6">
     <?php 
        $query = "select * from images_ where id=$id_imagen";
        $resultado = mysqli_query($conn,$query);
        foreach($resultado as $row){ ?>
            <img src="images/<?php echo $row['Imagen']; ?>" class="card-img-top" alt="...">
        <?php }

       if($_SESSION['rol'] == 2 || $row['status']==2){
            $disabled = 'disabled';
        }    
        ?>

     </div>
     <div class="col-lg-6">
     	<div class="form-group">
     		<h3>Titulo del Producto:</h3><br>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
     		<h5><?php echo $row['Titulo'];?></h5>
     	</div>
     	<div class="form-group">
     		<h3>Descripcion del Producto:</h3><br>
     		<h5><?php echo $row['Descripcion'];?></h5>
     	</div>	
     	<div class="form-group">
     		<h3>Estatus del objeto:</h3><br>
            <?php if($row['status']==1)
            {?>
               <h6><span class="badge badge-danger">No entregado<span></h6>
            <?php }
            else
            {?>
               <h6><span class="badge badge-success">Entregado<span></h6>
            <?php }  ?>
            
     		<br><label>Entregado a:</label>
     		<div class="row">
                <div class="col-lg-6">
     				<input type="text" name="entregado" value="<?php echo $row['Entregado']?>" class="form-control input-lg" <?php echo $disabled ?>/>

     			</div>
     			<div class="col-lg-6">
     				<input type="date" name="fecha_entregado"  value="<?php echo $row['fecha']?>" class="form-control" <?php echo $disabled ?> />
     			</div>
     			
     		</div>
     		<br><br><label>Sin entregar:</label><br><br>
     		<div class="row">		
                <div class="col-lg-12">   
     		         <textarea name="sinentregar"class="form-control" <?php echo $disabled ?>><?php echo $row['Noentregado']?></textarea>
     		    </div>
     		</div>	
     	</div>
        <?php  if (isset($_GET['msg'])) {  ?>
        <div class="form-group">
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong></strong><?php  echo $mensaje;?>
            </div>
            
        </div>
        <?php }?>
     </div>
     </div>
     <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-3">
                <center><input type="submit" value="ACTUALIZAR" name="submit" class="btn btn-primary btn-block " name="Siguiente" <?php echo $disabled ?>></center>
              </div>
              <div class="col-sm-3">
                <center><a href="buscar.php"><button type="button" class="btn btn-danger btn-block">REGRESAR</button></a></center>
              </div>
              <div class="col-sm-3"></div>
          </div>
     </form>
     </div>
   </div>
</body>
</html>
<?php
}
else
{

    header("Location:iniciar_sesion.php");
}

?>

