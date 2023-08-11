<?php
// Crie uma classe Retangulo com atributos altura e base. Adicione à classe métodos
// para calcular a área e o perímetro dos objetos criados.

class Retangulo
{
    public $altura;
    public $base;

    public function __construct($altura, $base)
    {
        $this->altura = $altura;
        $this->base = $base;
    }

    public function getArea()
    {
        return $this->altura * $this->base;
    }

    public function getPerimeter()
    {
        return (2 * $this->altura) + (2 * $this->base);
    }
}

$retangulo = new Retangulo(4, 4);
echo "A área do retângulo é de " . $retangulo->getArea() . "m²\n";
echo "O perímetro do retângulo é " . $retangulo->getPerimeter() . "m\n";
?>