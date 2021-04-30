<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Publisher: Contact Us</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body  style="background-color:#E6E6EA">
        <?php
        include("navbar.php");
        ?>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>

        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-md-6 col-lg-6 mt-md-0 pl-5 pt-4">
                    <div class="mb-5 pl-5 mt-2">
                        <h2 class="text-dark">Contact Us</h2>
                        <h5 class="text-dark">This is information panel</h5>
                    </div>
                    <ul class="text-dark pl-5 fa-ul">
                        <li class='mb-3'><span class="fa-li"><i class="fa fa-home" aria-hidden="true"></i></span>Company Location</li>
                        <li class='mb-3'><span class="fa-li"><i class="fa fa-envelope" aria-hidden="true"></i></span>info@example.com</li>
                        <li class='mb-3'><span class="fa-li"><i class="fa fa-phone" aria-hidden="true"></i></span>+65 12345678</li>
                        <li class='mb-3'><span class="fa-li"><i class="fa fa-fax" aria-hidden="true"></i></span>+65 87654321</li>
                    </ul>
                </div>
                <div class="col-md-6 p-0 m-0">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085" class="img-fluid">
                </div>
            </div>
        </div>
    </body>
</html>