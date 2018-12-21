<?php
$pages = array("RODBH2019","xxx");

if (!@($goto=$_GET["goto"])) $goto="goto_is_empty"; 
if (in_array($goto, $pages)) {
	include("parts/header.php"); 
	include("pages/".$goto.".php");
	include("parts/footer.php");
} else {
	header('Location: /');
}
?>

