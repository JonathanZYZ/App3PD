<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Story Teller - Register</title>
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
            <li class="breadcrumb-item active">Register</li>
        </ol>
        <div class="container">
            <h3>Story Teller - Register</h3>
            <form name="myForm" method="post" action="doRegister.php" class="form-horizontal">
                <div class="form-group">
                    <label for="idFirstname">First Name: </label>
                    <input name="firstname" type="text" id="idFirstname" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="idLastname">Last Name: </label>
                    <input name="lastname" type="text" id="idLastname" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="idEmail">Email: </label>
                    <input name="email" type="text" id="idEmail" class="form-control" required/>
                </div>
                <hr />
                <div class="form-group">
                    <label for="idUsername">Username: </label>
                    <input name="username" type="text" id="idUsername" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="idPassword">Password: </label>
                    <input name="password" type="password" id="idPassword" class="form-control" required/>
                </div>
                <input value="Register" type="submit" class="btn btn-info btn-block">
                <input value="Reset" type="reset" class="btn btn-default btn-block">
            </form>
        </div>
    </body>
</html>
