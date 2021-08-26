<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorale Karrieremuster Reloaded</title>
  	<link rel="stylesheet" href="../simple-grid.css"/>
  	<link rel="stylesheet" href="../index.css"/>
 		<link rel="stylesheet" href="../fonts/SourcePro/font.css">
  </head>
 <body>
  <div class="header row">
	  <div class="navigation col-12">
	  	
	  	<div class="left">
		  	<a href='../../#de' alt="Zurück zur Projektseite" title="Zurück zur Projektseite">← Zurück zur Projektseite: Professorale Karrieremuster der Frühen Neuzeit</a>
		  </div>
	  	<div class="right">
	  		Language/Sprache: 
		  	deutsch | <a href='../en/' alt="english" title="english">english</a>
		  </div>
  	
	  	<hr/>

	  </div>

	  </div>

	  <div class="headline row">
		  <div class="col-12">
			<h1>Konferenz, Workshop und Hackathon</h1>
			<h2>Professorale Karrieremuster Reloaded – Daten, Methoden und Analysen der digitalen Frühneuzeitforschung zur Universitäts- und Gelehrtenge­schichte</h2>
		</div>
	<div>

<?php
	// get current page from parameter p
	if (!@($p=$_GET['p'])) $p='overview'; else $p = preg_replace ( '/[^a-z0-9 ]/i', '', $p);	
?>

	<div class="row space">
		  <div class="col-12">
			<ul class="menu">
				<?php if($p=='overview') echo '<li class="select">Überblick</li>'; else echo '<li><a href="./">Programm</a></li>'; ?>
				<li ><a href="">Programm</a></li>
				<?php if($p=='anmeldung') echo '<li class="select">Anmeldung</li>'; else echo '<li><a href="./?p=anmeldung">Anmeldung</a></li>'; ?>
				<li><a href="">Datenschutz</a></li>
				<li><a href="">Impressum</a></li>
			</ul>
	  	</div>
	</div>


	<div class="row">
		<div class="col-2 hidden-sm">
	  		DFG Forschungs-Projekt
	  	</div>
		<div class="col-10">
		  	Professorale Karrieremuster der Frühen Neuzeit
	  	</div>
	  </div>
	  <div class="row">
		  <div class="col-2 hidden-sm">
	  		Organisation
	  	</div>
		  <div class="col-6">
		  	<a href="https://hab.de">Herzog August Bibliothek Wolfenbüttel</a> und <a href="https://informatik.htwk-leipzig.de">Hochschule für Technik, Wirtschaft und Kultur Leipzig (HTWK)</a>
	  	</div>
		  <div class="col-4 hidden-sm	">
		  	<img class="logo" src="../img/hab.png" alt="HAB" title="Herzog August Bibliothek Wolfenbüttel"/>
		  	<img class="logo" src="../img/htwk.png" alt="HTWK" title="Hochschule für Technik, Wirtschaft und Kultur Leipzig"/>
		  	
	  	</div>

	  </div>

	  <div class="row space">
		  <div class="col-2 hidden-sm">
	  		Termine
	  	</div>
		  <div class="col-10">
			Abschlusstagung: 		27.–28.10.2021<br/>
			Pre-Workshop/Hackathon: 	20.–21.10.2021<br/>
			Abstrakt-Einreichungen bis zum 03.09.2021<br/>
			Konferenz System EasyChair: <a href="https://easychair.org/conferences/?conf=pcpreloaded2021" target="_blank">https://easychair.org/conferences/?conf=pcpreloaded2021</a><br/>
			Bekanntgabe der  Reviewergebnisse bis zum 10.09.2021
				
	  	</div>

	</div>

<?php include($p.'.php'); ?>


  </body>
</html

