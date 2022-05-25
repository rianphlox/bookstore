<?php

    require '/xampp/htdocs/bookstore/config/DB.php';
    $db = new DB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // print_r($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $email = htmlentities(trim($email));
        $password = htmlentities(trim($password));
        $res = $db->LogUserIn($table='admin', $email, $password);

        echo json_encode($res);


    }

  