<?php 
$pararLoop = 6;
$numero = 0;


while ($numero<=30){
	if ($numero == $pararLoop) {
		//este break obriga a terminar o ciclo for
		break;
	}
	echo $numero."<br>";
	$numero++;
}
?>