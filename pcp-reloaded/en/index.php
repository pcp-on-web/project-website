<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorial Career Patterns Reloaded</title>
  	<link rel="stylesheet" href="../simple-grid.css"/>
  	<link rel="stylesheet" href="../index.css"/>
 		<link rel="stylesheet" href="../fonts/SourcePro/font.css">
  </head>
 <body>
	<div class="header row">
		<div class="col-6 navigation left">
			<a href='../../#en' alt="Back to project website" title="Back to project website">← Back to project website: Early Modern Professorial Career Patterns</a>
		</div>
		<div class="col-6 navigation right">
			Language/Sprache: <a href='../de/' alt="deutsch" title="deutsch">deutsch</a> | english
		</div>
		<div class="col-12"><hr/></div>
	</div>
	  <div class="headline row">
		  <div class="col-12">
				<h1>Conference, Workshop and Hackathon</h1>
				<h2>Professorial Career Patterns Reloaded – Data, Methods and Analysis of Digital Humanities Research in the Field of Early Modern Academic History</h2>
			</div>
		<div>

<?php
	// get current page from parameter p
	if (!@($p=$_GET['p'])) $p='summary'; else $p = preg_replace ( '/[^a-z0-9 ]/i', '', $p);	
?>

	<div class="row">


		<div class="col-8"/>


		<div class="row menu">
			  <div class="col-12">
				<ul>
					<?php if($p=='summary') echo '<li class="select">Summary</li>'; else echo '<li><a href="./">Summary</a></li>'; ?>
					<?php if($p=='programme') echo '<li class="select">Programme</li>'; else echo '<li><a href="./?p=programme">Programme</a></li>'; ?>
					<?php if($p=='registration') echo '<li class="select">Registration</li>'; else echo '<li><a href="./?p=registration">Registration</a></li>'; ?>
					<li><a href="">Datenschutz</a></li>
					<li><a href="">Impress</a></li>
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
					Important dates
				</div>
				<div class="col-9">
					Main-Conference: 		27 –28 October 2021  <br/>
					Pre-Workshop/Hackathon: 	20 –21 October 2021<br/>
					<!--Abstract submission: 03 September 2021<br/>Sybmission system EasyChair: <a href="https://easychair.org/conferences/?conf=pcpreloaded2021" target="_blank">https://easychair.org/conferences/?conf=pcpreloaded2021</a><br/>
					Notification of Acceptance: 10 September 2021<br/>-->
					<a href="./?p=registration#goto">register here for the conference</a>

				</div>
			</div>
		</div>
		<div class="col-4 hidden-sm logos">
		  	<img  class="col-4" src="../../img/hab.png" alt="HAB" title="Herzog August Bibliothek Wolfenbüttel"/>
		  	<img  class="col-3" src="../../img/htwk.png" alt="HTWK" title="Hochschule für Technik, Wirtschaft und Kultur Leipzig"/>
		  	<img class="col-6" src="../../img/dfg_logo_foerderung.gif" alt="DFG" title="funded by DFG"/>
	  	</div>
	</div>

<a name="goto"/>

<?php include($p.'.php'); ?>

</body>
</html

