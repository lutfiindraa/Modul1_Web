<?php
require_once 'controller/LibraryController.php';
require_once 'models/Item.php'; // di-load sebelum Book.php
require_once 'models/Book.php'; // di-load setelah Item.php
require_once 'models/Member.php'; 
require_once 'traits/LoggerTrait.php';

use Library\Controller\LibraryController;

$libraryController = new LibraryController();
$libraryController->addBook("PHP for Beginners", "John Doe");
$libraryController->addBook("Advanced PHP", "Jane Smith");

$libraryController->registerMember("Alice");
$libraryController->registerMember("Bob");

$libraryController->borrowBook(1, 1);
$libraryController->borrowBook(2, 2);

$libraryController->listBooks();
$libraryController->listMembers();
