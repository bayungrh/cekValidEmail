<?php header("Content-Type: text/plain");

	function cekValidEmail($email) {
		$pattern = '/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		if (preg_match($pattern, $email)) {
			list($user, $host) = explode('@', $email);
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
