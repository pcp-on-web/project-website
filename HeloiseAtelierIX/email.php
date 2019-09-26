<?php 
if((isset($_POST['submit']))&&(isset($_SERVER['HTTP_REFERER']))){

		/* This code is to find all post elements */
		
		$refer=$_SERVER['HTTP_REFERER'];
		$refer=substr($refer,strrpos($refer,'/')+1);

		error_reporting(E_ALL);
		$site = file_get_contents($refer);

		$teile = explode("<!-- form-part -->", $site);
		echo $teile[0];
		?>

<h2>The following information have been send to the organizers.</h2>
<p>Please contact Thomas Riechert on E-Mail, if you not receive a confirmation within one working day.</p>
<p><a href='index.html' target='_blank'>Zurück zur Startseite</a></p>
 
<form class="received">
		<?php

		$form=$teile[2]; 		
		
		$form = str_replace('<input ','<input disabled="true"',$form);
		$form = str_replace(' checked','',$form);

		if(isset($_POST['name'])) $form = str_replace('<!-- name --></input>',$_POST['name'].'</input>',$form);
		if(isset($_POST['institution'])) $form = str_replace('<!-- institution --></input>',$_POST['institution'].'</input>',$form);
		if(isset($_POST['country'])) $form = str_replace('<!-- country --></input>',$_POST['country'].'</input>',$form);
		if(isset($_POST['email'])) $form = str_replace('<!-- email --></input>',$_POST['email'].'</input>',$form);
		if(isset($_POST['presentation_title'])) $form = str_replace('<!-- presentation_title --></input>',$_POST['presentation_title'].'</input>',$form); 
		if(isset($_POST['message'])) $form = str_replace('Message"></textarea>','Message">'.$_POST['message'].'</textarea>',$form);
		if(isset($_POST['abstract'])) $form = str_replace('Abstract"></textarea>','Abstract">'.$_POST['abstract'].'</textarea>',$form);
		$form = str_replace('></input>','>---</input>',$form);
		$form = str_replace('></textarea>','>---</textarea>',$form);

		if(isset($_POST['presentation_full'])) $form = str_replace('name="presentation_full"','name="presentation_full" checked',$form);
		if(isset($_POST['presentation_impulse'])) $form = str_replace('name="presentation_impulse"','name="presentation_impulse" checked',$form);


		if(isset($_POST['Workshop_11'])) $form = str_replace('name="Workshop_11"','name="Workshop_11" checked',$form);
		if(isset($_POST['Workshop_12'])) $form = str_replace('name="Workshop_12"','name="Workshop_12" checked',$form);
		if(isset($_POST['Workshop_13'])) $form = str_replace('name="Workshop_13"','name="Workshop_13" checked',$form);

		if(isset($_POST['Accommodation_10'])) $form = str_replace('name="Accommodation_10"','name="Accommodation_10" checked',$form);
		if(isset($_POST['Accommodation_11'])) $form = str_replace('name="Accommodation_11"','name="Accommodation_11" checked', $form);
		if(isset($_POST['Accommodation_12'])) $form = str_replace('name="Accommodation_12"','name="Accommodation_12" checked', $form);

		if(isset($_POST['Activity_10'])) $form = str_replace('name="Activity_10"','name="Activity_10" checked',$form);
		if(isset($_POST['Activity_11'])) $form = str_replace('name="Activity_11"','name="Activity_11" checked',$form);
		if(isset($_POST['Activity_12'])) $form = str_replace('name="Activity_12"','name="Activity_12" checked',$form);
		if(isset($_POST['Activity_13'])) $form = str_replace('name="Activity_13"','name="Activity_13" checked',$form);

		$form = str_replace('type="submit"','type="hidden"',$form);

		echo $form;

		$empfaenger = 'thomas.riechert@htwk-leipzig.de';
		$betreff = 'Heloise IX '.$refer.' '.$_POST['name'];
		$nachricht = '';
		foreach ($_POST as $param_name => $param_val) {
				if ($param_val=='yes') $nachricht .= $param_name."\n"; 				
				else $nachricht .=  $param_name.": ".$param_val."\n";
		}


		$header = 'From: thomas.riechert@htwk-leipzig.de' . "\r\n" .
				'Reply-To: thomas.riechert@htwk-leipzig.de' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

		mail($empfaenger, $betreff, $nachricht, $header);



 }
?>
