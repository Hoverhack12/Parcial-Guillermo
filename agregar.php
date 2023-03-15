<html>
    <head> 
        <title>AGREGAR</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <body>

        <?php

        if(isset($_POST['enviar'])){
            $idPapas=$_POST['idPapas'];
            $Provedor=$_POST['Provedor'];
            $Tipo=$_POST['Tipo'];
            $FechaIngreso=$_POST['FechaIngreso'];
            $Costo=$_POST['Costo'];
            
            include("conexion.php");
            $sql="insert into papas (idPapas,Provedor,Tipo,FechaIngreso,Costo) values('".$idPapas."','".$Provedor."','".$Tipo."','".$FechaIngreso."','".$Costo."') ";

            $resultado=mysqli_query($conexion,$sql);
            if($resultado){
                echo "<script language='JavaScript'> 
                alert('Los datos fueron agregados correctamente');
                location.assign('index.php');
                </script>";
            }else{
                echo "<script language='JavaScript'> 
                alert('Hubo un error en el registro de los datos');
                location.assign('index.php');
                </script>";
            }
            mysqli_close($conexion);

        }else{
        
        ?>
            <h1>Agregar Nuevo Registro</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label>idPapas</label>
                <input type="text" name="idPapas"> <br>
                <label>Provedor</label>
                <input type="text" name="Provedor"> <br>
                <label>Tipo</label>
                <input type="text" name="Tipo"> <br>
                <label>FechaIngreso</label>
                <input type="text" name="FechaIngreso"> <br>
                <label>Costo</label>
                <input type="text" name="Costo"> <br>
                <input type="submit" name="enviar" value="AGREGAR">
                <a href="index.php">Regresar</a>
                
            </form>
        </body>
        <?php 
        }
        ?>
    </head>
</html>