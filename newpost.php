<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway"
          rel="stylesheet">
    <script src="./js/jquery-3.2.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/newpost.js"></script>
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

    <div class="form-group">
        <label for="book-title">Book Title</label><br /> <input type="text"
                                                                name="book-title" id="book-title" placeholder="Book Title">
    </div>
    <div class="form-group">
        <label for="ISBN">ISBN</label><br /> <input type="text" name="isbn"
                                                    id="isbn" placeholder="ISBN">
    </div>
    <div class="form-group">
        <label for="author">Author(s)</label><br /> <input type="text"
                                                           name="author" id="author" placeholder="Author(s)">
    </div>
    <div class="form-group">
        <label for="edition">Edition</label><br /> <input type="text"
                                                          name="edition" id="edition" placeholder="Edition">
    </div>
    <div class="form-group">
        <label for="post-description">Other Information:</label><br /> <input
            type="text" name="post-description" id="post-description"
            placeholder="Other Information: ">
    </div>
    <div class="form-group">
        <label for="contact-info">Contact Info:</label><br/>
        <input type="text" name="contact-info" id="contact-info" placeholder="Contact Info:">
    </div>
    <input type="submit" name="submit-post" id="createPost" class="btn btn-warning"
           value="Submit Posting">
</div>
</body>
</html>