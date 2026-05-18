<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$promedio = (($num1 + $num2 + $num3)/3);

echo "<center>";
echo "El promedio es: " . $promedio;
echo "<br><br>";
echo "<a href='10_1.html'>Regresar</a>";
echo "</center>";
?>