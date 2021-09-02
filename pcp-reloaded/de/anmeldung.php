<?php 
if(isset($_POST['submit'])){

		$empfaenger = 'thomas.riechert@htwk-leipzig.de';
		$betreff = 'PCP reloaded Anmeldung'.$refer.' '.$_POST['name'];
		$nachricht = '';
		foreach ($_POST as $param_name => $param_val) {
				if ($param_val=='yes') $nachricht .= $param_name."\n"; 				
				else $nachricht .=  $param_name.": ".$param_val."\n";
		}


		$header = 'From: thomas.riechert@htwk-leipzig.de' . "\r\n" .
				'Reply-To: thomas.riechert@htwk-leipzig.de' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

		mail($empfaenger, $betreff, $nachricht, $header);

?>

<div class="row">

	<div class="col-12">
	<h3>Zur Einreichung eines Abstracts nutzen Sie bitte folgenden Link: <a href="https://easychair.org/conferences/?conf=pcpreloaded2021">https://easychair.org/conferences/?conf=pcpreloaded2021</a></h3>
	
	</div>
 </div>
 
 
<div class="row">

	<div class="col-12">
	<h3>Anmeldebestätigung</h3>

	Ihre Anmeldedaten wurden übermittelt. Bitte kontaktieren Sie Thomas Riechert per E-Mail, sollten Sie innerhalb von 2 Arbeitstagen keine Bestätigung erhalten haben.

	<p><a href='./' >Zurück zur Startseite</a></p>
	
	</div>
 </div>
 
 <?php
}
else {

?>

<div class="row">

	<form action="./?p=anmeldung" method="post">

		<div class="col-12"><h3>Teilnehmer Information</h3></div>

          <div class="control-group">
	          <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Name</label></div>
							<div class="col-10">
              	<input class="form-control" id="name" name="name" type="text" placeholder="Name" required="" data-validation-required-message="Bitte gen Sie hier Ihren Namen an."><!-- name --></input>
                 <p class="help-block text-danger"></p>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Institution</label></div>
							<div class="col-10">
                <input class="form-control" id="institution" name="institution" type="text" placeholder="Institution" required="" data-validation-required-message="Bitte gen Sie hier den Namen der Institution an."><!-- institution --></input>
                 <p class="help-block text-danger"></p>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Land</label></div>
							<div class="col-10">
                <input class="form-control" id="country" name="country" type="text" placeholder="Land" required="" data-validation-required-message="Bitte geben Sie hier das Land der Institution an."><!-- country --></input>
                <p class="help-block text-danger"></p>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>E-Mail Adresse</label></div>
							<div class="col-10">
                <input class="form-control" id="email" name="email" type="email" placeholder="E-Mail Adresse" required="" data-validation-required-message="Bitte geben Sie hier Ihre E-mail Adresse an."><!-- email --></input>
                <p class="help-block text-danger"></p>
              </div>
            </div>
					</div>


							<div class="col-12"><h3>Teilnahme</h3></div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Pre-Workshop/Hackathon</label></div>
							<div class="col-10">
									<input id="participation" type="checkbox" name="Workshop_20" value="no"/>Mittwoch, 20. Oktober<br/>
									<input id="participation" type="checkbox" name="Workshop_21" value="no"/>Donnerstag, 21. Oktober<br/>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Konferenz</label></div>
							<div class="col-10">
									<input id="participation" type="checkbox" name="Conference_27" value="no"/>Mittwoch, 27. Oktober<br/>
									<input id="participation" type="checkbox" name="Conference_28" value="no"/>Donnerstag, 28. Oktober<br/>
		          <div class="help-block"></div>
		        </div>
           </div>
          </div>
							<div class="col-12"><h3>Weitere Informationen für das Organisationsteam</h3></div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Nachricht</label></div>
							<div class="col-6">
                  <textarea class="form-control" id="message" style="width: 100%" name="message" placeholder="Message"></textarea>
							</div>
						<div class="col-4"><input type="submit" name="submit" class="btn btn-success btn-lg" id="sendMessageButton" value="Anmeldedaten absenden"/><!-- Send --> </input></div>
		</div>
              </div>
						</div>
          </div>
			    <div id="success"></div>
          <div class="form-group">
						<div class="col-2 hidden-sm"></div>
          </div>
			</form>

</div>

<?php } ?>