<?php
session_start();
include("dbFunctions.php");

$message = "";

$targetPath = "images/";

//TODO: modify the following code to store the name of the image file into variable $fileName
$fileName = basename($_FILES['image']['name']);

//TODO: modify the following code to store the intended complete path to store the image file into variable $completePath
$completePath = $targetPath . $fileName;

if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['price'])) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $completePath)) {
        $messageFile = "The file " . $fileName . " has been uploaded";
        $title = $_POST['title'];
        $content = $_POST['content'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        $created_on = date('Y-m-d h:i:s');

        $auth_id = $_SESSION['user_id'];

        $insertQuery = "INSERT INTO stories(title, content, category_id, 
                author_id, created_on, picture, price) 
                VALUES  
                ('$title','$content',$category_id,$auth_id,
                '$created_on','$fileName', '$price')";
        //echo $insertQuery;
        $status = mysqli_query($link, $insertQuery) or die(mysqli_error($link));

        if ($status) {
            $message = "Story posted successfully.<br />";
        } else {
            $message = "Story post failed.<br />";
            $message .= "<a href='addStory.php'>Try Again.</a>";
        }
    } else {
        $messageFile = "File upload failed";
        $message = "";
    }
} else {
    $message = "All story details have to be provided.<br />";
    $message .= "<a href='addStory.php'>Try Again.</a>";
    $messageFile = "";
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller II</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
          <?php         include("navbar.php"); ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Add Story</li>
        </ol>
        <?php echo $messageFile; ?>
        <br/>
        <?php echo $message; ?>
    </body>
</html>