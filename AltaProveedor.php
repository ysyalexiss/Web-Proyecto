<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");
$idProveedor = "";
$tipoProveedor = "";
$nombre = "";
$telefono = "";
$correo = "";
$direccion = "";

if (isset($_POST['submit'])) {
    $idProveedor = $_POST['idProveedor'];
    $tipoProveedor = $_POST['tipoProveedor'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    $query = "INSERT INTO proveedor (idproveedor, `tipo proveedor`, nombre, telefono, correo, direccion)
    VALUES ('$idProveedor', '$tipoProveedor', '$nombre', '$telefono', '$correo', '$direccion')";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error al insertar el registro";
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
    <title>Mercado Virtual</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <!-- Contenido -->
    <div class="container-fluid w-100" id="Contenido">
        <div class="row">
            <!-- Lista -->
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
                                <li class="list__inside">
                                    <a href="inventarioP.php" class="nav__link nav__link--inside">Ver inventario</a>
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
                                    <a href="Eproovedor.php" class="nav__link nav__link--inside">Eliminar</a>
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
            <!-- Formulario -->
            <div class="col-sm-12 col-lg-10 col-md-auto columna">

                <h1>Registrar un Proveedor</h1>
                <br><br>
                <form action="" method="POST" >
                    <Div class="container">
                        <div class="row">
                            <div class="col-10">
                                <h2 class="title-black">Datos generales</h2>
                            </div>+ <div class="col-2">
                                <h6>* Campos obligatorios</h6>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                            <h5>Id de Proveedor*</h5>
                            </div>
                            <div class="col">
                                <label for="tipoProveedor">Tipo de Proveedor:</label>
                            </div>
                            <div class="col">
                                <label for="nombre">Nombre:</label>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                            <input type="text" name="idProveedor" id="id" oninput="validateID()" maxlength="4"  maxlength="4" required>
                                <p id="id-error" style="display: none; color: red;">Por favor, ingresa un ID válido.</p>

                            </div>
                           
                            <div class="col">
                                <select name="tipoProveedor" id="tipoP"required disabled>
                                    <option value="lacteos" <?php echo $tipoProveedor === 'lacteos' ? 'selected' : ''; ?>>
                                        Lacteos
                                    </option>
                                    <option value="cuidadoP" <?php echo $tipoProveedor === 'cuidadoP' ? 'selected' : ''; ?>>
                                        Cuidado y aseo personal
                                    </option>
                                    <option value="abarrotes" <?php echo $tipoProveedor === 'abarrotes' ? 'selected' : ''; ?>> Abarrotes
                                    </option>
                                    <option value="bebidasL" <?php echo $tipoProveedor === 'bebidasL' ? 'selected' : ''; ?>>
                                        Bebidas y licores
                                    </option>
                                    <option value="limpiezaH" <?php echo $tipoProveedor === 'limpiezaH' ? 'selected' : ''; ?>>Limpieza para el
                                        hogar
                                    </option>
                                    <option value="farmacia" <?php echo $tipoProveedor === 'farmacia' ? 'selected' : ''; ?>>
                                        Farmacia
                                    </option>
                                </select>
                            </div>
                            <div class="col">
                            <input type="text" name ="nombre" id="nombre" maxlength="25" oninput="validarNombre(this)" required disabled>
                            <span id="error-messagenom" style="color: red;"></span>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <label for="telefono">Teléfono:</label>
                            </div>
                            <div class="col">
                                <label for="correo">Correo:</label>
                            </div>
                            <div class="col">
                                <label for="direccion">Dirección:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                            <input type="text" name="telefono" required id="telefono"  oninput="validatePhone()" minlength="10" maxlength="10" disabled>
                                <p id="phone-error" style="display: none; color: red;">Por favor, ingresa un número de
                                    teléfono válido.</p>
                            </div>
                            <div class="col">
                            <input type="email" name="correo" id="email"  oninput="validarEmail()" required disabled>
                                <span id="error-message" style="color: red;"></span>

                            </div>
                            <div class="col">

                            <input type="text" name ="direccion"id="direccion" maxlength="100" oninput=" validarDireccion(this)" required disabled>
                            <span id="dirE" style="color: red;"></span>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col"> </div>
                            <div class="col"> </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Guardar" id="registrar" disabled>
                               
                            </div>
                        </div>
                    </Div>
                </form>
</body>

</html>
</div>

</div>
</div>
<script src="js/AProved.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</body>

</html>