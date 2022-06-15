<?php 
require_once __DIR__ . "/User.php";

class Registered_user extends User {
    private $percentage_discount = 20; 

    function __construct($_name, $_lastname, $_email, $_credit_card = "")
    {
        parent::__construct($_name, $_lastname, $_email, $_credit_card);
    }
}
?>