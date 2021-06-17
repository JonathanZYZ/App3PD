<?php
session_start();
include("dbFunctions.php");

$queryCat = "select distinct category_id as catID, story_categories.name as catName
    from stories, story_categories
    where stories.category_id = story_categories.id";

$resultCat = mysqli_query($link, $queryCat);
$numCat = mysqli_num_rows($resultCat);

while ($rowCat = mysqli_fetch_array($resultCat)) {
    $arrCat[] = $rowCat;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Story Teller: Story Summary</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
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
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <h3>Story Teller: Story Summary</h3>
        There are <?php echo $numCat; ?> categories in total
        <br/><br/>

<?php
for ($j = 0; $j < count($arrCat); $j++) {
    $catID = $arrCat[$j]['catID'];

    $queryStory = "select * from stories 
                where category_id = $catID";

    $queryStory .= " order by created_on desc";
    
    $resultStory = mysqli_query($link, $queryStory);
    $numStory = mysqli_num_rows($resultStory);

    echo "<b>";
    echo $arrCat[$j]['catName'] . ":";
    echo "</b>";
    
    echo " " . $numStory . " stories";
    echo "<br/>";
    echo "<br/>";
}
?>
    </body>
</html>