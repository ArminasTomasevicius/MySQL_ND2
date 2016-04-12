<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Books list</title>
	
	<?php
		include('booksRepository.php');
		$b = new BooksRepository;
		$books = $b->getBooks();
		
		
		foreach($books as $a) {			
			echo "<a href='details.php?id=" .$a->getBookId(). "'>" . $a->getTitle() . " </a><br>";				
		}
		
	?>
  </head>
  <body> 
    
  </body>
</html>