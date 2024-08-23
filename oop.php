<?php

class Book {
    
    private $title;
    private $availableCopies;

    
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    
    public function returnBook() {
        $this->availableCopies++;
    }

    
    public function getTitle() {
        return $this->title;
    }

    
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
}



class Member {
    
    private $name;

    
    public function __construct($name) {
        $this->name = $name;
    }

    
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} borrowed \"{$book->getTitle()}\".\n";
        } else {
            echo "Sorry, \"{$book->getTitle()}\" is not available for borrowing.\n";
        }
    }

    
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned \"{$book->getTitle()}\".\n";
    }
}


function main() {
    
    $book1 = new Book("The Great Gatsby", 3);
    $book2 = new Book("1984", 2);

    
    $member1 = new Member("John Doe");
    $member2 = new Member("Jane Smith");

    
    $member1->borrowBook($book1);

    
    $member2->borrowBook($book2);

    
    echo "\nAvailable copies after borrowing:\n";
    echo "\"{$book1->getTitle()}\" - {$book1->getAvailableCopies()} copies available.\n";
    echo "\"{$book2->getTitle()}\" - {$book2->getAvailableCopies()} copies available.\n";

    
    $member1->returnBook($book1);

    
    $member2->returnBook($book2);

    
    echo "\nAvailable copies after returning:\n";
    echo "\"{$book1->getTitle()}\" - {$book1->getAvailableCopies()} copies available.\n";
    echo "\"{$book2->getTitle()}\" - {$book2->getAvailableCopies()} copies available.\n";
}


main();

?>
