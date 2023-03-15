<?php
$idPapas=$_GET['idPapas'];
include("conexion.php");

$sql="delete from papas where idPapas='".$idPapas."'";
$resultado=mysqli_query($conexion,$sql);

if($resultado){
    echo "<script language='JavaScript'> 
    alert('Los datos se eliminaron correctamente');
    location.assign('index.php');
    </script>";
    
} else {
    echo "<script language='JavaScript'> 
    alert('Los datos no se eliminaron correctamente');
    location.assign('index.php');
    </script>";
}
?>