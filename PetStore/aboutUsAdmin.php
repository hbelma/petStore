<?php 

if(isset($_GET['staviUCSV'])){
  $fp = fopen('Users.csv', 'w');
  $files=glob('users/*.xml');
  var_dump($files);
  foreach($files as $file){
    $xml=new SimpleXMLElement($file,0,true);
    $filer =array($xml->user->firstName,$xml->user->lastName);
      fputcsv($fp, $filer);
  }
    fclose($fp);
    //header("Location: http://localhost:50/spiralatri/LoginPodaci.csv");
    $url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
    $url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
    $url .= '/Users.csv';            // <-- Your relative path
    header('Location: ' . $url, true, 302); 
    die();
  }

?>



<!DOCTYPE html>
<html>
<head>
	<title>Pet Store</title>
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript" src="petStore.js"></script>
	 <script type="text/javascript" src="funkcija.js"></script>

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
			<li><a href="indexAdmin.php">Home</a></li>
			<li><a href="newsAdmin.php">News</a></li>

	
			<li><a href="dogsAdmin.php">Dogs</a></li>
			<li><a href="#">Cats</a></li>
			<li><a href="#">Small Animals</a></li> 

			<li><a href="#">About Us</a></li>
			<li><a href="contactUsAdmin">Contact Us</a></li>
						<li><a href="searchUsers.php">Search</a></li>



			<li><a href="indexAdmin.php?staviUCSV=true">Korisnici-CSV</a></li>
			<li><a href="FPDFDownload.php">Korisnici-PDF</a></li>
		
			
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

	<div class="span_5_of_12" id="staNudimo">

		<h1> What do we offer? </h1>

		<p> The Pet Store is the best choice for finding top quality pet products and foods and even buying animals. For now, we offer puppies, bunnies and fish. The Pet Store offers a variety of high quality food brands for your dogs, cats, hamsters, bunnies, birds and fish. We also offer pet products such as treats, toys, supplements, leashes/collars, beds, bowls, cleaning supplies, grooming supplies, kitty litter and more. </p>

			<h1> Where can you find us? </h1>

			<p> The Pet Store is located on the first floor of the Shopping Center Grbavica, Sarajevo. <br><br> Address: Hasana Brkica 30. <br><br> We are open: <br> Mon - Fri 8AM - 4PM <br> Weekend 10AM - 2PM</p>


		</div>

		<div class="span_7_of_12" id="slikaPetStore">
			
			<img id="slikaPS" alt="PetStoreInterior" src="./Slike/aboutUs.jpg">

		</div>

</div>

</div>


<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>
