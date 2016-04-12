<!doctype html>
<html>
  <head>
  <?php
  
  require_once('book.class.php');
		  $b = new Book;	  
		  $b->load($_GET["id"]);		  
		  echo $b->getBookId() . "<br>" . 
		  $b->getAuthorId() . "<br>" . 
		  $b->getTitle() . "<br>" . 
		  $b->getYear() . "<br>";  	  

  ?>
  </head>
  <body>
  </body>
  </html>
   