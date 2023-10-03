<?php 
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product ID: {$this->id} <br>";
        echo "Product Name: {$this->name} <br>";
        echo "Product Price: $" . $this->getFormattedPrice() . "<br>";
    }
}

// Example usage:
$product = new Product(1, 'Pant', 100);
$product->showDetails();
?>