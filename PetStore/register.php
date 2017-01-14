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


			<?php

			if(isset($_REQUEST['submit'])){

		/*


	$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
	    <users>
	        <user>
	            <firstName>'.$_REQUEST['firstName'].'</firstName>
	  <lastName>'.$_REQUEST['lastName'].'</lastName>
	  <email>'.$_REQUEST['email'].'</email>
	  <username>'.$_REQUEST['username'].'</username>
	  <password>'.$_REQUEST['password'].'</password>
	        </user>
	    </users>';

	$dom = new DOMDocument;
	$dom->preserveWhiteSpace = FALSE;
	$dom->loadXML($xmlString);

	//Save XML as a file
	$dom->save('users/'.$_REQUEST['username'].'.xml');



	$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
	    <users>
	        <user>
	  <username>'.$_REQUEST['username'].'</username>
	  <password>'.$_REQUEST['password'].'</password>
	        </user>
	    </users>';

	$dom = new DOMDocument;
	$dom->preserveWhiteSpace = FALSE;
	$dom->loadXML($xmlString);

	//Save XML as a file
	$dom->save('podaciZaLogin/'.$_REQUEST['username'].'.xml');


*/

  $firstname = $_REQUEST['firstName'];
  $lastname = $_REQUEST['lastName'];
  $email = $_REQUEST['email'];
 $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  $dbh= new PDO("mysql:dbname=petstore;host=localhost;charset=utf8", "testbelma", "belma123");

   $stmt1 = $dbh->prepare("INSERT INTO registrovanikorisnici (ime, prezime, email, username, password) VALUES (:ime, :prezime, :email, :username, :password)");

  $stmt1->bindParam(':ime', $firstname1);
  $stmt1->bindParam(':prezime', $lastname1);
  $stmt1->bindParam(':email', $email1);
  $stmt1->bindParam(':username', $username1);
  $stmt1->bindParam(':password', $password1);
  
  $firstname1 = $firstname;
  $lastname1 = $lastname;
  $email1 = $email;
  $username1 = $username;
  $password1 = $password;
  
  $stmt1->execute();

  $stmt2 = $dbh->prepare("INSERT INTO podaciiologovanim (username, password) VALUES (:username, :password)");

  $stmt2->bindParam(':username', $username1);
  $stmt2->bindParam(':password', $password1);
  
  $username1 = $username;
  $password1 = $password;
  
  $stmt2->execute();



}

?>



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

		<div id="polje">

			<div class="span_12_of_12">

				<div class="span_6_of_12" id="poruka">

					<img id="slikaLjubimci" alt="slikaLjubimci" src="./Slike/pets.jpg">

				</div>

				<div class="span_6_of_12"  id="unos">



					<form method="post" action="">
						<fieldset class="account-info">
							<label> First Name: 
								<input id="ime" type="text" name="firstName" onchange="validirajIme()"  placeholder="Type your first name">
							</label>			

							<label id="imeLabela"></label>	

							<label> Last Name: 
								<input id="prezime" type="text" name="lastName" onchange="validirajPrezime()" onmouseout="validirajPrezime()" placeholder="Type your last name">
							</label>

							<label id="prezimeLabela"></label>	

							<label> E-mail: 
								<input id="email" type="email" name="email" placeholder="Type your email" onchange="validirajEmail()">
							</label>


							<label> Username: 
								<input id="username" type="text" name="username" placeholder="Type your username" onchange="validirajUsername()">
							</label>

							<label id="usernameLabela"></label>	

							<label> Password: 
								<input id="password" type="password" name="password" placeholder="Input your password" onchange="validirajPassword()">
							</label>

							<label id="passwordLabela"></label>	

							<label> Confirm Password: 
								<input id="confirmPass" type="password" name="confirmPassword" placeholder="Confirm password" onmouseleave="validirajConfirm()" onchange="validirajConfirm()">
							</label>

							<label id="confirmLabela"></label>	


						</fieldset>
						<fieldset class="account-action">
							<input class="btn" id="register" type="submit" name="submit" value="Register"> </input>
						</fieldset>
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
