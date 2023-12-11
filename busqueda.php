
<?php

require 'conexion.php';
if(isset($_POST)){
$categoria = $_POST['search'];

        $query1 = "select * from images_ where Categoria LIKE '%$categoria%' OR Subcategoria LIKE '%$categoria%'";
        $resultado1 = mysqli_query($conn,$query1);
        foreach($resultado1 as $row1){ 
          ?>
                <div class="col-sm-4">
                    <a href="descripcion_objeto.php?id_img=<?php echo $row1['id']?>"><img src="images/<?php echo $row1['Imagen']; ?>" class="card-img-top remove-bg" style="width:200px; height:200px"></a><center><h5 class="text-primary"><?php echo $row1['Titulo']?></h5></center>
                </div>
<?php 
}
 echo $hmtl;
}
                
 
?>
