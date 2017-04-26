<?php
    session_start();
    include 'dbConnect.php';

    $query = "SELECT userID FROM user WHERE username='{$_POST['reviewUsername']}' LIMIT 1";
    $run_query = mysqli_query($connection, $query);
    $check_query = mysqli_num_rows($run_query);

    if($check_query > 0){
        $insertQuery = $createQuery = "INSERT INTO user (username, rating) VALUES ('{$_POST['reviewUsername']}',{$_POST['rating']});";
        $run = mysqli_query($connection, $insertQuery);

        echo "<script>alert('Rating has been added!')</script>";
        echo "<script>window.open('userpage.php','_self')</script>";
    }
    else {
        echo "<script>alert('Username does not exist!')</script>";

        echo "<script>window.open('review.php','_self')</script>";
    }


    mysqli_close($connection);