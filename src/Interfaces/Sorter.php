<?php
namespace App\Interfaces;

interface Sorter {
    public function sort(array $products): array;
}