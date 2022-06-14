<?php 
require_once __DIR__ . "/Product.php";

class Parapharmacy extends Product {
    public $dedicated_to;

    function __construct($_brand, $_name, $_price, $_rating, $_dedicated_to)
    {
        parent::__construct($_brand, $_name, $_price, $_rating);
        $this->dedicated_to = $_dedicated_to;
    }
}
?>