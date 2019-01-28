<?php
include_once(dirname(__FILE__) . '/../Abstract/Fruit.php');
class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}