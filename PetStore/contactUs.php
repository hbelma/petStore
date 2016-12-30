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
					<li><a href="login.php">Log In</a></li>
					<li><a href="register.php">Register</a></li>
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
			<li><a href="index.php">Home</a></li>
			<li><a href="news.php">News</a></li>

	
			<li><a href="dogs.php">Dogs</a></li>
			<li><a href="#">Cats</a></li>
			<li><a href="#">Small Animals</a></li> 

			<li><a href="aboutUs.php">About Us</a></li>
			<li><a href="contactUs.php">Contact Us</a></li>
						<li><a href="searchUsers.php">Search</a></li>

			
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

	if(isset($_REQUEST['submit'])){
   if (file_exists("feedback.xml"))
   {
    $xml=simplexml_load_file("feedback.xml");
  	$loaded = count($xml) - 1;
    $cildrn = $xml->children();
    $lastID= $cildrn[$loaded];
    $broj = $lastID->ID+1;

    $comment= $xml->addChild('comment');
    $comment->addChild('ID', $broj."");

    $comment->addChild('name', $_POST['name']);
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

    $comment->addChild('name', $_POST['name']);
    $comment->addChild('email', $_POST['email']);
    $comment->addChild('subject', $_POST['subject']);
    $comment->addChild('message', $_POST['feedback']);
    $result= $xml->asXML("feedback.xml");
    $posted = true;
   }
 }


 ?>

	<div class="span_6_of_12" id="forma">

		<form id="formaKontakt" action="" method="post">
			<div>
				<h4>Contact : </h4>

				<fieldset class="account-info">
					<label> Full Name: 
						<input id="name" type="text" name="name" onchange="validirajPunoIme()" />
					</label>

					<label id="fullLabel"></label>

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
