<?php session_start() ?>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="js/jquery-3.2.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <meta name="viewpoint" content="width=device-width", initial-scale="1"/>
    <meta charset="UTF-8">
    <title>Book Share Sample Site</title>
</head>
<body id="mainPageBody" style="font-family: 'Raleway'; background-color:#DED29E">
    $('#mainPageBody').html(
    <?php
        if(isset($_SESSION['user']) && isset($_SESSION['pw'])){
            echo "You are currently logged in.";
    }
    ?>);
    <!-- Navigation bar on top -->
    <!--@TODO Make header appear on mobile devices, fix weird nav menu on smaller screens. -->
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
        </div>
    </nav>
    <!-- Header for main page -->
    <div style="background-color: #B3A580; color: #685642; text-align:center" class="jumbotron">
        <h1>BookShare.</h1>
        <h4>Share books, make money</h4>
        <br/>
            <div id="loginForm">
                <form action="dbConnect.php" method="POST">
                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Username" name="username" required>
                         <br/><br/>
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Password" name="password" required>
                        <br/><br/>
                        <button type="submit" class="btn btn-warning">Login</button>
                        <br/><br/>
                        <a href="register.html"><button type="button" class="btn btn-warning" style="font-size:9px">Don't have a Login? Register Here</button></a>
                    </div>
                </form>
            </div>
        </div>


    <br/>
    <!-- "How to" Sections on main page -->
    <div class="row">
        <div class="col-md-6" style="text-align:center">
            <div class="well" style="background-color:#B7C68B">
                <h4><b>How to list a book for rent:</b></h4>
                <p>Step 1: Create a free BookShare account.</p>
                <p>Step 2: Create your profile for everyone to see</p>
                <p>Step 3: Click on "List a Book" to fill in details for the book you want to share.</p>
            </div>
        </div>
        <div class="col-md-6" style="text-align:center">
            <div class="well" style="background-color:#B7C68B">
                <h4><b>How to rent a book from others:</b></h4>
                <p>Step 1: Click on "Available Books" to see a list of books registered by other students.</p>
                <p>Step 2: Create a free BookShare account.</p>
                <p>Step 3: Message the student in order to set up a time and date to pick up the book.</p>
            </div>
        </div>

    </div>



</body>
</html>