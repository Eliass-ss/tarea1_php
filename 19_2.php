<?php
$num = $_POST['num'];
$cont = 1;
$mult = 0;

echo "<center>";
while ($cont <= 10) {
    $mult = ($num * $cont);
    echo "$num x $cont = $mult<br>";
    $cont = ($cont + 1);
}
echo "<br><br>";
echo "<a href='19_1.html'>Regresar</a>";
echo "</center>";
?>