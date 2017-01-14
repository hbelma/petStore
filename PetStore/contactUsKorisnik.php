<!DOCTYPE html>
<html>
<head>
	<title>Pet Store</title>
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript" src="petStore.js"></script>

</head>

<body>

	<div class="span_12_of_12" id="zaglavlje">

		<div class="span_1_of_12">
			<img id="logo" src="./Slike/logo.jpg" alt="logo">
		</div>

		<div class="span_8_of_12" id="naslov">
			<h2> EVERYTHING YOU NEED FOR YOUR DEAR PET </h2>
		</div>

		<div class="span_3_of_12" id="mojRacun">

			<img id="myAccount" alt="accountIcon" src="./Slike/accountIcon.jpg" class="dropbtn" onclick="padajuciMeni()" >

			<div class="dropdown">

				<ul class="dropdown-content" id="myDropdown">
					<li><a href="logout.php">Log out</a></li>
				</ul>

				<script>

					function padajuciMeni() {
						document.getElementById("myDropdown").classList.toggle("show");
					}

				// Close the dropdown if the user clicks outside of it
				window.onclick = function(e) {
					if (!e.target.matches('.dropbtn')) {

						var dropdowns = document.getElementsByClassName("dropdown-content");
						for (var d = 0; d < dropdowns.length; d++) {
							var openDropdown = dropdowns[d];
							if (openDropdown.classList.contains('show')) {
								openDropdown.classList.remove('show');
							}
						}
					}
				}
			</script>
		</div>


	</div>

</div>

<!-- navBar -->

<div class="span_12_of_12">

	<div class="navBar">
		
		<ul class="myMenu" id="myNav">
			<li><a href="indexKorisnik.php">Home</a></li>
			<li><a href="newsKorisnik.php">News</a></li>

	
			<li><a href="dogsKorisnik.php">Dogs</a></li>
			<li><a href="#">Cats</a></li>
			<li><a href="#">Small Animals</a></li> 

			<li><a href="aboutUsKorisnik.php">About Us</a></li>
			<li><a href="#">Contact Us</a></li>

			
			<li class ="hamburger">
				<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>

				<script type="text/javascript">
					function myFunction() {
						var x = document.getElementById("myNav");

						if (x.className === "myMenu") {
							x.className += " responsive";
						} else {
							x.className = "myMenu";

						}
					}
				</script>
			</li>
		</ul>

	</div>

</div>


<div>

<div class="span_12_of_12">

	<div class="span_6_of_12" id="slika">

		<img id="slikaKontakt" alt="slikaKontakt" src="./Slike/contactUs.jpg">

	</div>


<?php
	$posted = false;

	//bicemo malo duduci i pretpostavit da ce korisnik unijeti svoj username
		//provjera ako se stigne
		

	if(isset($_REQUEST['submit'])){


/*

   if (file_exists("feedback.xml"))
   {
    $xml=simplexml_load_file("feedback.xml");
  	$loaded = count($xml) - 1;
    $cildrn = $xml->children();
    $lastID= $cildrn[$loaded];
    $broj = $lastID->ID+1;

    $comment= $xml->addChild('comment');
    $comment->addChild('ID', $broj."");

    $comment->addChild('username', $_POST['username']);
    $comment->addChild('email', $_POST['email']);
    $comment->addChild('subject', $_POST['subject']);
    $comment->addChild('message', $_POST['feedback']);
    $result= $xml->asXML("feedback.xml");
    $posted = true;

   }
   else {
     $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><comments></comments>');
$xml->addAttribute('version', '1.0');
    $comment= $xml->addChild('comment');
    $comment->addChild('ID', '1');

    $comment->addChild('username', $_POST['username']);
    $comment->addChild('email', $_POST['email']);
    $comment->addChild('subject', $_POST['subject']);
    $comment->addChild('message', $_POST['feedback']);
    $result= $xml->asXML("feedback.xml");
    $posted = true;
   }

   */



	$username= $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['feedback'];

$db_server= getenv('MYSQL_SERVICE_HOST');
$db_username=getenv('MYSQL_USER');
$db_pw = getenv('MYSQL_PASSWORD');
$db = getenv('MYSQL_DATABASE');


	$dbh = new PDO("mysql:dbname=".$db.";host=".$db_server, $db_username, $db_pw);

	$stmt1 = $dbh->prepare("INSERT INTO kontaktinfo(username, email, subject,message) VALUES (:username, :email, :subject, :message)");

	$stmt1->bindParam(':username', $username1);
	$stmt1->bindParam(':email', $email1);
	$stmt1->bindParam(':subject', $subject1);
	$stmt1->bindParam(':message', $message1);

  // insert one row
	$username1 = $username;
	$email1 = $email;
	$subject1 = $subject;
	$message1 = $message;


	$stmt1->execute();}


 ?>

	<div class="span_6_of_12" id="forma">

		<form id="formaKontakt" action="" method="post">
			<div>
				<h4>Contact : </h4>

				<fieldset class="account-info">

				<label> Username:
						<input id="username" type="text" name="username" onchange="validirajUsername()" />
					</label>

					<label id="emailLabela"></label>

					<label> Email Address:
						<input id="email" type="text" name="email" onchange="validirajEmail()" />
					</label>

					<label id="emailLabela"></label>

					<label> Subject:
						<input id="subject" type="text" name="subject" onchange="validirajSubject()" />
					</label>

					<label id="subjectLabela"></label>


					<label> Message: 
						<textarea id="feedback" name="feedback" onchange="validirajFeedback()"></textarea>
					</label>

					<label id="feedbackLabela"></label>

				</fieldset>

				<fieldset class="account-action">
					<input id="feedbackSend" class="btn" type="submit" name="submit" value="Send feedback">
				</fieldset>


			</div>
		</form>

	</div>

</div>

</div>

</div>

<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>
