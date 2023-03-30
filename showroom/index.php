<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorale Karrieremuster Reloaded</title>
  	<link rel="stylesheet" href="simple-grid.css"/>
  	<link rel="stylesheet" href="index.css"/>
 		<link rel="stylesheet" href="../pcp-reloaded/fonts/SourcePro/font.css">
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
	  		Language/Sprache: deutsch 
		</div>
  		<div class="col-12"><hr/></div>
	</div>



	  <div class="headline row">
		  <div class="col-12">
			<h1>Demonstrator der Projektergebnisse</h1>
			<h2>Professorale Karrieremuster der Frühen Neuzeit - Entwicklung einer wissenschaftlichen Methode zur Forschung auf online verfügbaren und verteilten Forschungsdatenbanken der Universitätsgeschichte
</h2>
		</div>
	<div>

	<div class="row">


		<div class="col-8">


			<div class="row menu">
				  <div class="col-12">
					<ul>
						<?php if($p=='ueberblick') echo '<li class="select">Überblick</li>'; else echo '<li><a href="./">Überblick</a></li>'; ?>
						<?php if($p=='forschungsontologie') echo '<li class="select">Forschungsontologie</li>'; else echo '<li><a href="./?p=forschungsontologie">Forschungsontologie</a></li>'; ?>
						<?php if($p=='vokabular') echo '<li class="select">Vokabular</li>'; else echo '<li><a href="./?p=vokabular">Vokabular</a></li>'; ?>
						<?php if($p=='anfragen') echo '<li class="select">Anfragen</li>'; else echo '<li><a href="./?p=anfragen">Anfragen</a></li>'; ?>
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

		</div>
		<div class="col-4 hidden-sm logos">
		  	<img class="col-4" src="../img/hab.png" alt="HAB" title="Herzog August Bibliothek Wolfenbüttel"/>
		  	<img class="col-3" src="../img/htwk.png" alt="HTWK" title="Hochschule für Technik, Wirtschaft und Kultur Leipzig"/>
		  	<img class="col-6" src="../img/dfg_logo_foerderung.gif" alt="DFG" title="gefördert durch die DFG"/>
		</div>



	  </div>

<a name="goto"></a>
<?php include($p.'.php'); ?>


  </body>
</html

