<?php
namespace Library\Models;

class Book extends Item {
    private $author;
    private $borrowedBy = null;

    public function __construct($id, $title, $author) {
        parent::__construct($id, $title);
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function borrow($memberId) {
        $this->borrowedBy = $memberId;
    }

    public function getDetails() {
        return "Book: " . $this->title . " by " . $this->author;
    }
//magic method
    public function __toString() {
        return $this->getDetails() . " (ID: " . $this->id . ")";
    }
}
