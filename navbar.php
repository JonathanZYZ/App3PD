<script src="js/navbar.js" type="text/javascript"></script>
<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <a class="navbar-brand" href="index.php"><strong>Book Publisher <i class="fa fa-book-open" aria-hidden="true"></i></strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Books
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="storyList.php">Book List</a>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <?php if ($_SESSION['role'] == "member") { ?>
                            <a class="dropdown-item" href="addStory.php">Add New Book</a>
                        <?php } else { ?>
                            <a class="dropdown-item" href="storySummary.php">Book Summary</a>
                        <?php } ?>
                    </div>
                </li>                    
                <li class="nav-item"> 
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php } ?>
            <li class="nav-item"> 
                <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
        </ul>
        <?php
        if (isset($_SESSION['user_id'])) {
            ?>
            <button class="fa fa-shopping-cart btnBuy btn btn-primary"  id="checkout"> Checkout <span class="badge badge-light" id="itemcount"></span> items</button>
            &nbsp;&nbsp;
            <div class='text-white'><i><?php echo "<i class='fa fa-user'></i> " . $_SESSION['full_name'] . " (" . $_SESSION['role'] . ")" ?></i></div>
            &nbsp;&nbsp;
            <form class="form-inline my-2 my-lg-0" method="post" action="doSearchStory.php">
                <div class="input-group">
                    <input type="text" name="content" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
        <?php }
        ?>
    </div>
</nav>
