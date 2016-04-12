<?php
	include('book.class.php');
	class BooksRepository{
	
		private $conn = false;
			
		function getConnection(){
			global $conn;
			if( $conn )
				return $conn;
			$conn = mysqli_connect("localhost", "root", "", "arminas_tomasevicius_nfq");
			return $conn;
		}
		
		 function CleanUpDB()
		{
			global $conn;
			if( $conn != false )
				mysqli_close($conn);
			$conn = false;
		}
		
		public function getBookById($id){
			$b = new Book;	
			$sql = "SELECT * FROM books WHERE books.bookId = $id";
			$result = mysqli_query($this->getConnection(), $sql);
			$row = mysqli_fetch_assoc($result);	
			$b->setBookId($row['bookId']);
			$b->setAuthorId($row['authorId']);
			$b->setTitle($row['title']);
			$b->setYear($row['year']);
			$this->CleanUpDB();
			return $b;
		}
		
		public function getAllBooks(){
			$books = [];
			$sql = "SELECT * FROM books";	
			$result = mysqli_query($this->getConnection(), $sql);
			while($row = mysqli_fetch_assoc($result)) {	
				$b = new Book;
				$b->setBookId($row['bookId']);
				$b->setAuthorId($row['authorId']);
				$b->setTitle($row['title']);
				$b->setYear($row['year']);
				$books[] = $b;
			}
			$this->CleanUpDB();
			return $books;
		}
	}
?>