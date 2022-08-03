<?php
        require $_SERVER['DOCUMENT_ROOT']. "/bookstore/config/DB.php";
        $db = new DB();
        $id = $db->conn->real_escape_string($_GET['id']);
        
        $sql =  "DELETE FROM `bookstore` WHERE `bookstore`.`id` = ?";
        $stmt = $db->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            header('location: tables-basic');
        }

?>