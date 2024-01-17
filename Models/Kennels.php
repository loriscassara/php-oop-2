<?php
class Kennels extends Products
{
    public $size;
    public $brand;

    public function __construct($type, $name, $image, $price, $size, $brand)
    {
        parent::__construct($type, $name, $image, $price);
        $this->size = $size;
        $this->brand = $brand;
    }
}
