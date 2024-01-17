<?php
class Foods extends Products
{
    public $weight;
    public $brand;

    public function __construct($type, $name, $image, $price, $weight, $brand)
    {
        parent::__construct($type, $name, $image, $price);
        $this->weight = $weight;
        $this->brand = $brand;
    }
}
