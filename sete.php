<?php 
$pararLoop = 20;
$numero = 0;


do{
	if ($numero == $pararLoop) {
		//este break obriga a terminar o ciclo for
		break;
	}
	echo $numero."<br>";
	$numero++;
}
while ($numero<=30)
?>