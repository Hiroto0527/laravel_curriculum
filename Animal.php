<?php
class Animal {
    private $cry = 'bowbow!';
    public function bow() {
        echo $this->cry.PHP_EOL;
    }
}
    $animal = new Animal();
    $animal -> bow();
?>