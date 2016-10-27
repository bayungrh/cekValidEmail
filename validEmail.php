<?php
header("Content-Type: text/plain");
	function cekValidEmail($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$host = explode('@', $email)[1];
    		if (!checkdnsrr($host, 'MX')) {
    			return false;
			} else {
				return true;
			}
		} else {
				return false;
		}
	}

$email = array( 'bnugraha00@gmail.com', 
			   	'email@contoh.com', 
			   	'email@tes.cot'
		);

foreach ($email as $mail) {
	if(cekValidEmail($mail)) {
		echo($mail . " {Email Valid}" . PHP_EOL . PHP_EOL);
	} else {
		echo($mail . " {Email tidak Valid!}" . PHP_EOL . PHP_EOL);
	}
}
?>