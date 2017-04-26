<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include 'dbConnect.php';

    $searchBook = "SELECT * FROM book, post, user GROUP BY post.postID";
    $runQuery = mysqli_query($connection, $searchBook);
    $check_query = mysqli_num_rows($runQuery);

    if($check_query > 0){
        while($row = mysqli_fetch_assoc($runQuery)){
            echo "<br/>";
            echo "Renter: {$row['username']}<br/>";
            echo "Contact email: {$row['email']}<br/><br/>";
            echo "Book Title: {$row['title']} <br/>";
            echo "ISBN: {$row['isbn']}<br/>";
            echo "Author: {$row['author']}<br/><br/>";

            echo "Description: <br/>";
            echo $row['description'];
            echo "<br/><br/>";
            echo "-----------------------------------------";


        }
    }else{
        echo "No books found.";
    }

    mysqli_close($connection);


