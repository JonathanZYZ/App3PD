<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Publisher: Our Books</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .carousel-inner{
                width:100%;
                  max-height: 100%;
            }

        </style>
    </head>
    <body style="background-color:#FED766">
        <?php
        include("navbar.php");
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/maxresdefault.jpg" alt="First slide" style="height: 100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/5c74358a1631a3614f2df5b4.jpg" alt="Second slide" style="height: 100%">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/5c0ad7c045972a242a429018.jpg" alt="Third slide" style="height: 100%">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
<!--<blockquote class="blockquote float-right">
  <p class="mb-0">If history were taught in the form of stories, it would never be forgotten.</p>
  <footer class="blockquote-footer"><cite title="Source Title">Rudyard Kipling, The Collected Works</cite></footer>
</blockquote>-->

    </body>
</html>