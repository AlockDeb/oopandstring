<?php

class Book {
    
    private $title;
    private $availableCopies;

   
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    
    public function getTitle() {
        return $this->title;
    }

   
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    
    private $name;

    
    public function __construct($name) {
        $this->name = $name;
    }

    
    public function getName() {
        return $this->name;
    }

    
    public function borrowBook($book) {
        if ($book->borrowBook()) {
           echo $this->name . " borrowed '" . $book->getTitle() . "'\n";
         
        } else {
            echo "No copies of '" . $book->getTitle() . "' are available for " . $this->name . " to borrow.\n";
        }
    }

    
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'\n";
    }
}


$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


$book1->borrowBook($member1); 
$book2->borrowBook($member2); 


echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "<br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "<br>";

?>