<!DOCTYPE html>
<html>
<head>
	<title>Pet Store</title>
	<link rel="stylesheet" type="text/css" href="mainPage.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript" src="petStore.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</head>


<?php

$output="";
  if(isset($_POST['search'])){
    $searchq=$_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    if (file_exists("feedback.xml"))
    {
      $xml=simplexml_load_file("feedback.xml");
      $svi = $xml->children();
      $brojac=0;
      foreach( $svi as $comment)
      {
        if (stripos($comment->subject,$searchq)!==false || stripos($comment->message,$searchq)!==false)
        {
          $subject=$comment->subject;
          $message = $comment->message;

          $output .= '<h2>'.$subject.' '.$message.'</h2>';
          $brojac++;
        }
      }
      if ($brojac==0)
        $output='There are no results';
    }
    else  $output='Search is not available';
    }
?>


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



<div class="span_12_of_12">

        <div>
        <h1>Search for feedback subjects</h1>
            <br>
            <form action="searchUsers.php"  method="post">
              <div>
            <input type="text" name="search" onkeydown="searchkey()">
            <input class="searchbutton" type="submit" value="&#8981;">

</div>
<br>
          <div id="output" class="output">
            <?php
            echo $output;
            ?>
          </div>
          <br>
            </form>
          </div>
	
</div>

<div class="span_12_of_12" id="podnozje">
	<h5> We are the best, visit us and see for yourself! </h5>
</div>

</body>
</html>