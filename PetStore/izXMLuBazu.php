<?php
$servername = "localhost";
$username = "testbelma";
$password = "belma123";
$dbname = "petstore";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//dodavanje registrovanih u bazu ako ne postoje vec

$files = glob('users/*.xml');
	foreach($files as $file){
		$xml = new SimpleXMLElement($file, 0, true);
		$ime = $xml->user->firstName;
		$prezime = $xml->user->lastName;
		$email = $xml->user->email;
		$username = $xml->user->username;
		$password = $xml->user->password;

$postoji = "SELECT * FROM registrovanikorisnici where username='$username'";

$result = $conn->query($postoji);

if ($result->num_rows < 1){

$sql2 = "INSERT INTO registrovanikorisnici (ime,prezime,email,username,password)

VALUES ('$ime','$prezime','$email','$username','$password')";

if (mysqli_query($conn, $sql2)) {
    echo "New record created successfully";
} 

else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
}
}

//dodavanje logovanih u bazu ako ne postoji

$files = glob('podaciZaLogin/*.xml');

	foreach($files as $file){

		$xml=new SimpleXMLElement($file,0,true);
		$username = $xml->user->username;
		$password = $xml->user->password;

	$postoji = "SELECT * FROM podaciologovanim where username='$username'";

$result = $conn->query($postoji);

if ($result->num_rows < 1){
	$sql = "INSERT INTO podaciologovanim (username, password)
VALUES ('$username','$password')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}

$xml = new SimpleXMLElement('feedback.xml', 0, true);

foreach ($xml->comment as $komentar) {
	
	$username = $komentar->username;
	$email = $komentar->email;
	$subject = $komentar->subject;
	$message =$komentar->message;

	$postoji = "SELECT * FROM kontaktinfo where username ='$username'";

	$result = $conn->query($postoji);

	if ($result->num_rows < 1){

		$sql = "INSERT INTO kontaktinfo (username,email,subject,message)

		VALUES ('$username','$email','$subject','$message')";  


		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} 

		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

header("Location: indexAdmin.php");

?>


