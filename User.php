<?php 

class User {
    public $name;
    public $username;
    public $email;
    public $credit_card;
    public $cart = [];

    function __construct($_name, $_lastname, $_email, $_credit_card)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->credit_card = $_credit_card;
    }
}
?>