<?php 

class User {
    public $name;
    public $lastname;
    private $password;
    public $email;
    public $credit_card;
    public $cart = [];

    function __construct($_name, $_lastname, $_email, $credit_card_number, $credit_card_expiration)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->credit_card = [
            "number" => $credit_card_number,
            "expiration" => $credit_card_expiration
        ];
        $this->password = $this->fakePwGen();
    }

    public function fakePwGen() {
        return "safe.password1234";
    }

    public function addToCart($item) {
        $this->cart[] = $item;
    }

    public function getFinalPrice() {
        $final_price = 0;
        foreach ($this->cart as $single_item) {
            $final_price += $single_item->price;
        }
        return $final_price;
    }
}
?>