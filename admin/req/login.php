<?php

    require '/xampp/htdocs/bookstore/config/DB.php';
    $db = new DB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $email = $db->conn->real_escape_string($_POST['email']);
        $password = $db->conn->real_escape_string($_POST['password']);
        
        
        
        

        $res = $db->LogUserIn('admin', $email, $password);
        echo json_encode($res);

    }