<?php
$servidor = "localhost";
$usuario = "root";
$password = "1234";
$db = "productos";

$conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("Error al conectar a la base de datos");

$codigo = "";
$proveedor = "";
$idMarca = "";
$modelo = "";
$nombre_producto = "";
$descripcion = "";
$precio_unitario = "";
$stock = "";
$precio_compra = "";
$Categoria = "";

if ($conexion) {
    echo "";
} else {
    echo "mal";
}

if (isset($_POST['submit'])) {
    $codigo = $_POST['codigo'];
    $proveedor = $_POST['proveedor'];
    $idMarca = $_POST['idMarca'];
    $modelo = $_POST['modelo'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio_unitario = $_POST['precio_unitario'];
    $stock = $_POST['stock'];
    $precio_compra = $_POST['precio_compra'];
    $Categoria = $_POST['Categoria'];

    $query = "INSERT INTO producto (codigo, proveedor, idMarca, modelo, nombre_producto, descripcion, precio_unitario, stock, precio_compra, Categoria)
    VALUES ('$codigo', '$proveedor', '$idMarca', '$modelo', '$nombre_producto', '$descripcion', '$precio_unitario', '$stock', '$precio_compra', '$Categoria')";

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
    <link rel="stylesheet" type="text/css" href="css/styl.css">
    <title>Mercado Virtual</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

                <h1>Registrar Producto</h1>
                <br> <br>

                <form action="" method="POST">
                    <div class="container">

                        <div class="row">
                            <div class="col">
                                <label for="codigo">ID de producto*</label>
                            </div>
                            <div class="col">
                                <label for="proveedor">Proveedor*</label>
                            </div>
                            <div class="col">
                                <label for="idMarca">ID de Marca*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                                <input type="text" name="codigo" id="id" oninput="validateID()" maxlength="13" maxlength="13" required>
                                <p id="id-error" style="display: none; color: red;">Por favor, ingresa un ID válido.</p>

                            </div>
                            <div class="col">
                                <?php
                                $servidor = "localhost";
                                $usuario = "root";
                                $password = "1234";
                                $db = "productos";

                                $conexion = mysqli_connect($servidor, $usuario, $password, $db) or die("error");


                                if ($conexion) {
                                    echo "";
                                } else {
                                    echo "mal";
                                }


                                $query = "SELECT nombre FROM proveedor";
                                $result = mysqli_query($conexion, $query);

                                if (mysqli_num_rows($result) > 0) {

                                    echo '<select name="proveedor" disabled id="proveedor">  ';


                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                    }

                                    echo '</select>';
                                } else {
                                    echo 'No se encontraron proveedores.';
                                }


                                mysqli_close($conexion);
                                ?>



                            </div>
                            <div class="col">
                                <input type="text" name="idMarca" id="idMarca" oninput="validateIDMarca()" maxlength="6" maxlength="6" required disabled>
                                <p id="idM-error" style="display: none; color: red;">Por favor, ingresa un ID de marca.</p>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <label for="modelo">Modelo*</label>
                            </div>
                            <div class="col">
                                <label for="nombre_producto">Nombre del Producto*</label>
                            </div>
                            <div class="col">
                                <label for="descripcion">Descripción*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="modelo" id="modelo" maxlength="30" oninput="validarModelo(this)" required disabled>
                                <span id="error-messagemod" style="color: red;"></span>
                            </div>
                            <div class="col">
                                <input type="text" name="nombre_producto" id="nombre" maxlength="25" oninput="validarNombre(this)" required disabled>
                                <span id="error-messagenom" style="color: red;"></span>
                            </div>
                            <div class="col">
                                <input type="text" name="descripcion" id="descripcion" maxlength="40" oninput="validarDescripcion(this)" required disabled>
                                <span id="error-messagenom" style="color: red;"></span>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <label for="precio_unitario">Precio Unitario*</label>
                            </div>
                            <div class="col">
                                <label for="stock">Stock:</label>
                            </div>
                            <div class="col">
                                <label for="precio_compra">Precio de Compra*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="number" step="0.01" min="0" name="precio_unitario" id="precioU" oninput="validaPrecioU()" required disabled >
                            </div>
                            <div class="col">
                                <input type="number" name="stock"  min="0" id="stock"oninput="validaStock(this)" required disabled >
                            </div>
                            <div class="col">
                                <input type="number" step="0.01"  min="0" name="precio_compra" id="precioC" oninput="validaPrecioC(this)" required disabled>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col">
                                <h5>Categoria</h5>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select name="Categoria" id="categoria"required disabled>
                                    <option value="lacteos" <?php echo $Categoria === 'Lacteos ' ? 'selected' : ''; ?>>
                                        Lacteos
                                    </option>
                                    <option value="Cuidado y aseo personal" <?php echo $Categoria === 'Cuidado y aseo personal' ? 'selected' : ''; ?>>
                                        Cuidado y aseo personal
                                    </option>
                                    <option value="Abarrotes" <?php echo $Categoria === 'Abarrotes' ? 'selected' : ''; ?>> Abarrotes
                                    </option>
                                    <option value="Bebidas y licores" <?php echo $Categoria === 'Bebidas y licores' ? 'selected' : ''; ?>>
                                        Bebidas y licores
                                    </option>
                                    <option value="Limpieza para el hogar" <?php echo $Categoria === 'Limpieza para el hogar' ? 'selected' : ''; ?>>Limpieza para el
                                        hogar
                                    </option>
                                    <option value="Farmacia" <?php echo $Categoria === 'Farmacia' ? 'selected' : ''; ?>>
                                        Farmacia
                                    </option>
                                </select>
                            </div>

                            <div class="col">

                            </div>
                            <div class="col">
                                <input type="submit" name="submit" value="Guardar">
                            </div>
                        </div>




                    </div>
                </form>
            </div>

        </div>






        <script src="js/AProducto.js"></script>
        <script src="main.js"></script>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>