<?php
$pages = array("RODBH2019","RODBH2019-Registration","RODBH2019-Agenda");

if (!@($goto=$_GET["goto"])) $goto="goto_is_empty"; 
if (in_array($goto, $pages)) {
	include("parts/header.php"); 
	include("pages/".$goto.".php");
	include("parts/footer.php");
} else {
	header('Location: /');
}
?>

