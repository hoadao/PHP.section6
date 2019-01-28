<?php
include_once(dirname(__FILE__) . '/../Abstract/Animal.php');
include_once(dirname(__FILE__) . '/../Interface/Edible.php');
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat()
    {
        return "could be fried";
    }
}
