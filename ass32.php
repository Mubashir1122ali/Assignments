<?php
$i = 1;
$maxRows = 8;
while ($i <= $maxRows) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>