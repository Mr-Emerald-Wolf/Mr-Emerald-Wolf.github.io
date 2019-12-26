<?php 
session_start();
$pass = password_hasH('TDR4fury', PASSWORD_DEFAULT);
if (password_verify('TDR4fury', $pass)) {
	echo $pass;
}
echo $pass;

?>