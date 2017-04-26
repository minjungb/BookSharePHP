<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include 'dbConnect.php';

    $query = "SELECT userID FROM user WHERE username='{$_POST['lookup']}' LIMIT 1";
    $run_query = mysqli_query($connection, $query);
    $check_query = mysqli_num_rows($run_query);

    if($check_query > 0){
        $avgQuery =  "SELECT AVG('rating') AS avgRating FROM user WHERE username='{$_POST['lookup']}'";
        $run = mysqli_query($connection, $avgQuery);
        $getRating = mysqli_num_rows($run);

        echo "<script>alert('Average rating for this user is {$getRating['avgRating']}')</script>";
        echo "<script>window.open('userLookup.php','_self')</script>";

    }
    else {
        echo "<script>alert('Username does not exist!')</script>";

        echo "<script>window.open('userLookup.php','_self')</script>";
    }


    mysqli_close($connection);


