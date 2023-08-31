<?php

namespace App\Sorter;

use App\Interfaces\Sorter;

class SalesPerViewSorter implements Sorter {
    public function sort(array $products): array {
        // Sorting based on sales_count per view_count ratio
        usort($products, function ($a, $b) {
            $ratioA = $a['sales_count'] / $a['views_count'];
            $ratioB = $b['sales_count'] / $b['views_count'];

            return $ratioB <=> $ratioA; // Sorted in descending order
        });
        return $products;
    }
}