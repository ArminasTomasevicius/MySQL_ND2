<?php
 include('book.class.php');
    class BookList {
        protected $books = [];
        public function load() {
            $conn = mysqli_connect("localhost", "root", "", "arminas_tomasevicius_nfq");
				$sql = "SELECT * FROM books";
				$result = mysqli_query($conn, $sql);
				
				while ($row = mysqli_fetch_array($ret)) {
                $book = new Book();
                $book->setId($row['bookId']);
                $book->setTitle($row['title']);
                $book->setYear($row['year']);
                $book->setAuthors($row['authors']);
                $this->books[] = $book;
            }
            mysqli_close($conn);
        }
        /**
         * @return array
         */
        public function getBooks()
        {
            return $this->books;
        }
        /**
         * @param array $books
         */
        public function setBooks($books)
        {
            $this->books = $books;
        }
    }
?>