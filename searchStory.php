<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Book Publisher - Search for Books</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include ("navbar.php"); ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <h2>SBook Publisher - Search for Books</h2>
        <form action="doSearchStory.php" method="post">
            <label>&nbsp;Book content contains:</label>
            <input type="text" name="content" style="width:250px" required/>
            <br/>
            <input type="submit" value="Search for Stories"/>
        </form>
    </body>
</html>
