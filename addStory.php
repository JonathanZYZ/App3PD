<?php
session_start();
include("dbFunctions.php");
$pageTitle = "Add New Book";
if (!isset($_SESSION['username'])) {
    echo "You have not logged in.<br/>";
    echo "Please <a href='login.php'>login</a>.";
    exit;
}

$queryCat = "SELECT * FROM story_categories";
$resultCat = mysqli_query($link, $queryCat) or
        die(mysqli_error($link));

while ($rowCat = mysqli_fetch_array($resultCat)) {
    $arrCat[] = $rowCat;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Publisher - <?php echo $pageTitle ?></title>
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
            <li class="breadcrumb-item active">Add Story</li>
        </ol>
        <div class="container">
            <h3>Book Publisher - <?php echo $pageTitle ?></h3>
            <form action="doAddStory.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="idTitle">Title:</label>         
                    <input id="idTitle" class="form-control" name="title" required>   
                </div>
                <div class="form-group">
                    <label for="idCatId">Category:</label>
                    <select class="form-control" name="category_id" id="idCatId">
                        <?php
                        for ($i = 0; $i < count($arrCat); $i++) {
                            $catTitle = $arrCat[$i]['name'];
                            $catID = $arrCat[$i]['id'];
                            echo "<option value='$catID'>$catTitle</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idContent">Content:</label>
                    <textarea class="form-control" name="content" rows="8" cols="70" required></textarea>
                </div>
                <div class="form-group">
                    <label for="idContent">Price:</label>
                    <input id="idPrice" class="form-control" name="price" required> 
                </div>
                <div class="form-group">
                    <label for="idImage">Image:</label>
                    <input type="file" class="form-control" name="image" id="idImage" required>
                </div>

                <input type="submit" class="btn btn-info" value="Add Story"/>
                <input type="reset" class="btn btn-default" value="Clear"/>
        </div>
    </form>    

</div>
</body>
</html>