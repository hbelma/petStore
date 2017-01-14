<?php

    //open connection to mysql db
		
    $connection = mysqli_connect("localhost","testbelma","belma123","petstore") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db

    //prvi
    //$sql = "select * from registrovanikorisnici";

    //drugi
    //$sql = "select * from registrovanikorisnici where ime = 'Chris'";

    //treci
    //$sql = "select * from kontaktinfo where username = 'belmah95'";

    //cetvrti
    $sql = "select username from podaciologovanim";

    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //cetvrti


    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //write to json file
    $fp = fopen('empdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
    //close the db connection
    mysqli_close($connection);
?>