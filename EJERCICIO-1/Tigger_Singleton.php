<?php

class Tigger {

    private static $instance;
    private $counter = 0;

    private function __construct() {
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function roar() {
        $this->counter++;
        echo "Grrr!" . PHP_EOL;
    }

    public function getCounter() {
        return $this->counter;
    }

}

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

$tigger1->roar();
$tigger1->roar();
$tigger2->roar();

echo $tigger1->getCounter(); // 3

?>

