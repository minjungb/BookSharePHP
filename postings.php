<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="./js/jquery-3.2.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/post.js"></script>
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
            <a class="navbar-brand" href="index.php">BookShare</a>
        </div>

        <!--@TODO Replace # with links to appropriate pages-->
        <ul class="nav navbar-nav navbar-left">
            <li><a href="postings.php">Available Books</a></li>
            <li><a href="newpost.php">List a Book</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Login</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="content">
    <h3>Book Postings:</h3>
    <div id="postings"></div>
</div>

</body>
</html>