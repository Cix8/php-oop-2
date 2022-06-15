<?php 
class Product {
    public $brand;
    public $name;
    public $price;
    public $rating;
    public $available;

    function __construct($_brand, $_name, $_price, $_rating, $_available = true)
    {
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->rating = $_rating;
        $this->available = $_available;
    }
}
?>