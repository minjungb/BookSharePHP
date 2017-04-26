<?php
    session_start();
    include 'dbConnect.php';
    if(isset($_POST['username']) && isset($_POST['password'])){
        $query = "SELECT userID, username, password FROM user WHERE username = '{$_POST['username']}' AND password = '{$_POST['password']}'";
        $run_query = mysqli_query($connection, $query);
        $check_query = mysqli_num_rows($run_query);

        if($check_query > 0){
            $_SESSION['user']= $_POST['username'];
            $_SESSION['loggedIn'] = true;
            $getId = mysqli_fetch_row($run_query);
            $_SESSION['userId'] = $getId[0];
            echo "<script>window.open('userpage.php','_self')</script>";
            exit();
        }
        else {
            echo "<script>alert('Username or password is not correct, try again.')</script>";

            echo "<script>window.open('index.php','_self')</script>";
        }
    }

mysqli_close($connection);