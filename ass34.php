<?php
$month = array("January", "February", "March", "April", "May", "June", "July", "Auguest", "September", "October", "November", "December");
foreach ($month as $value) {
    echo "$value <br>";
}
$deletedvalue = "December";
$month = array_diff($month, [$deletedvalue]);
print_r($month);
?>