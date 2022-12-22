<?php

// ABSTRACTION

// Abstract classes cannot be instantiated

abstract class Book {
    public $title;
    public $pages;
    protected $author = 'Frank Brad';

    public function __construct ($title, $pages) {
        $this -> title = $title;
        $this -> pages = $pages;
    }

    abstract public function getAuthor ();
}

class Novel extends Book {
    public $genre;

    public function __construct ($title, $pages, $genre) {
        parent:: __construct($title, $pages);
        $this -> genre = $genre;
    }

    public function getAuthor () {
        return $this -> author;
    }
}

$novel = new Novel ('Whistling Demons', 425, 'Drama');
echo $novel -> getAuthor() . '<br>';

?>