<?php
$celsius = $_POST['celsius'];
$farenheit = (($celsius * 1.8) + 32);

echo "<center>";
echo "Son $farenheit grados farenheit";
echo "<br><br>";
echo "<a href='15_1.html'>Regresar</a>";
echo "</center>";
?>