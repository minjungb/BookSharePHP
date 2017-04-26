<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include 'dbConnect.php';
    $searchBook = "SELECT * FROM book, post, user WHERE bookID = post.fk_bookID AND userID = post.fk_userID GROUP BY postID";
    $runQuery = mysqli_query($connection, $searchBook);
    $check_query = mysqli_num_rows($runQuery);
    if($check_query > 0){
        while($row = mysqli_fetch_assoc($runQuery)){
            echo "<p>";
            echo "Renter: {$row['username']}<br/>";
            echo "Contact email: {$row['email']}<br/><br/>";
            echo "Book Title: {$row['title']} <br/>";
            echo "ISBN: {$row['isbn']}<br/>";
            echo "Author: {$row['author']}<br/><br/>";
            echo "Description: <br/>";
            echo $row['description'];
            echo "</p>";
            echo "-----------------------------------------";
        }
    }else{
        echo "No books found.";
    }

    mysqli_close($connection);


