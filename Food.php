<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    public $expiration;

    function __construct($_brand, $_name, $_price, $_rating, $_expiration)
    {
        parent::__construct($_brand, $_name, $_price, $_rating);
        $this->expiration = $_expiration;
    }
}
?>