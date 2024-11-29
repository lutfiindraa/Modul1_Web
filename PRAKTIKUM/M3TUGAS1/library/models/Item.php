<?php
namespace Library\Models;

abstract class Item {
    protected $id;
    protected $title;

    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    // Metode abstrak untuk mendapatkan detail item
    abstract public function getDetails();
}
