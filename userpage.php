<?php include('dbConnect.php') ?>
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

        <!--@TODO Replace # with links to appropriate pages-->
        <ul class="nav navbar-nav navbar-left">
            <li><a href="postings.php">Available Books</a></li>
            <li><a href="newpost.php">List a Book</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="register.html">Register</a></li>
            <li><a href="index.html">Login</a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid" id="content">
    <h2>Welcome to BookShare, <?php echo " {$_SESSION['user']} " ?> !</h2>
    <br/>
    <div class="row">
        <div class="col-md-6">
            <form action="postings.html">
                <input class="btn-success" type="submit" value="View current postings" style="width:300px; height:100px"/>
            </form>
        </div>

        <div class="col-md-6">
            <form action="newpost.html">
                <input class="btn-success" type="submit" value="Create a Post" style="width:300px; height:100px"/>
            </form>
        </div>
    </div>



</div>

</body>
</html>