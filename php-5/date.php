<?php
date_default_timezone_set('Europe/Istanbul');
echo date('l jS \of F Y h:i:s A');
?>
<hr>
<?php
date_default_timezone_set('Europe/Istanbul');
$date = new DateTime();
$print = $date->format('Y-m-d H:i:s');
echo  $print;
?>
<hr>
<?php
date_default_timezone_set('Europe/Istanbul');
$myLife = new DateTime('1998-12-12 14:00:00');
$nowDate = new DateTime();
$fark = $myLife->diff($nowDate);
echo $fark->format('%y Yıl %m Ay %d Gün %h Saat %i Dakika');