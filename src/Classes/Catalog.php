<?php

namespace App;

use App\Interfaces\Sorter;

class Catalog {
    private array $products;

    public function __construct(array $products) {
        $this->products = $products;
    }

    public function getProducts(Sorter $sorter): array {
        return $sorter->sort($this->products);
    }
}