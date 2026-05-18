<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$total = ($num1 - $num2);

echo "<center>";
echo "El resultado de la resta es:  " . $total;
echo "<br><br>";
echo "<a href='3_1.html'>Regresar</a>";
echo "</center>";
?>