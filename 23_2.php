<?php
$precio = $_POST['precio'];
$descuento = 13;
$iva = $precio * ($descuento / 100);
$total = ($precio + $iva);

echo "<center>";
echo "el total con IVA es: $total";
echo "<br><br>";
echo "<a href='23_1.html'>Regresar</a>";
echo "</center>";
?>