<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Books list</title>
	
	<?php
		include('books_list.php');
		$books = new BookList();
		$books->load();
		
		$b = $books->getBooks();
		
		foreach($b as $a) {			
			echo "<a href='details.php?id=" .$a->getBookId(). "'>" . $a->getTitle() . " </a><br>";				
		}
	?>
  </head>
  <body> 
    
  </body>
</html>