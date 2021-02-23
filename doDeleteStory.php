<?php
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

//retrieve id from the hidden form field of the previous page (index.php)
$theID = $_GET['id'];

$msg = "";

//build a query to delete a specific record based on id
$queryDelete = "DELETE FROM stories
                WHERE id = $theID";
$status = mysqli_query($link, $queryDelete) or die(mysqli_error($link));

if ($status) {
    $message = "<p>Story has been deleted.<br/>";
    $message .= "<a href='index.php'>Back</a></p>";
} else {
    $message = "<p>Story delete failed.</p>";
}
mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Delete Story</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php         include("navbar.php"); ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <h3>Story Teller - Delete Story</h3>
        <p>
            <?php echo $message; ?>
        </p>
    </body>
</html>