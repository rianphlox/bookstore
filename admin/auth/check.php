<?php
    require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";
    $db = new DB();
    $conn = $db->conn;


    if (isset($_POST['submit'])) {
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $about = $_POST['about'];
        $updated_id = (int)$_POST['updated_id'];
    
        
        $sql = "UPDATE `bookstore` SET `name` = ?, price = ?, author = ?, quantity = ?, category = ?, about = ? WHERE `bookstore`.`id` = ?";
        // $sql = "UPDATE `bookstore` SET `name` = 'Rain Falling', `price` = '37', `author` = 'Fischer Ryan', `quantity` = '12', `category` = 'crime', `about` = 'Nothing Much. Really!' WHERE `bookstore`.`id` = 2";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssissi', $bookname, $price, $author, $quantity, $category, $about, $updated_id);
        if ($stmt->execute()) {
        header('location: tables-basic?edit=true');
        }
        
    }