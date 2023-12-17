<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");

$idPersona = "";
$nombre = "";
$apellidoP = "";
$apellidoM = "";
$telefono = "";
$correo = "";
$password = "";
$activo = 0;
$puesto = "";

if (isset($_POST['submit'])) {
    $idPersona = $_POST['idPersona'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $activo = isset($_POST['activo']) ? 1 : 0;
    $puesto = $_POST['puesto'];

    if ($_POST['submit'] === "Buscar") {
        $query = "SELECT * FROM persona WHERE idPersona='$idPersona'";
        $resultado = mysqli_query($conexion, $query);

        if (mysqli_num_rows($resultado) > 0) {
            $row = mysqli_fetch_assoc($resultado);
            $nombre = $row['nombre'];
            $apellidoP = $row['apellidoP'];
            $apellidoM = $row['apellidoM'];
            $telefono = $row['telefono'];
            $correo = $row['correo'];
            $password = $row['password'];
            $activo = $row['activo'];
            $puesto = $row['puesto'];
        } else {
            echo "No se encontró ninguna persona con ese ID";
        }
        
    } else if ($_POST['submit'] === "Actualizar") {

        $query = "UPDATE persona SET nombre='$nombre', apellidoP='$apellidoP', apellidoM='$apellidoM', telefono='$telefono', correo='$correo', password='$password', activo='$activo', puesto='$puesto' WHERE idPersona='$idPersona'";

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "Modificacion registrada correctamente";
        } else {
            echo "Error al Modificar el empleado: " . mysqli_error($conexion);
        }
    } else {
        echo "Acción no válida";
    }
}
?>






<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <meta name=”keywords” content=”HTML5, CSS3, Javascript”>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/formulario.css">


    <title>Punto de venta</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <!-- Contenido -->
    <div class="container-fluid w-100" id="Contenido">
        <div class="row">
       
            <div class="col-sm-12 col-lg-2 col-md-auto  p-0" id="columna">
                <nav class="nav">
                    <ul class="list">

                        <li class="list__item">
                            <div class="list__button">
                                <a href="index.php" class="nav__link">Punto de Venta</a>
                            </div>
                        </li>

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <a href="#" class="nav__link">Producto</a>
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="AltaProducto.php" class="nav__link nav__link--inside">Registrar</a>
                                </li>

                                <li class="list__inside">
                                    <a href="MProducto.php" class="nav__link nav__link--inside">Modificar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="EProducto.php" class="nav__link nav__link--inside">Eliminar</a>
                                </li>
                            </ul>

                        </li>

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <a href="#" class="nav__link">Proveedores</a>
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="AltaProveedor.php" class="nav__link nav__link--inside">Registrar</a>
                                </li>

                                <li class="list__inside">
                                    <a href="MProveedor.php" class="nav__link nav__link--inside">Modificar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="Eproveedor.php" class="nav__link nav__link--inside">Eliminar</a>
                                </li>
                            </ul>

                        </li>

                        <li class="list__item list__item--click">
                            <div class="list__button list__button--click">
                                <a href="#" class="nav__link">Empleados</a>
                            </div>

                            <ul class="list__show">
                                <li class="list__inside">
                                    <a href="AltaPersona.php" class="nav__link nav__link--inside">Registrar</a>
                                </li>

                                <li class="list__inside">
                                    <a href="MPersona.php" class="nav__link nav__link--inside">Modificar</a>
                                </li>
                                <li class="list__inside">
                                    <a href="EPersona.php" class="nav__link nav__link--inside">Eliminar</a>
                                </li>
                            </ul>

                        </li>

                        <li class="list__item">
                            <div class="list__button">
                                <a href="login.php" class="nav__link">Salir</a>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-sm-12 col-lg-10 col-md-auto columna">
    <?php
    include("conexion.php");
    $sql = "SELECT * FROM producto";
    $resultado = mysqli_query($conexion, $sql);
    ?>
    <div class="container-fluid w-100" id="Contenido">
        <h1>Lista de productos </h1>
        <div class="container-fluid w-100" id="Contenido">
            <div style="height: 720px; overflow-y: scroll;">
                <table>
                    <!-- encabezado de la tabla -->
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <th>PROVEDOR</th>
                            <th>MARCA</th>
                            <th>MODELO</th>
                            <th>NOMBRE PRODUCTO</th>
                            <th>DESCRIPCION</th>
                            <th>PRECIO UNITARIO</th>
                            <th>STOCK</th>
                            <th>PRECIO DE COMPRA</th>
                            <th>CATEGORIA</th>
                            <th>Notificacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($filas = mysqli_fetch_assoc($resultado)) {
                            ?>
                            <!-- contenido de la tabla -->
                            <tr>
                                <td>
                                    <?php echo $filas['codigo'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['proveedor'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['idMarca'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['modelo'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['nombre_producto'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['descripcion'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['precio_unitario'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['stock'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['precio_compra'] ?>
                                </td>
                                <td>
                                    <?php echo $filas['Categoria'] ?>
                                </td>
                                <td>
                                    <?php
                                    $stock = $filas['stock'];
                                    if ($stock == 0) {
                                        echo "Sin inventario";
                                    } elseif ($stock > 3 && $stock <= 10) {
                                        echo "Pocas unidades";
                                    }elseif ($stock > 0 && $stock <4) {
                                        echo "Producto a punto de agotarse";
                                    } else {
                                        echo "OK";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>




        <script src="js/main.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</body>

</html>