<?php
// Check for empty fields
if(empty($_POST['name'])  	||
   empty($_POST['email']) 	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$role = strip_tags(htmlspecialchars($_POST['role']));
$affiliation = strip_tags(htmlspecialchars($_POST['affiliation']));
$country = strip_tags(htmlspecialchars($_POST['country']));
$participation = strip_tags(htmlspecialchars($_POST['participation']));
$food = strip_tags(htmlspecialchars($_POST['food']));
$foodother = strip_tags(htmlspecialchars($_POST['foodother']));


	
// Create the email and send the message
$to = 'thomas.riechert@htwk-leipzig.de'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nRole: $role\n\nAffiliation: $affiliation\n\nCountry: $country\n\nParticipation: $participation\n\nFood: $food\n\nOther Food: $foodother\n\nMessage:\n$message\n\n";
$headers = "From: thomas.riechert@htwk-leipzig.de\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return false;			
?>

