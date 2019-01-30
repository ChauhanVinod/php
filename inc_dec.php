<?php 

	// $a = 10;
	for($num=0; $num <= 10; $num += 2 ) {
		echo "$a <br>";
	}

	// for($a=50; $a >= 1; $a++ ) {
	// 	echo "$a <br>";
	// }

	// $a = 12;
	// for($a=6; $a <= 12; $a-- ) {
	// 	echo "$a <br>";
	// }

	$x = 15;
	// echo $x++;
	echo ++$x ."<br>";


	$x = 2;
	// echo $x--;
	echo --$x ."<br>";


	$x = 45;
	$c= ++$x + $x-- - $x++ - --$x;
	echo "Ans. is = ". $c;

	// for($num=0; $num <= 10; $num += 2 ) {
	// 	echo "$a <br>";
	// }




?>