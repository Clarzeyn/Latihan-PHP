<?php
	$star=5;
    $star1 = 4;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=1){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "<br>";
	}

	for($a=1; $a<=$star1; $a++){
	for($b=0; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star1; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>