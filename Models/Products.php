<?php

require __DIR__ . '/Kennels.php';
require __DIR__ . '/Foods.php';
require __DIR__ . '/Toys.php';
class Products
{
    public $type;
    public $name;
    public $image;
    public $description;
    public $price;
    public $amount;

    public function __construct($type, $name, $image, $price)
    {
        $this->type = $type;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }
}
