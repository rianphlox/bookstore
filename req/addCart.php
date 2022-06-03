<?php

    require '../config/DB.php';
    $db = new DB();

    session_start();
    $email = isset($_SESSION['email']) ? strtolower(explode('@', $_SESSION['email'])[0]) : '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo json_encode($res);
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img_path = $_POST['img_path'];
        $quantity =  1;
        $res = $db->addToCart($email, $name, $price, $quantity, $img_path);
        echo json_encode($res);
        
    }