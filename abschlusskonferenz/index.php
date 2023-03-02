<?php
	$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	if (substr($lang,0,2)=='de') header("Location: /abschlusskonferenz/de/");
	else header("Location: /abschlusskonferenz/en/");
?>
