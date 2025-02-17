<?php 
///Classe datetime-primeira orientação a objeto
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

$periodo = new DateInterval("P15D");
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");



?>