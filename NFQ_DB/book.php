<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Book information</title>
	
	<?php
		session_start();
		$bookId = $_GET['id'];
		
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
		$sql = "SELECT * FROM books WHERE books.bookId = $bookId";
		$result = mysqli_query($conn, $sql);
		

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {	
			
				$sql_auth = "SELECT * FROM authors WHERE " . $row['authorId'] ." = authors.authorId";
				$result_auth = mysqli_query($conn, $sql_auth);				
				
				if ($result_auth) {
					$a = mysqli_fetch_assoc($result_auth);
					$authorName = $a['name'];					
				}
				else {
						$authorName = "";
				}
				
				echo $row['bookId'] . "<br>" 
					. $row['authorId'] . "<br>" . $authorName . "<br>"
					. $row['title'] . "<br>"
					. $row['year'] . "<br>";				
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