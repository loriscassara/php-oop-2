<?php
class Toys extends Products
{
    public $suggestion;
    public $brand;

    public function __construct($type, $name, $image, $price, $suggestion, $brand)
    {
        parent::__construct($type, $name, $image, $price);
        $this->suggestion = $suggestion;
        $this->brand = $brand;
    }
}
