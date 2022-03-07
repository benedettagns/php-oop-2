<?php 

require_once __DIR__ . "/prodotti.php";

class Food extends Prodotti {
    protected string $size;
    protected float $kg;
    protected string $meat;

    public function __construct(string $_name, string $_type, float $_price, string $_size, float $_kg, string $_meat){
        parent :: __construct($_name, $_type, $_price);

        $this->size = $_size;
        $this->kg = $_kg;
        $this->meat = $_meat;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    public function getKg()
    {
        return $this->kg;
    }

    public function setKg($kg)
    {
        $this->kg = $kg;

        return $this;
    }

    public function getMeat()
    {
        return $this->meat;
    }

    public function setMeat($meat)
    {
        $this->meat = $meat;

        return $this;
    }
}
?>