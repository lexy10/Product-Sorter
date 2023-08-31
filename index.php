<?php
//header("Content-Type: application/json");

require 'vendor/autoload.php';

use App\Catalog;
use App\Sorter\PriceSorter;
use App\Sorter\SalesPerViewSorter;

$products = [
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ]
];

$productPriceSorter = new PriceSorter();
$productSalesPerViewSorter = new SalesPerViewSorter();

$catalog = new Catalog($products);
$productsSortedByPrice = $catalog->getProducts($productPriceSorter);
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

echo "Sorted Products by Price:\n";
print_r($productsSortedByPrice);

echo "\nSorted Products by Sales Per View (In Descending Order):\n";
print_r($productsSortedBySalesPerView);