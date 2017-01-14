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
			<li><a href="#">News</a></li>

	
			<li><a href="dogsAdmin.php">Dogs</a></li>
			<li><a href="#">Cats</a></li>
			<li><a href="#">Small Animals</a></li> 

			<li><a href="aboutUsAdmin.php">About Us</a></li>
			<li><a href="izXMLuBazu.php"> XML -> baza</a></li>

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

<!-- redovi kolone slicice -->

<div class="span_12_of_12">

	<div class="container">

		<div class="span_4_of_12">

			<img class="okvirSlike" alt="dog" src="./Slike/newsSlika1.jpg"
			 onclick="showImage(this.src, './Slike/newsSlika1.jpg');">
			<p> There are 5 new products for dogs! Check it out in <a href="#"> dogs </a> section. </p>

		</div>

		<div class="span_4_of_12">
			<img class="okvirSlike" alt="petStoreInterior" src="./Slike/newsSlika2.jpg"
						 onclick="showImage(this.src, './Slike/newsSlika2.jpg');">

			<p> Our store got even bigger. Want to know if we offer your dog's favourite treat? Come to find out or <a href="contactUs.html"> contact us </a> . </p>
		</div>

		<div class="span_4_of_12">
			<img class="okvirSlike" alt="aquarium" src="./Slike/newsSlika3.jpg"
						 onclick="showImage(this.src, './Slike/newsSlika3.jpg');">

			<p> Aquarium is here! Yaay. Come and get yourself a goldfish to grant your every wish! ;) </p>
		</div>

	</div>

</div>

  <div id="largeImgPanel" onkeypress="" ="this.style.display='none'">
            <img id="largeImg"
                 style="height:100%; margin:0; padding:0;" />
   </div>

<div class="span_12_of_12">

	<div class="container">

		<div class="span_4_of_12">

			<img class="okvirSlike" alt="maca" src="./Slike/newsSlika4.jpg"
						 onclick="showImage(this.src, './Slike/newsSlika4.jpg');">

			<p> Comfy bed and toys for cats. Check it out <a href="#"> here </a> . </p>

		</div>

		<div class="span_4_of_12">
			<img class="okvirSlike" alt="birdcage" src="./Slike/newsSlika5.jpg" 
						 onclick="showImage(this.src, './Slike/newsSlika5.jpg');">
			<p> This just got in! Special birdcage for only 19,99$ -  <a href="#"> here. </a> . </p>
		</div>

		<div class="span_4_of_12">
			<img class="okvirSlike" alt="hamster" src="./Slike/newsSlika6.jpg"
						 onclick="showImage(this.src, './Slike/newsSlika6.jpg');">
			<p> Cute little hamsters. "Oh, just look at me" </p>
		</div>

	</div>
</div>

</div>

<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>
