<?php
// Implemente uma classe Pedido que possua os atributos número do produto
// comprado, a descrição, o valor unitário e a amountidade comprada. Crie um método
// na classe que calcula e apresenta a fatura com base nos dados
// do pedido (valor da fatura = quantidade × valor unitário).

class Order
{
    public $number;
    public $description;
    public $unit_value;
    public $amount;
    public function __construct($number, $description, $unit_value, $amount)
    {
        $this->number = $number;
        $this->description = $description;
        $this->unit_value = $unit_value;
        $this->amount = $amount;
    }

    public function purchase()
    {
        return ($this->amount * $this->unit_value);
    }
}

$order = new Order(1, 'TV', 1300, 2);
echo "-----Purchase------
Product: $order->description
Amount: $order->amount
Total: R$" . number_format($order->purchase(), 2, ',', '.') . "\n";
?>