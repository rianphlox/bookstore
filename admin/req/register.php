<?php

    require '/xampp/htdocs/bookstore/config/DB.php';
    $db = new DB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        

        // print_r($_POST);
        $full_name = $db->conn->real_escape_string($_POST['full_name']);
        $email = $db->conn->real_escape_string($_POST['email']);
        $password = $db->conn->real_escape_string($_POST['password']);

            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";


        $query = "SELECT id FROM admin WHERE email = ?";
        $stmt = $db->conn->prepare($query);
        $stmt->bind_param('s' , $email);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();
        if (!$id) {
        //     // admin not in database
            $query = "INSERT INTO `admin` (`full_name`, `email`, `password`) VALUES (?, ?, ?) ";
            $stmt = $db->conn->prepare($query);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $full_name, $email, $hashedPassword);
            if ($stmt->execute()) {
        //         // create cart for user using email
                echo json_encode(['msg' => 'Success!', 'msgClass' => 'success', 'secondMsgClass' => '#00c851']);
            }
        } else {
            // user in database
            echo json_encode(['msg' => 'User already exists!', 'msgClass' => 'error', 'secondMsgClass' => '#fb3']);
        }

    }