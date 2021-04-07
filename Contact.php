<!DOCTYPE html>
<html lang="en">
<head>
<title>Superior Carpet & Floor Cleaning</title>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<meta name="description" content="San Diego Superior Carpet & Floor Cleaning, Carpet & Floor Cleaning for Homes, Cars, Boats, etc. Carpets – Upholstery – Tile - Grout and Water Extraction."> 
<link rel="stylesheet" href="css/site.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
</head>
<body>
<div id="wrapper">

<header>

	<h1>Superior Carpet & Floor Cleaning</h1>

<nav>

<table class="navigate">
	<tr>
		<td class="align"><a href="index.html">Home</a></td>
		<td class="align"><a href="Pricing.html">Pricing</a></td>
		<td class="align"><a href="Hours.html">Hours</a></td>
		<td class="align"><a href="Contact.html">Contact</a></td>
	

	</tr>
		
</table>	

</nav>

</header>

<main>



<div id="contactpic">

<h3 class="contactphone">Call: (858) 248-5377</h3>

<img width="250" height="375" src="images/contact.jpg" alt="Contact">


</div>

<div id="contact">

	<h2>Request Your Appointment Today</h2>

	<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "contact@superiorcarpetfloor.com";
 
    $email_subject = "New Appointment";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>
	
	
	
</div>	

</main>

<footer>

<div id="diego">

<img width="100%" height="150" src="images/diego.jpg" alt="San Diego">

</div>	

<table id="links">
	
	<tr>
		<td class="align">Call: (858)248-5377</td>
		<td class="align">Email: <a href="mailto:jeffguard4@gmail.com">jeffguard4@gmail.com</a></td>
		<td class="align"><a href='http://www.yelp.com/biz/superior-carpet-and-floor-cleaning-san-diego'><img width="75" height="42" src="images/yelp-2c.png" alt="Yelp"></a></td>
	</tr>
		
</table>
	

</footer>
</div>

</body>

</html>