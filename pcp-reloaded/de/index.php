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
<?php
	// get current page from parameter p
	if (!@($p=$_GET['p'])) $p='ueberblick'; else $p = preg_replace ( '/[^a-z0-9 ]/i', '', $p);	
?>
	<div class="header row">
		<div class="col-6 navigation left">
			<a href='../../#de' alt="Zurück zur Projektseite" title="Zurück zur Projektseite">← Zurück zur Projektseite: Professorale Karrieremuster der Frühen Neuzeit</a>
		</div>
		<div class="col-6 navigation right">
	  		Language/Sprache: deutsch | <a href='../en/?p=<?php echo $p?>' alt="english" title="english">english</a>
		</div>
  		<div class="col-12"><hr/></div>
	</div>

	  <div class="headline row">
		  <div class="col-12">
			<h1>Konferenz, Workshop und Hackathon</h1>
			<h2>Professorale Karrieremuster Reloaded – Daten, Methoden und Analysen der digitalen Frühneuzeitforschung zur Universitäts- und Gelehrtenge­schichte</h2>
		</div>
	<div>

	<div class="row">


		<div class="col-8"/>


			<div class="row menu">
				  <div class="col-12">
					<ul>
						<?php if($p=='ueberblick') echo '<li class="select">Überblick</li>'; else echo '<li><a href="./">Überblick</a></li>'; ?>
						<?php if($p=='programm') echo '<li class="select">Programm</li>'; else echo '<li><a href="./?p=programm">Programm</a></li>'; ?>
						<?php if($p=='hackathon') echo '<li class="select">Hackathon</li>'; else echo '<li><a href="./?p=hackathon">Hackathon</a></li>'; ?>
						<?php if($p=='anmeldung') echo '<li class="select">Anmeldung</li>'; else echo '<li><a href="./?p=anmeldung">Anmeldung</a></li>'; ?>
						<?php if($p=='datenschutz') echo '<li class="select">Datenschutz</li>'; else echo '<li><a href="./?p=datenschutz">Datenschutz</a></li>'; ?>
						<?php if($p=='impressum') echo '<li class="select">Impressum</li>'; else echo '<li><a href="./?p=impressum">Impressum</a></li>'; ?>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-3 hidden-sm">
					DFG Forschungs-Projekt
				</div>
				<div class="col-9">
					Professorale Karrieremuster der Frühen Neuzeit
				</div>
			</div>
			<div class="row">
				 <div class="col-3 hidden-sm">
					Organisation
				</div>
				 <div class="col-9">
					<a href="https://hab.de">Herzog August Bibliothek Wolfenbüttel</a> und <a href="https://informatik.htwk-leipzig.de">Hochschule für Technik, Wirtschaft und Kultur Leipzig (HTWK)</a>
				</div>
			</div>
			<div class="row">

				<div class="col-3 hidden-sm">
					Termine
				</div>
				  <div class="col-9">
					Abschlusstagung: 		27.–28.10.2021<br/>
					Hackathon: 	28.10–02.12.2021<br/>
					Workshop: 		01.–02.12.2021<br/>
					<!--Abstrakt-Einreichungen bis zum 03.09.2021<br/>
					Konferenz System EasyChair: <a href="https://easychair.org/conferences/?conf=pcpreloaded2021" target="_blank">https://easychair.org/conferences/?conf=pcpreloaded2021</a><br/>
					Bekanntgabe der  Reviewergebnisse bis zum 10.09.2021-->
					<a href="./?p=anmeldung#goto">hier zur Konferenz anmelden</a>
						
				</div>
			</div>

		</div>
		<div class="col-4 hidden-sm logos">
		  	<img class="col-4" src="../../img/hab.png" alt="HAB" title="Herzog August Bibliothek Wolfenbüttel"/>
		  	<img class="col-3" src="../../img/htwk.png" alt="HTWK" title="Hochschule für Technik, Wirtschaft und Kultur Leipzig"/>
		  	<img class="col-6" src="../../img/dfg_logo_foerderung.gif" alt="DFG" title="gefördert durch die DFG"/>
		</div>



	  </div>


<a name="goto"></a>
<?php include($p.'.php'); ?>


  </body>
</html

