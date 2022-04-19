
<?php

//Imprime Hora Mendoza

$unixTime = time();
$timeZone = new \DateTimeZone('America/Argentina/Mendoza');

$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);

$formattedTime = $time->format('d/m/Y H:i:s');
echo $formattedTime;
echo "<br>";

// Imprime dia
echo date("l");
echo "<br>";

// Imprime fecha
echo date('l jS \of F Y');
echo "<br>";

?>