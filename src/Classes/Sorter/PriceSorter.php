<?php

namespace App\Sorter;

use App\Interfaces\Sorter;

class PriceSorter implements Sorter {
    public function sort(array $products): array {
        // Sorting based on the price of the products
        usort($products, function ($a, $b) {
            return $a['price'] - $b['price'];
        });
        return $products;
    }
}