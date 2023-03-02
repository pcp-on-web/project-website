<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Concluding Conference</title>
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
			<a href='../../#en' alt="Back to project website" title="Back to project website">← Back to project website: Early Modern Professorial Career Patterns</a>
		</div>
		<div class="col-6 navigation right">
			Language/Sprache: <a href='../de/?p=<?php echo $p;?>' alt="deutsch" title="deutsch">deutsch</a> | english
		</div>
		<div class="col-12"><hr/></div>
	</div>
	  <div class="headline row">
		  <div class="col-12">
				<h1>Closing Meeting</h1>
				<h2>Early Modern Professorial Career Patterns - Methodological research on online databases of academic history</h2>
			</div>
		<div>


	<div class="row">


		<div class="col-8" style="background-image: url('http://uni-helmstedt.hab.de/nav/bg_title_in_progress.gif');background-repeat: no-repeat;background-size:contain;    background-position: right bottom; ">



		<div class="row menu">
			  <div class="col-12">
				<ul>
					<?php if($p=='ueberblick') echo '<li class="select">Summary</li>'; else echo '<li><a href="./">Summary</a></li>'; ?>
					<?php if($p=='programm') echo '<li class="select">Programme</li>'; else echo '<li><a href="./?p=programm">Programme</a></li>'; ?>
					<?php if($p=='anmeldung') echo '<li class="select">Registration</li>'; else echo '<li><a href="./?p=anmeldung">Registration</a></li>'; ?>
					<?php if($p=='datenschutz') echo '<li class="select">Privacy policy</li>'; else echo '<li><a href="./?p=datenschutz">Privacy policy</a></li>'; ?>
					<?php if($p=='impressum') echo '<li class="select">Imprint</li>'; else echo '<li><a href="./?p=impressum">Imprint</a></li>'; ?>
				</ul>
			</div>
		</div>

		<div class="row">

			<div class="col-3 hidden-sm">
					DFG Research Project
				</div>
				  <div class="col-9">
					Early Modern Professorial Career Patterns
				</div>
			  </div>
			<div class="row">
				<div class="col-3 hidden-sm">
					Organisation
				</div>
				<div class="col-9">
					<a href="https://hab.de">Herzog August Bibliothek Wolfenbüttel</a> and <a href="https://informatik.htwk-leipzig.de">Hochschule für Technik, Wirtschaft und Kultur Leipzig (HTWK)</a>
				</div>
			</div>
			<div class="row">
				<div class="col-3 hidden-sm">
					Venue
				</div>
				  <div class="col-9">
					Kreis- und Universitätsmuseum Helmstedt<br/>
					Collegienplatz 1<br/>
					Juleum<br/>
					38350 Helmstedt 
				</div>
			</div>
			<div class="row">
				<div class="col-3 hidden-sm">
					Language
				</div>
				  <div class="col-9">
					german
				</div>
			</div>

			<div class="row">
				<div class="col-3 hidden-sm">
					Date
				</div>
				<div class="col-9">
					Main-Conference: 	20 – 21 March 2023  <br/>
					<a href="./?p=anmeldung#goto">register here for the conference</a>

				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<a href="http://uni-helmstedt.hab.de/" style="float:right">http://uni-helmstedt.hab.de/</a>

				</div>
			</div>

		</div>
		<div class="col-4 hidden-sm logos">
		  	<img  class="col-4" src="../../img/hab.png" alt="HAB" title="Herzog August Bibliothek Wolfenbüttel"/>
		  	<img  class="col-3" src="../../img/htwk.png" alt="HTWK" title="Hochschule für Technik, Wirtschaft und Kultur Leipzig"/>
		  	<img class="col-6" src="../../img/dfg_logo_foerderung.gif" alt="DFG" title="funded by DFG"/>
	  	</div>
	</div>

<a name="goto"></a>

<?php include($p.'.php'); ?>

</body>
</html

