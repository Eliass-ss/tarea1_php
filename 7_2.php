<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

echo "<center>";
if ($num1 > $num2) {
    echo "El primer numero es el mayor";
} else {
    echo "El segundo numero es el mayor";
}

echo "<br><br>";
echo "<a href='7_1.html'>Regresar</a>";
echo "</center>";
?>