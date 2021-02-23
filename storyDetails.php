<?php
session_start();
include("dbFunctions.php");

$id = $_GET['storyID'];
$query = "select s.title,sc.name,u.first_name,u.last_name,s.picture,s.content
from story_categories sc, stories s, users u
where sc.id = s.category_id
and u.id = s.author_id
and s.id=$id";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result); //there is only one record for the story

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Story Details</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Story Details</li>
        </ol>

        <div class="container">
            <h3><?php echo $row['title']; ?></h3>
            <div class="row">
                <div class="col-sm-6"><img src="images/<?php echo $row['picture']; ?>" class="img-rounded" style="width: 100%"/></div>
                <div class="col-sm-6">Category: <b><?php echo $row['name']; ?></b><br/>
                    Author: <b><?php echo $row['first_name'] . " " . $row['last_name']; ?></b><br/>
                    <br/>
                    <?php echo $row['content']; ?>
                </div>
            </div>
    </body>
</html>
