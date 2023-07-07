<?php
$currentHour = date('H');
if ($currentHour < 12) {
    echo "Good Morning!";
} else {
    echo "Good Afternoon!";
}
?>