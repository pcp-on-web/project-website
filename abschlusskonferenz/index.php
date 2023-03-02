<?php
	$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	if (substr($lang,0,2)=='de') header("Location: /project/abschlusskonferenz/de/");
	else header("Location: /project/abschlusskonferenz/en/");
?>
