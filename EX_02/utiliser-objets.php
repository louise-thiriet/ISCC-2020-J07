<?php

$date1 = new DateTime('02-07-2020 13:10:00'); 
echo $date1->format('<p>d-m-Y H:i:s</p>');

$date2 = new DateTime('22-06-2020 09:00:00');
echo $date2->format('<p>d-m-Y H:i:s</p>');

$interval = $date2->diff($date1);
echo $interval->format('%a Jours, %H Heures, %I Minutes depuis le début de la piscine.');
?>