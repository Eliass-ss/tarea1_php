<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

echo "<center>";
if ($num1 < $num2) {
    echo "El primer numero es el menor";
} else {
    echo "El segundo numero es el menor";
}

echo "<br><br>";
echo "<a href='8_1.html'>Regresar</a>";
echo "</center>";
?>