<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $productId = $_POST["productId"];
  $quantity = $_POST["quantity"];

  
  $query = "SELECT stock FROM producto WHERE codigo = '$productId'";
  $resultado = $conexion->query($query);

  if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $stock = $row["stock"];

    if ($stock >= $quantity) {
 
      $newStock = $stock - $quantity;

      
      $updateQuery = "UPDATE producto SET stock = $newStock WHERE codigo = '$productId'";
      $conexion->query($updateQuery);

    
      echo "Stock actualizado correctamente.";

      echo '<script>
              setTimeout(function() {
                location.reload();
              }, 1000);
            </script>';
    } else {
      
      echo "No hay suficiente stock disponible.";
    }
  } else {
    // Enviar una respuesta de error si el producto no se encuentra en la base de datos
    echo "El producto no existe.";
  }
} else {
  
  echo "Error: Método no permitido.";
}
?>

