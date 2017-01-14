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

	<?php /*

	$error = false;

	if(isset($_POST['submit'])){
		$username = preg_replace('/[^A-Za-z0-9]/', '' , $_POST['username'] );


		if(file_exists('admin/' . $username . '.xml')){
			$xml = new SimpleXMLElement('admin/' . $username . '.xml', 0, true);
					$password = md5($_POST['password']);

		if($password == $xml->password){
				session_start();
				$_SESSION['username'] = $username;
				header('Location: indexAdmin.php');
				die;
		   }
		}

		elseif(file_exists('users/' . $username . '.xml')){
			$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
					$password2 = $_POST['password'];

		if($password2 == $xml->user->password){
				session_start();
				$_SESSION['username'] = $username;
				header('Location: indexKorisnik.php');
				die;
		   }
		}
	

	$error = true;

	*/


	$error = false;
  if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $password = $_POST['password'];


   if($username != "testbelma") {


    $dbh= new PDO("mysql:dbname=petstore;host=localhost;charset=utf8", "testbelma", "belma123");

    $upit = $dbh->prepare("SELECT password FROM podaciologovanim WHERE username=?");

    $upit->bindValue(1, $username, PDO::PARAM_STR);
    $upit->execute();

    foreach ($upit->fetch() as $row) {

      if($password==$row){

        session_start();
        $_SESSION['username']= $username;
        header('Location:indexKorisnik.php');
        die;
      }

  }

}


elseif ($username == "testbelma" && $password == "belma123") {

	   session_start();
        $_SESSION['username']= $username;
        header('Location:indexAdmin.php');
        die;



}

    
 
  $error=true;


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

								<li><a href="searchUsers.php">Search</a></li>

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
			<li><a href="#">Home</a></li>
			<li><a href="news.php">News</a></li>

	
			<li><a href="dogs.php">Dogs</a></li>
			<li><a href="cats.php">Cats</a></li>
			<li><a href="smallAnimals.php">Small Animals</a></li> 

			<li><a href="aboutUs.php">About Us</a></li>
			
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

		<img id="slikaLjubimci" alt="pets" src="./Slike/pets.jpg">

	</div>

	<div class="span_6_of_12"  id="unos">

		<h1 id="dobrodosli"> Welcome back member! </h1>


		<form method="post" action="">
			<fieldset class="account-info">
				<label> Username: 
					<input id="username" type="text" name="username">
				</label>
				<label id="usernameLabela"></label>	

				<label> Password: 
					<input id="password" type="password" name="password">

					<?php

						if($error){
							echo '<label id="passwordLabela">
							Invalid username and/or password!
							</label>';
						}

					?>

				</label>

			</fieldset>
			<fieldset class="account-action">
				<input class="btn" id="login" type="submit" name="submit" value="Login">

			<!--	<label>
					<input type="checkbox" name="remember"> Stay signed in
				</label>

			-->

			</fieldset>
		</form>

	</div>

</div>

</div>

<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>
