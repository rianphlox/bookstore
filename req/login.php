<?php

    // require 'C:\xampp\htdocs\bookstore\config\DB.php';
    require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";
    $db = new DB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // print_r($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $email = htmlentities(trim($email));
        $password = htmlentities(trim($password));
        $res = $db->LogUserIn($table='users', $email, $password);

        echo json_encode($res);


    }

  