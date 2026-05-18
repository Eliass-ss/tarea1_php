<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$promedio = (($num1 + $num2 + $num3)/3);

echo "<center>";
if ($promedio > 6) {
    echo "¡¡El estudiante aprobo!!";
} else {
    echo "¡¡El estudiante reprobo!!";
}
echo "<br><br>";
echo "<a href='11_1.html'>Regresar</a>";
echo "</center>";
?>