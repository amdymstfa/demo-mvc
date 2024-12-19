<?php

function get_all_products() {
    $products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true);
    return $products ? $products : [];
}

function save_products($products) {
    file_put_contents(__DIR__ . '/../data/products.json', json_encode($products, JSON_PRETTY_PRINT));
}

function add_product($name, $price, $description) {
    $products = get_all_products();
    $products[] = [
        'name' => $name,
        'price' => $price,
        'description' => $description
    ];
    save_products($products);
}

function delete_product($index) {
    $products = get_all_products();
    if (isset($products[$index])) {
        array_splice($products, $index, 1);
        save_products($products);
    }
}
?>
