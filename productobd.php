<?php
// Detalles de la conexión a la base de datos (reemplazar con las credenciales reales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abarrotess";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener productos
$sql = "SELECT id_Producto, Nombre_Producto, Descripcion_Producto, Precio_Venta, Categoria_Producto FROM productos";

// Obtener resultados
$result = $conn->query($sql);

// Array vacío para almacenar datos de productos
$productos = array();

// Si hay resultados
if ($result->num_rows > 0) {
  // Recorrer cada fila y agregarla al array
  while ($row = $result->fetch_assoc()) {
    $productos[] = $row;
  }
} else {
  echo "No se encontraron productos";
}

// Cerrar la conexión
$conn->close();
?>

