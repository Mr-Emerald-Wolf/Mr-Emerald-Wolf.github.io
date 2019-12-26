<?php 
session_start();
$pass = password_hash('TDR4fury', PASSWORD_DEFAULT);
if (password_verify('TDR4fury', $pass)) {
	echo $pass;
}

?>