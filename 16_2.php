<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];
$salario = ($horas * $pago);

echo "<center>";
echo "Empleado: $nombre";
echo "<br><br>";
echo "Salario total: $salario$";
echo "<br><br>";
echo "<a href='16_1.html'>Regresar</a>";
echo "</center>";
?>