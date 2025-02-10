<?php

class Book
{
    public string $title;
    public string $author;
    public int $yearPublished;

    public function __construct($title = "Francais Niveau 4", $author = "Queen Mary", $yearPublished = 1995) {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setYearPublished($yearPublished) {
        $this->yearPublished = $yearPublished;
    }

    public function getBookDetails() {
        return "Title: " . $this->title . "\n" . 
               "Author: " . $this->author . "\n" . 
               "Year Published: " . $this->yearPublished . "\n";
    }


    // $book1 = New Book();
}





















