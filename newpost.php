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
    <link href="https://fonts.googleapis.com/css?family=Raleway"
          rel="stylesheet">
    <script src="./js/jquery-3.2.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/mainstyle.css" />
    <meta name="viewpoint" content="width=device-width" , initial-scale="1" />
    <meta charset="UTF-8">
    <title>List a Book</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top"
     style="margin-bottom: 0">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">BookShare</a>
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
    <h2 style="color:#685642">Write a new post</h2>
    <br/>
    <div class="well well-sm" style="background-color:#B7C68B">
        <form action="dbCreatePost.php" method="POST">
            <div class="form-group">
                <label for="book-title">Book Title</label><br />
                <input type="text" name="book-title" id="book-title"  placeholder="Book Title" required>
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN</label><br />
                <input type="text" name="isbn" id="isbn" placeholder="ISBN" required>
            </div>
            <div class="form-group">
                <label for="author">Author(s)</label><br />
                <input type="text" name="author" id="author" placeholder="Author(s)" required>
            </div>
            <div class="form-group">
                <label for="post-description">Description:</label><br />
                <textarea rows="4" cols="50" placeholder="Type any extra information here" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="contact-info">Your Email:</label><br/>
                <input type="text" name="contact-info" id="contact-info" placeholder="Type email here" required>
            </div>
            <input type="submit" name="submit-post" id="createPost" class="btn btn-warning" value="Submit Posting">
            </div>
        </form>
</div>
</body>
</html>