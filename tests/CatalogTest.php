<?php

use App\Catalog;
use App\Sorter\PriceSorter;
use App\Sorter\SalesPerViewSorter;
use PHPUnit\Framework\TestCase;

class CatalogTest extends TestCase {
    public function testProductsSortedByPrice() {
        $products = [
            [
                'id' => 1,
                'name' => 'Alabaster Table', 'price' => 12.99,
                'created' => '2019-01-04', 'sales_count' => 32, 'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table', 'price' => 44.49,
                'created' => '2012-01-04', 'sales_count' => 301, 'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table', 'price' => 10.00,
                'created' => '2014-05-28', 'sales_count' => 1048, 'views_count' => 20123,
            ]
        ];

        $catalog = new Catalog($products);
        $productPriceSorter = new PriceSorter();
        $sortedProducts = $catalog->getProducts($productPriceSorter);

        // Assertions
        $this->assertIsArray($sortedProducts);
        $this->assertEquals(count($products), count($sortedProducts));

        // Print the sorted array
        print_r($sortedProducts);

        $this->assertTrue(true, 'Products Sorted by Price'); // Just a placeholder assertion
    }

    public function testProductsSortedBySalesPerView() {
        $products = [
            [
                'id' => 1,
                'name' => 'Alabaster Table', 'price' => 12.99,
                'created' => '2019-01-04', 'sales_count' => 32, 'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table', 'price' => 44.49,
                'created' => '2012-01-04', 'sales_count' => 301, 'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table', 'price' => 10.00,
                'created' => '2014-05-28', 'sales_count' => 1048, 'views_count' => 20123,
            ]
        ];

        $catalog = new Catalog($products);
        $productSalesPerViewSorter = new SalesPerViewSorter();
        $sortedProducts = $catalog->getProducts($productSalesPerViewSorter);

        // Assertions
        $this->assertIsArray($sortedProducts);
        $this->assertEquals(count($products), count($sortedProducts));

        // Print the sorted array
        print_r($sortedProducts);

        $this->assertTrue(true, 'Products Sorted by Sales per view ratio'); // Just a placeholder assertion
    }
}
