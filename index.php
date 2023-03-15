<html>
<head>
    <title>Examen Parcial</title>
    <script type="text/javascript">
        function confirmar() {
            return confirm('¿Estas seguro?, se eliminara los datos');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    <?php
    include("conexion.php");
    $sql = "select * from papas";
    $resultado = mysqli_query($conexion, $sql);

    ?>
    <h1>Lista de Papas</h1>
    <a href="agregar.php">Nuevo Registro</a> <br></br>
    <table>
        <thead>
            <tr>
                <th>idPapas</th>
                <th>Provedor</th>
                <th>Tipo</th>
                <th>FechaIngreso</th>
                <th>Costo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($filas = mysqli_fetch_assoc($resultado)) {
            ?>
                <tr>
                    <td><?php echo $filas['idPapas'] ?></td>
                    <td><?php echo $filas['Provedor'] ?></td>
                    <td><?php echo $filas['Tipo'] ?></td>
                    <td><?php echo $filas['FechaIngreso'] ?></td>
                    <td><?php echo $filas['Costo'] ?></td>
                    <td><?php echo "<a href ='editar.php?idPapas=" . $filas['idPapas'] . "'>EDITAR</a>"; ?>
                        <?php echo "<a href ='eliminar.php?idPapas=" . $filas['idPapas'] . "' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    mysqli_close($conexion);
    ?>
</body>

</html>