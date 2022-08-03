<?php

    require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";
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
       

        if (!$email) {
            echo "No email Use cookies";
        } else {
            // check if item is in user cart
            $tableName = "{$email}_cart";
            $sql = "SELECT id, quantity FROM $tableName where $tableName.name = ?";
            $stmt = $db->conn->prepare($sql);
            $stmt->bind_param('s', $name);
            $stmt->execute();
            $stmt->bind_result($id, $qty);
            $stmt->fetch();
            if ($id) {
                // item in cart
                // $query = "UPDATE $tableName SET `quantity` = 1 WHERE `$tableName`.`id` = 2";
                // if ($db->conn->query($query)) {
                //     echo "cart updated";
                // }
                echo json_encode(['msg' => 'Book already in cart', 'msgClass' => 'error', 'secondMsgClass' => '#fb3']);
            } else {
                // add to cart
                $sql = "INSERT INTO $tableName (`name`, `price`, `quantity`, `img_path`) VALUES ( ?, ?, ?, ?)";
                $stmt =  $db->conn->prepare($sql);
                $stmt->bind_param('ssis', $name, $price, $quantity, $img_path);
                if ($stmt->execute()) {
                    echo json_encode(['msg' => 'Added to cart', 'msgClass' => 'success']);
                }

                
            }
        }
        
    }