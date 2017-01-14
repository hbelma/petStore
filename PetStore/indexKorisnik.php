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
			<li><a href="#">Home</a></li>
			<li><a href="newsKorisnik.php">News</a></li>

	
			<li><a href="dogsKorisnik.php">Dogs</a></li>
			<li><a href="#">Cats</a></li>
			<li><a href="#">Small Animals</a></li> 

			<li><a href="aboutUsKorisnik.php">About Us</a></li>
			<li><a href="contactUsKorisnik.php">Contact Us</a></li>

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

<!-- slika  -->

<div class="span_12_of_12">
	<img id="pocetnaSlika" alt="pets" src="./Slike/pocetna.jpg">
</div>


<!-- neke kratice za Dogs, Cats and Small Animals.. cisto da pocetna izgleda potpunije malo -->

<div class="container">

	<div class="span_3_of_12">
		<img class="circleBorder" alt="dog" src="./Slike/indexSlika1.jpg">
	</div>

	<div class="span_3_of_12">
		<img class="circleBorder" alt="cat" src="./Slike/indexSlika2.gif">
	</div>

	<div class="span_3_of_12">
		<img class="circleBorder" alt="parrot" src="./Slike/indexSlika3.jpg">
	</div>

	<div class="span_3_of_12">
		<img class="circleBorder" alt="hamster" src="./Slike/indexSlika4.jpg">
	</div>



</div>

</div>

<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>
