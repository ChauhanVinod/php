<?php 
	
	$a = 24;
	//$b = "24";
	$b = "Hello";


	if($a != $b) {
		echo "Welcome ! <br>";
	} else {
		echo "get Out ! <br>";
	}

	if($a == $b) {
		echo "Welcome is equal!<br>";
	} else {
		echo "$a is Not Equal to $b ! <br>";
	}

	if($a === $b) {
		echo "Welcome is equal!<br>"; 
	}
	else {
		echo "$a is Not Equal to $b ! <br>";
	}

	if($a > $b) {
		echo "$a is greater than $b! <br>";
	} else {
		echo "$a is smaller than $b! <br>";
	}

	if($a < $b) {
		echo "$a is smaller than $b! <br>";
	} else {
		echo "$a is greater than $b! <br>";
	}

	if($a <= $b) {
		echo "$a is smaller than equal to $b! <br>";
	} else {
		echo "$a is greater than equal to $b! <br>";
	}

	$age = 26;
	
	if($age >= 18) {
		echo "you are eligible to vote";
	}
	else {
	
	echo "Wait till your'e 18";

}

?>