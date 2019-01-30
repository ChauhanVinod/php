<?php


	// AND OPERATOR
	$username= "admin";
	$password= "1234";

	if($username =='admin' && $password =='1234'){
		echo 'Welcome! <br>';
	}
	else {
		echo 'Password thik daal <br>';
	}


	//OR Operator
	$username= "admins";
	$password= "12346";

	if($username =='admin' || $password =='1234'){
		echo 'Welcome !!'.'<br>';
	}
	else {
		echo 'Password thik se daal !!'.'<br>';
	}

	//NOT OPertator
	$username= "admins";
	$password= "12346";

	if($username !='admin' &&  $password !='1234'){
		echo 'Welcome !!';
	}
	else {
		echo 'Password thik se daal !!';
	}


?>