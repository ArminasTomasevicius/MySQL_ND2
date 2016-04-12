<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Books list</title>
	
	<?php
		session_start();

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "arminas_tomasevicius_nfq";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "SELECT bookId, title FROM Books";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {			
				echo "<a href='book.php?id=" . $row['bookId'] ."'>" . $row['title'] . "</a>" . "<br>";				
			}
		} else {
			echo "0 results";
		}

		mysqli_close($conn);

	?>
  </head>
  <body> 
    
  </body>
</html>