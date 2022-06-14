<?php 
class Product {
    public $brand;
    public $name;
    public $price;
    public $rating;

    function __construct($_brand, $_name, $_price, $_rating)
    {
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->rating = $_rating;
    }
}
?>