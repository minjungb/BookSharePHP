<?php session_start();
    $servername= "sis-teach-01.sis.pitt.edu";
    $username= "mjb220";
    $password= "";
    $dbname = "mjb220";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if($connection -> connect_error){
        die("Connection failed: ".$connection -> connect_error);
    }




    if(isset($_POST['username']) && isset($_POST['password'])){
        $query = "SELECT username, password FROM user WHERE username = '{$_POST['username']}' AND password = '{$_POST['password']}'";
        $run_query = mysqli_query($connection, $query);
        $check_query = mysqli_num_rows($run_query);

        if($check_query > 0){
            $_SESSION['user']= $_POST["username"];
            $_SESSION['pw']= $_POST["password"];
            echo "<script>window.open('userpage.php','_self')</script>";
        }
        else {
            echo "<script>alert('Username or password is not correct, try again.')</script>";

            echo "<script>window.open('index.php','_self')</script>";
        }
    }


