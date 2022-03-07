<?php 

require_once __DIR__ . "/prodotti.php";

class Accessorio extends Prodotti {
    protected string $materiale;
    protected float $capienza;

    public function __construct(string $_name, string $_type, float $_price, string $_materiale, float $_capienza){
        parent :: __construct($_name, $_type, $_price);

        $this->size = $_materiale;
        $this->kg = $_capienza;
    }

    public function getMateriale()
    {
        return $this->materiale;
    }

    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }
}
?>