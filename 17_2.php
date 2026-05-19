<?php
$monto = $_POST['precio'];
$descuento = 10;
$total = $monto * (1-($descuento / 100));

echo "<center>";
if ($monto >= 30) {
    echo "Decuento aplicado, total: $total$";
} else {
    echo "Sin descuento, total: $monto$";
}
echo "<br><br>";
echo "<a href='17_1.html'>Regresar</a>";
echo "</center>";
?>