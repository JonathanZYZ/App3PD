<?php
session_start();
include("dbFunctions.php");

$query = "select s.id, sc.name as cat_name, s.title, substring(s.content,1,100) as description, s.picture from story_categories sc, stories s where sc.id=s.category_id";
$result = mysqli_query($link, $query);

$arrResult = array();
while ($row = mysqli_fetch_array($result)) {
    $arrResult[] = $row;
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Publisher: Book List</title>
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
            <li class="breadcrumb-item active">Story List</li>
        </ol>
        <div class="container">
            <h3>Story Teller: Story List</h3>
            <div class="row">
                <?php
                for ($i = 0; $i < count($arrResult); $i++) {
                    ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <a href="storyDetails.php?storyID=<?php echo $arrResult[$i]['id'] ?>"><img class="img-fluid img-thumbnail" src="images/<?php echo $arrResult[$i]['picture'] ?>" alt="<?php echo $arrStory[$i]['title'] ?>"> </a>
                            </div>
                            <div class="card-footer text-center h-20">
                                <h5><?php echo $arrResult[$i]['title'] ?></h5>
                                <p><?php echo $arrResult[$i]['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>