<?php

    // require 'C:\xampp\htdocs\bookstore\config\DB.php';
    require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";
    $db = new DB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        

        // print_r($_POST);
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $full_name = htmlentities(trim($full_name));
        $email = htmlentities(trim($email));
        $password = htmlentities(trim($password));

        $res = $db->CreateUser($full_name, $email, $password);
        echo json_encode($res);

    }