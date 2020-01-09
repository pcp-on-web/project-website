<?php
$pages = array("RODBH2019","RODBH2019-Publication","RODBH2019-Agenda","RODBH2019-AcceptedPapers");

if (!@($goto=$_GET["goto"])) $goto="goto_is_empty"; 
if (in_array($goto, $pages)) {
	include("parts/header.php"); 
	include("pages/".$goto.".php");
	include("parts/footer.php");
} else {
	header('Location: /');
}
?>

