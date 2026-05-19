<?php
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = ($precio * $cantidad);
$total = ($precio * $cantidad);

echo "<center>";
echo "<h2>Factura</h2>";
echo "<br><br>";
echo "Cliente: " . $nombre;
echo "<br><br>";
echo "Producto: " . $producto;
echo "<br><br>";
echo "Cantidad: " . $cantidad;
echo "<br><br><br>";
echo "Subtotal: " . $subtotal;
echo "<br>";
echo "Total: " . $total;
echo "<br><br>";
echo "<a href='18_1.html'>Regresar</a>";
echo "</center>";
?>