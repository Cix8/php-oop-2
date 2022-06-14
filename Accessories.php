<?php 
require_once __DIR__ . "/Product.php";

class Accessories extends Product {
    public $color;

    function __construct($_brand, $_name, $_price, $_rating, $_color)
    {
        parent::__construct($_brand, $_name, $_price, $_rating);
        $this->color = $_color;
    }
}
?>