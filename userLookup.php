<?php
if(!isset($_SESSION)){
    session_start();
}
include('dbConnect.php')
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
    <br/>
    <h3 style="color:#685642">User Lookup</h3><br/><br/>
    <p>Enter a username to look up the rating of that user!</p>
    <form id="userLookup" action="lookup.php" method="POST">
        <input type="textbox" name="lookup" placeholder="Enter username here" required/><br/><br/>
        <br/>
        <input type="submit" name="submit-post" id="createPost" class="btn btn-warning" value="Submit">
    </form>






</div>

</body>
</html>