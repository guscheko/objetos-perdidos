<?php
require 'conexion.php';
if(isset($_SESSION['user_id']) && $_SESSION["status"]=="Activo")
{
if(isset($_POST['submit'])){
echo $id=trim($_POST['id']);
echo $entregado=trim($_POST['entregado']);
echo $fecha=trim($_POST['fecha_entregado']);
echo $noentregado=trim($_POST['sinentregar']);
echo $status=2;

$sql = "UPDATE `images_` SET `status`=$status,`Entregado`='$entregado',`fecha`='$fecha',`Noentregado`='$noentregado' WHERE id=$id";
    if(mysqli_query($conn, $sql)){

         header('location:descripcion_objeto.php?id_img='.$id.'&msg=1');
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
    }

}
}
?>
