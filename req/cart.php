<?php
    require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";

    session_start();

    $email = isset($_SESSION['email']) ? strtolower(explode('@', $_SESSION['email'])[0]) : '';
    $db = new DB();

    
        echo json_encode($db->getCartItems($email));
    