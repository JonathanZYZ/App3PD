<?php
session_start();
include("dbFunctions.php");
$pageTitle = "Story List";

$query = "select * from stories where category_id=1";
$result = mysqli_query($link, $query);

$arrFriends = array();
while ($row = mysqli_fetch_array($result)) {
    $arrFriends[] = $row;
}

$query = "select * from stories where category_id=2";
$result = mysqli_query($link, $query);

$arrExploration = array();
while ($row = mysqli_fetch_array($result)) {
    $arrExploration[] = $row;
}

$query = "select * from stories where category_id=3";
$result = mysqli_query($link, $query);

$arrKindness = array();
while ($row = mysqli_fetch_array($result)) {
    $arrKindness[] = $row;
}

$query = "select * from stories where category_id=4";
$result = mysqli_query($link, $query);

$arrOverflowing = array();
while ($row = mysqli_fetch_array($result)) {
    $arrOverflowing[] = $row;
}

$query = "select * from stories where category_id=5";
$result = mysqli_query($link, $query);

$arrShiny = array();
while ($row = mysqli_fetch_array($result)) {
    $arrShiny[] = $row;
}

$query = "select * from stories where category_id=6";
$result = mysqli_query($link, $query);

$arrLearning = array();
while ($row = mysqli_fetch_array($result)) {
    $arrLearning[] = $row;
}
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
            <li class="breadcrumb-item active">Book Publisher</li>
        </ol>
        <div class="container">
            <h3>Book Publisher: Book List</h3>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#friends" data-toggle="tab">Action</a></li>
                <li class="nav-item"><a class="nav-link" href="#exploration" data-toggle="tab">Fantasy</a></li>
                <li class="nav-item"><a class="nav-link" href="#kindness" data-toggle="tab">Adventure</a></li>
                <li class="nav-item"><a class="nav-link" href="#overflowing" data-toggle="tab">Horror</a></li>
                <li class="nav-item"><a class="nav-link" href="#shiny" data-toggle="tab">Romance</a></li>
                <li class="nav-item"><a class="nav-link" href="#learning" data-toggle="tab">Learning</a></li>
            </ul>
            <div class="tab-content">

                <div id="friends" class="tab-pane active">
                    <?php
                    for ($i = 0; $i < count($arrFriends); $i++) {
                        ?>
                        <div class="row">
                            <div class="col-md-4" ><a href="storyDetails.php?storyID=<?php echo $arrFriends[$i]['id'] ?>"><img class="img-thumbnail" style="width: 80%; height: 80%" src="images/<?php echo $arrFriends[$i]['picture'] ?>" alt="<?php echo $arrFriends[$i]['title'] ?>"> </a></div> 
                            <div class="col-md-8" > 
                                <h3><a href="storyDetails.php?storyID=<?php echo $arrFriends[$i]['id'] ?>"><?php echo $arrFriends[$i]['title'] ?></a></h3>
                                <p><?php echo $arrFriends[$i]['content'] ?></p>
                            </div> 
                        </div>
                    <?php } ?>
                </div>

                <div id="exploration" class="tab-pane">
                    <?php
                    for ($i = 0; $i < count($arrExploration); $i++) {
                        ?>
                        <div class="row">
                            <div class="col-md-4" ><a href="storyDetails.php?storyID=<?php echo $arrExploration[$i]['id'] ?>"><img class="img-thumbnail" style="width: 80%; height: 80%" src="images/<?php echo $arrExploration[$i]['picture'] ?>" alt="<?php echo $arrExploration[$i]['title'] ?>"> </a></div> 
                            <div class="col-md-8" > 
                                <h3><a href="storyDetails.php?storyID=<?php echo $arrExploration[$i]['id'] ?>"><?php echo $arrExploration[$i]['title'] ?></a></h3>
                                <p><?php echo $arrExploration[$i]['content'] ?></p>
                            </div> 
                        </div>
                    <?php } ?>
                </div>

                <div id="kindness" class="tab-pane">
                    <?php
                    for ($i = 0; $i < count($arrKindness); $i++) {
                        ?>
                        <div class="row">
                            <div class="col-md-4" ><a href="storyDetails.php?storyID=<?php echo $arrKindness[$i]['id'] ?>"><img class="img-thumbnail" style="width: 80%; height: 80%" src="images/<?php echo $arrKindness[$i]['picture'] ?>" alt="<?php echo $arrKindness[$i]['title'] ?>"> </a></div> 
                            <div class="col-md-8" > 
                                <h3><a href="storyDetails.php?storyID=<?php echo $arrKindness[$i]['id'] ?>"><?php echo $arrKindness[$i]['title'] ?></a></h3>
                                <p><?php echo $arrKindness[$i]['content'] ?></p>
                            </div> 
                        </div>
                    <?php } ?>
                </div>
                
                <div id="overflowing" class="tab-pane">
                    <?php
                    for ($i = 0; $i < count($arrOverflowing); $i++) {
                        ?>
                        <div class="row">
                            <div class="col-md-4" ><a href="storyDetails.php?storyID=<?php echo $arrOverflowing[$i]['id'] ?>"><img class="img-thumbnail" style="width: 80%; height: 80%" src="images/<?php echo $arrOverflowing[$i]['picture'] ?>" alt="<?php echo $arrOverflowing[$i]['title'] ?>"> </a></div> 
                            <div class="col-md-8" > 
                                <h3><a href="storyDetails.php?storyID=<?php echo $arrOverflowing[$i]['id'] ?>"><?php echo $arrOverflowing[$i]['title'] ?></a></h3>
                                <p><?php echo $arrOverflowing[$i]['content'] ?></p>
                            </div> 
                        </div>
                    <?php } ?>
                </div>
                
                <div id="shiny" class="tab-pane">
                    <?php
                    for ($i = 0; $i < count($arrShiny); $i++) {
                        ?>
                        <div class="row">
                            <div class="col-md-4" ><a href="storyDetails.php?storyID=<?php echo $arrShiny[$i]['id'] ?>"><img class="img-thumbnail" style="width: 80%; height: 80%" src="images/<?php echo $arrShiny[$i]['picture'] ?>" alt="<?php echo $arrShiny[$i]['title'] ?>"> </a></div> 
                            <div class="col-md-8" > 
                                <h3><a href="storyDetails.php?storyID=<?php echo $arrShiny[$i]['id'] ?>"><?php echo $arrShiny[$i]['title'] ?></a></h3>
                                <p><?php echo $arrShiny[$i]['content'] ?></p>
                            </div> 
                        </div>
                    <?php } ?>
                </div>
                
                <div id="learning" class="tab-pane">
                    <?php
                    for ($i = 0; $i < count($arrLearning); $i++) {
                        ?>
                        <div class="row">
                            <div class="col-md-4" ><a href="storyDetails.php?storyID=<?php echo $arrLearning[$i]['id'] ?>"><img class="img-thumbnail" style="width: 80%; height: 80%" src="images/<?php echo $arrLearning[$i]['picture'] ?>" alt="<?php echo $arrLearning[$i]['title'] ?>"> </a></div> 
                            <div class="col-md-8" > 
                                <h3><a href="storyDetails.php?storyID=<?php echo $arrLearning[$i]['id'] ?>"><?php echo $arrLearning[$i]['title'] ?></a></h3>
                                <p><?php echo $arrLearning[$i]['content'] ?></p>
                            </div> 
                        </div>
                    <?php } ?>
                </div>
            </div>
    </body>
</html>