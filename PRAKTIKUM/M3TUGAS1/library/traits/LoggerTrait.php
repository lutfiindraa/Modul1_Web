<?php
namespace Library\Traits;

trait LoggerTrait {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}
