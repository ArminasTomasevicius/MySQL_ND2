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
}
?>