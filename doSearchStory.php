<?php
session_start();

include("dbFunctions.php");

$searchContent = $_POST['content'];
$querySearch = "SELECT * FROM stories
                    WHERE content like '%$searchContent%'";

$resultSearch = mysqli_query($link, $querySearch);
$searchResult = mysqli_num_rows($resultSearch);

while ($rowSearch = mysqli_fetch_array($resultSearch)) {
    $arrSearch[] = $rowSearch;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Book Publisher - Search Book</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include ("navbar.php"); ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Search Story</li>
        </ol>
        <div class="container">
        <h2>Book Publisher - Search Book</h2>
        Content contains: <b><?php echo $searchContent; ?></b>

        <?php if ($searchResult > 0) { ?>
            <table class="table table-hover">
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
                <?php
                for ($i = 0; $i < count($arrSearch); $i++) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $arrSearch[$i]['title']; ?>
                        </td>
                        <td><?php echo $arrSearch[$i]['content']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <h4>There are no matching record</h4>
        <?php } ?>
              </div>
    </body>
</html>
