<?php
require_once __DIR__ . '/../models/product_model.php';

function handle_request() {
    $action = $_GET['action'] ?? 'index';

    if ($action === 'add') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            add_product($name, $price, $description);
            header('Location: index.php');
            exit;
        }
        include __DIR__ . '/../views/add_product.php';
    } elseif ($action === 'delete') {
        if (isset($_GET['index'])) {
            delete_product($_GET['index']);
        }
        header('Location: index.php');
        exit;
    } else {
        $products = get_all_products();
        include __DIR__ . '/../views/product_list.php';
    }
}
?>
