
<?php
	$conn= mysqli_connect('localhost','root','','user');

	

	if ($conn) {
		echo "we are connected";

		}
		else{
			die("Database connected failed");
		}


//for reading the information in the database
		$query="SELECT * FROM test";

$result= mysqli_query($conn, $query);




while ($read= mysqli_fetch_assoc($result) ){
	print_r($read);
}

?>