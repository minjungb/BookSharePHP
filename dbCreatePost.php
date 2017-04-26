<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include 'dbConnect.php';
    $currentDate = date('Y-m-d H:i:s');
    $createQuery = "INSERT INTO book (title, author, isbn) VALUES ('{$_POST['book-title']}','{$_POST['author']}',{$_POST['isbn']});";
    $createQuery .= "INSERT INTO post (description, createDate, fk_bookID, fk_userID) VALUES ('{$_POST['description']}', '{$currentDate}',(SELECT bookID FROM book WHERE title = '{$_POST['book-title']}' AND author = '{$_POST['author']}' LIMIT 1),{$_SESSION['userId']})";
    $query1 = mysqli_multi_query($connection, $createQuery);

    if(!$query1){
        die('Inserting post failed.');
    }else{
        echo "<script>alert('Post Created!')</script>";
        header('Location: http://localhost/School/is1059/FinalProject/userpage.php');
        die();
    }
    mysqli_close($connection);
