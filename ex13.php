<?php
// Escreva uma classe Carro que tenha como atributo a sua quilometragem. Escreva
// nessa classe um método viajar que recebe como parâmetro a distância percorrida e
// soma esse valor à quilometragem do carro.

class Car
{
    public $mileage;

    public function __construct($mileage)
    {
        $this->mileage = $mileage;
    }

    public function travel($distance)
    {
        return $distance + $this->mileage;
    }
}

$car = new Car(100);
echo "Total mileage : " . $car->travel(100) . "km\n";
?>