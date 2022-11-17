<!-- 3. Write a PHP Script to create a class Book (Book_id, Book_name, Publication, Author,
Book_price). Write a member function to accept and display Book details. -->

<?php

    class Book {
    
        private $book_id = "";
        private $book_name = "";
        private $publication = "";
        private $author = "";
        private $book_price = "";

        function accept($book_id, $book_name, $publication, $author, $book_price) {
            $this->book_id = $book_id;
            $this->book_name = $book_name;
            $this->publication = $publication;
            $this->author = $author;
            $this->book_price = $book_price;
        }

        function display() {
            echo "$this->book_id <br/>";
            echo "$this->book_name <br/>";
            echo "$this->publication <br/>";
            echo "$this->author <br/>";
            echo "$this->book_price <br/>";
        }

    }

    $book = new Book();

    $book->accept(101, "Hello World", "Orielly", "Lasmus Reldof", 400);
    $book->display();

?>
