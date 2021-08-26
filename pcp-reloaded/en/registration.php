<?php 
if(isset($_POST['submit'])){

		$empfaenger = 'thomas.riechert@htwk-leipzig.de';
		$betreff = 'PCP reloaded Registration'.$refer.' '.$_POST['name'];
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
	<h3>Confirmation</h3>

	Your registration details have been submitted. Please contact Thomas Riechert by email if you have not received a confirmation within 2 working days. 
	<p><a href='./' >Back to conference page</a></p>
	
	</div>
 </div>
 
 <?php
}
else {

?>

<div class="row">

	<form action="./?p=registration" method="post">

		<div class="col-12"><h3>Personal Information</h3></div>

          <div class="control-group">
	          <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Name</label></div>
							<div class="col-10">
              	<input class="form-control" id="name" name="name" type="text" placeholder="Name" required="" data-validation-required-message="Please enter your name."><!-- name --></input>
                 <p class="help-block text-danger"></p>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Institution</label></div>
							<div class="col-10">
                <input class="form-control" id="institution" name="institution" type="text" placeholder="Institution" required="" data-validation-required-message="Please enter institution name."><!-- institution --></input>
                 <p class="help-block text-danger"></p>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Country</label></div>
							<div class="col-10">
                <input class="form-control" id="country" name="country" type="text" placeholder="Country" required="" data-validation-required-message="Please enter your country."><!-- country --></input>
                <p class="help-block text-danger"></p>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Email Address</label></div>
							<div class="col-10">
                <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="" data-validation-required-message="Please enter your email address."><!-- email --></input>
                <p class="help-block text-danger"></p>
              </div>
            </div>
					</div>


							<div class="col-12"><h3>Participation</h3></div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Pre-Workshop/Hackathon</label></div>
							<div class="col-10">
									<input id="participation" type="checkbox" name="Workshop_20" value="no"/>Wednesday, October 20th<br/>
									<input id="participation" type="checkbox" name="Workshop_21" value="no"/>Thursday, October 21st<br/>
              </div>
						</div>
					</div>
          <div class="control-group">
             <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Main Conference</label></div>
							<div class="col-10">
									<input id="participation" type="checkbox" name="Conference_27" value="no"/>Wednesday, October 27th<br/>
									<input id="participation" type="checkbox" name="Conference_28" value="no"/>Thursday, October 28th<br/>
		          <div class="help-block"></div>
		        </div>
           </div>
          </div>
							<div class="col-12"><h3>Further information for the organizing team</h3></div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
							<div class="col-2"><label>Message</label></div>
							<div class="col-6">
                  <textarea class="form-control" id="message" style="width: 100%" name="message" placeholder="Message"></textarea>
							</div>
						<div class="col-4"><input type="submit" name="submit" class="btn btn-success btn-lg" id="sendMessageButton" value="Submit registration form"/><!-- Send --> </input></div>
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