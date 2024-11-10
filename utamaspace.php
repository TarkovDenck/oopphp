<?php

// Menggunakan alias dengan use untuk menghindari konflik
use store\Product as StoreProduct;
use warehouse\Product as WarehouseProduct;

// Memuat kedua file namespace
require_once 'StoreProduct.php';
require_once 'WarehouseProduct.php';

// Membuat objek dari masing-masing kelas Product
$storeProduct = new StoreProduct();
$warehouseProduct = new WarehouseProduct();

?>
