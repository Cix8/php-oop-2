<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    public $expiration;

    function __construct($_brand, $_name, $_price, $_rating, $_expiration)
    {
        parent::__construct($_brand, $_name, $_price, $_rating);
        $this->expiration = $_expiration;
        $this->available = $this->isAvailable();
    }

    public function isAvailable() {
        if (intval(date("m")) > 1 && intval(date("m")) < 6) {
            return true;
        }
        return false;
    }
}
?>