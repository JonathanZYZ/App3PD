<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Publisher: About Us</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link href="css/test.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .box-circle-solid{
                background-color:#35CBDF;
                border-radius: 50%;
                color: #fff;
                font-size: 22px;
                height: 55px;
                line-height: 55px;
                text-align: center;
                width: 55px;
            }

        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
        </ol>

        <div class="container">
            <div class="text-center">
                <h2>Who We Are</h2>
                <h6>This is information panel</h6>
            </div>
            <div class="mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center p-lg-3">
                            <i class="fa fa-laptop box-circle-solid mt-3 mb-3" aria-hidden="true"></i>
                            <h3>Responsive Design</h3>
                            <p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center p-lg-3">
                            <i class="fa fa-calendar box-circle-solid mt-3 mb-3" aria-hidden="true"></i>
                            <h3>Integrated Calendar</h3>
                            <p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center p-lg-3">
                            <i class="fa fa-bug box-circle-solid mt-3 mb-3" aria-hidden="true"></i>
                            <h3>Bug Free Solutions</h3>
                            <p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center p-lg-3">
                            <i class="fa fa-cloud-upload-alt box-circle-solid mt-3 mb-3" aria-hidden="true"></i>
                            <h3>Cloud Storage</h3>
                            <p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center p-lg-3">
                            <i class="fa fa-gem box-circle-solid mt-3 mb-3" aria-hidden="true"></i>
                            <h3>Premium Features</h3>
                            <p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center p-lg-3">
                            <i class="fa fa-comments box-circle-solid mt-3 mb-3" aria-hidden="true"></i>
                            <h3>24/7 Support</h3>
                            <p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
