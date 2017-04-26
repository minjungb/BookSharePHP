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
    <div class="well well-sm" style="background-color:#B7C68B">
        <h2 style="color:#685642">Welcome to BookShare, <?php echo " {$_SESSION['user']} " ?> !</h2></div>
    <br/>
    <h3 style="color:#685642">Who would you like to leave a review for?</h3><br/><br/>
    <div class="rating">
        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
    </div>

    <form id="reviewForm" action="dbReview.php" method="POST">
    <input type="textbox" name="reviewUsername" placeholder="Enter username here" required/><br/><br/>
        <span id="leaveReview">
            Enter Rating (1= bad, 5= excellent)<br/>
            <input type="number" name="rating" min="1" max="5" required/>
        </span>
        <br/><br/>
        <input type="submit" name="submit-post" id="createPost" class="btn btn-warning" value="Submit Review">
    </form>






</div>

</body>
</html>