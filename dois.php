<?php

for ($i=1; $i<=20; $i++){
	$nota =rand(1,20);
	echo 'A nota do aluno <span style="color:#0000cc">' .$i. '</span> é <span style="color:#0000cc">' .$nota. '</span><br>';

	if ($nota<8) {
		echo 'O aluno reprovou<br>';
	}
	elseif ($nota>=8 && $nota<=9.4) {
		echo 'O aluno foi admitido a exame<br>';
	}
	else {
		echo 'O aluno aprovou<br>';
	}
	echo "<br>";
}
?>