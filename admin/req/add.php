<?php
    require '/xampp/htdocs/bookstore/config/DB.php';

    $db = new DB();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        // print_r($_POST);
        // foreach($_POST as $key => $value) {
        //     $key = htmlspecialchars(stripslashes(trim($value)));
        // }
        $bookname = htmlspecialchars($_POST['bookname']);
        $author = htmlspecialchars($_POST['author']);
        $price = htmlspecialchars($_POST['price']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $category = htmlspecialchars($_POST['category']);
        $about = htmlspecialchars($_POST['about']);

        $res = $db->addBook($bookname, $author, $price, $quantity, $category, $about);
        echo json_encode($res);
        
    }
?>