<?php
$num1 = $_POST['num1'];

echo "<center>";
if ($num1 % 2 == 0) {
    echo "El numero es par";
} else {
    echo "El numero es impar";
}
echo "<br><br>";
echo "<a href='9_1.html'>Regresar</a>";
echo "</center>";
?>