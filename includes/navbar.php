<?php
    $pathName = basename($_SERVER['SCRIPT_FILENAME'], '.php');



?>
<nav class="navbar navbar-expand-lg navbar-dark bg-alpha fixed-top navExpand">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" width="35px" height="35px" class="d-inline-block align-top">
                &nbsp;Panyafuang
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item <?php echo $pathName == 'index' ? 'active' : '';?> ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'shop' ? 'active' : '';?>">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'blog' || $pathName == 'blog-detail' ? 'active' : '';?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'about' ? 'active' : '';?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'contact' ? 'active' : '';?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>