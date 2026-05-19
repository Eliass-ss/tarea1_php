<?php
$num = $_POST['num'];
$cont = 1;
$sum = 0;

echo "<center>";
while ($cont <= $num) {
    $sum = ($sum + $cont);
    echo "Suma = $sum<br>";
    $cont = ($cont + 1);
}
echo "<br><br>";
echo "<a href='20_1.html'>Regresar</a>";
echo "</center>";
?>