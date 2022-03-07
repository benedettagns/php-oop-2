<?php

include __DIR__ . "/../db/database.php";

class Prodotti {
    protected string $name;
    protected string $type;
    protected float $price;

    function __construct(string $_name, string $_type, float $_price) {
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
      }

      public function print() {
        return $this->name . "<br/>" . $this->type . "<br/>" . $this->price;
      }

      public function getName () {
        return $this->name; 
      }

      public function getType () {
        return $this->type;
      }

      public function getPrice() {
        return $this->price;
      }
} 


?>