<?php
include("conexion.php");
?>
<!DOCTYPE html>
    <head> 
        <title>EDITAR</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <body>
            <?php
                if(isset($_POST['enviar'])){

                    $idPapas=$_POST["idPapas"];
                    $Provedor=$_POST["Provedor"];
                    $Tipo=$_POST["Tipo"];
                    $FechaIngreso=$_POST["FechaIngreso"];
                    $Costo=$_POST["Costo"];

                    $sql="update papas set Provedor='".$Provedor."', Tipo='".$Tipo."',FechaIngreso='".$FechaIngreso."',Costo='".$Costo."' where idPapas='".$idPapas."'";

                    $resultado=mysqli_query($conexion,$sql);
                    
                    if($resultado){
                        echo "<script language='JavaScript'> 
                        alert('Los datos fueron actualizados correctamente');
                        location.assign('index.php');
                        </script>";
                    
                    }else{
                        echo "<script language='JavaScript'> 
                        alert('Los datos no fueron actualizados correctamente');
                        location.assign('index.php');
                        </script>";
                    }

                    mysqli_close($conexion);

                }else{

                    $idPapas=$_GET['idPapas'];
                    $sql="select * from papas where idPapas='".$idPapas."'";
                    $resultado=mysqli_query($conexion,$sql);

                    $fila=mysqli_fetch_assoc($resultado);
                    $idPapas=$fila["idPapas"];
                    $Provedor=$fila["Provedor"];
                    $Tipo=$fila["Tipo"];
                    $FechaIngreso=$fila["FechaIngreso"];
                    $Costo=$fila["Costo"];

                    mysqli_close($conexion);
                
            ?>
            <h1>Editar Registro</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label>idPapas</label>
                <input type="text" name="idPapas" value="<?php echo $idPapas ?>"> <br>

                <label>Provedor</label>
                <input type="text" name="Provedor" value="<?php echo $Provedor ?>"> <br>

                <label>Tipo</label>
                <input type="text" name="Tipo" value="<?php echo $Tipo ?>"> <br>

                <label>FechaIngreso</label>
                <input type="text" name="FechaIngreso" value="<?php echo $FechaIngreso ?>"> <br>

                <label>Costo</label>
                <input type="text" name="Costo" value="<?php echo $Costo ?>"> <br>

                <input type="hidden" name="idPapas" value="<?php echo $idPapas ?>">

                <input type="submit" name="enviar" value="ACTUALIZAR">
                <a href="index.php">REGRESAR</a>
                

            </form>
        </body>
        <?php
                }
        ?>
    </head>
</html>

