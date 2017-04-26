<?php
    if(!isset($_SESSION)){
    session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway"
          rel="stylesheet">
    <script src="js/jquery-3.2.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/mainstyle.css" />
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 0">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">BookShare</a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="postings.php">Available Books</a></li>
            <li><a href="newpost.php">List a Book</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="userBooks.php">Your Books</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="content">
    <div class="well well-sm" style="background-color:#B7C68B">
        <h2 style="color:#685642">Your Listed Books</h2></div>
    <br/>
    <?php
        include 'dbConnect.php';

        $searchBook = "SELECT * FROM book, user, post WHERE bookID = post.fk_bookID AND userID = post.fk_userID AND userID = {$_SESSION['userId']}";
        $runQuery = mysqli_query($connection, $searchBook);
        $check_query = mysqli_num_rows($runQuery);
        $num = 0;
        if($check_query > 0){
            while($row = mysqli_fetch_assoc($runQuery)){
                echo "<p>";
                echo ++$num;
                echo "<br/>";
                echo "Title: {$row['title']}<br/>";
                echo "Author: {$row['author']}<br/>";
                echo "ISBN: {$row['isbn']} <br/>";
                echo "Description {$row['description']}<br/>";
                echo "</p>";
                echo "-----------------------------------------";
            }
        }else{
            echo "No books found.";
        }

        mysqli_close($connection);
    ?>



</div>

</body>
</html>