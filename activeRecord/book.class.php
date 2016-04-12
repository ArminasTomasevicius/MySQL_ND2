<?php
class book {
	protected $bookId;
	protected $authorId;
	protected $title;
	protected $year;
	
	public function getBookId()
	{return this->$bookId;}
	public function getAuthorId()
	{return this->$authorId;}
	public function getTitle()
	{return this->$title;}
	public function getYear()
	{return this->$year;}
	
	public function setBookId( $a){
	$this->bookId=$a;
	}
	public function setAuthorId( $a){
	$this->authorId=$a;
	}
	public function setTitle( $a){
	$this->title=$a;
	}
	public function setYear( $a){
	$this->year=$a;
	}
	
	public function load($id){		
			$conn = mysqli_connect("localhost", "root", "", "books");
			$sql = "SELECT * FROM books WHERE books.bookId = $id";
			$result = mysqli_query($conn, $sql);
			
			$row = mysqli_fetch_assoc($result);	
			$this->bookId = $row['bookId'];
			$this->authorId = $row['authorId'];
			$this->title = $row['title'];
			$this->year = $row['year'];
			
			mysqli_close($conn);			
		} 	
	}	
?> 