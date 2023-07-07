<?php
$dayOfWeek = date('l');
$dayOfWeek = strtolower($dayOfWeek);
switch ($dayOfWeek) {
    case 'monday':
        echo "Today is Monday.";
        break;
    case 'tuesday':
        echo "Today is Tuesday.";
        break;
    case 'wednesday':
        echo "Today is Wednesday.";
        break;
    case 'thursday':
        echo "Today is Thursday.";
        break;
    case 'friday':
        echo "Today is Friday.";
        break;
    case 'saturday':
        echo "Today is Saturday.";
        break;
    case 'sunday':
        echo "Today is Sunday.";
        break;
    default:
        echo "Unable to determine the day of the week.";
        break;
}
?>