<?php
namespace Library\Controller;

use Library\Models\Book;
use Library\Models\Member;

class LibraryController {
    private $books = [];
    private $members = [];

    public function addBook($title, $author) {
        $id = count($this->books) + 1; // Generate ID
        $this->books[] = new Book($id, $title, $author);
    }

    public function registerMember($name) {
        $id = count($this->members) + 1; // Generate ID
        $this->members[] = new Member($id, $name);
    }

    public function borrowBook($bookId, $memberId) {
        if (isset($this->books[$bookId - 1])) {
            $book = $this->books[$bookId - 1];
            $book->borrow($memberId);
            echo "Book '{$book->getTitle()}' borrowed by member ID {$memberId}." . PHP_EOL; 
        }
    }

    public function listBooks() {
        echo "List of Books:\n"; // Ganti dengan "\n"
        foreach ($this->books as $book) {
            echo $book . "\n"; // Menambahkan "\n" untuk setiap buku
        }
    }

    public function listMembers() {
        echo "List of Members:\n"; // Ganti dengan "\n"
        foreach ($this->members as $member) {
            echo $member->getName() . " (ID: " . $member->getId() . ")\n"; 
        }
    }
}
