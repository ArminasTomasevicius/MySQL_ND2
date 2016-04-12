<!doctype html>
<html>
  <head>
	  <?php
		  require_once('booksRepository.class.php');
		  $b = new BooksRepository;	  
		  $book = $b->getBookById($_GET["id"]);
		  echo $book->getBookId() . "<br>" . 
		  $book->getAuthorId() . "<br>" . 
		  $book->getTitle() . "<br>" . 
		  $book->getYear() . "<br>";  	  
	  ?>	  
	</head>
	<body>		
	</body>
</html>