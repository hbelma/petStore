<?php

session_start();
if(!file_exists('admin/'.$_SESSION['username'].'.xml')){
	header('Location: login.php');
	die;
}

?>

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

</head>

<body>


	<?php	

	if(isset($_REQUEST['addProduct'])){

		$opis = $_REQUEST['opis'];
		$cijena = $_REQUEST['cijena'];
		$slika = $_REQUEST['nazivPic'];

		$dbh= new PDO("mysql:dbname=petstore;host=localhost;charset=utf8", "testbelma", "belma123");

		$stmt1 = $dbh->prepare("INSERT INTO produkti (opis, cijena, slika) VALUES (:opis, :cijena, :slika)");

		$stmt1->bindParam(':opis', $opis1);
		$stmt1->bindParam(':cijena', $cijena1);
		$stmt1->bindParam(':slika', $slika1);
	
		$opis1 = $opis;
		$cijena1 = $cijena;
		$slika1 = $slika;
	
		$stmt1->execute();

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
			<li><a href="newsAdmin.php">News</a></li>


			<li><a href="#">Dogs</a></li>
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


<div id="polje" class="span_12_of_12">

	<!-- redovi kolone slicice -->

	<div class="span_4_of_12" id="formaDodaj">

		<form id="formaAdminUnos" action="" method="post">
			<div>
				<fieldset class="account-info">

					<label> Description: 
						<input id="opis" type="text" name="opis" onchange="validirajOpis()" />
					</label>

					<label> Price: 
						<input id="cijena" type="text" name="cijena" />
					</label>

					<label id="opisLabela"></label>
					<a id ="ucitaj" href='skiniSliku.html'> Učitaj svoju sliku ovdje</a>


					<label> Type the name of your picture:

						<input type="text" name="nazivPic"/>

					</label>

				</fieldset>

				<fieldset class="account-action">
					<input id="addProduct" class="btn" type="submit" name="addProduct" value="Add product">
				</fieldset>


			</div>
		</form>

	</div>



</div>

<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>