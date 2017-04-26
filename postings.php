<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
        echo "<script>alert('You must be logged in to view the postings')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="./js/jquery-3.2.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./css/mainstyle.css"/>
    <meta name="viewpoint" content="width=device-width", initial-scale="1"/>
    <meta charset="UTF-8">
    <!-- This page shows posts for books to buy/rent -->
    <title>Book Listings</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom:0">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != true){ echo "userpage.php";}else echo "index.php" ?>">BookShare</a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="postings.php">Available Books</a></li>
            <li><a href="newpost.php">List a Book</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="content">
    <h2 style="color:#685642">Book Postings</h2>
    <p>List of all books available by the user. Please email responsibly!</p>
    <div id="postings" class="well well-sm" style="background-color:#B7C68B">
        <?php include_once 'dbViewPost.php'; ?>
    </div>
</div>

</body>
</html>