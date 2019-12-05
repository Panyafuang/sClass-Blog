<?php
    require_once('php/connect.php');

    // Show data order by new
    $sql = "SELECT * FROM( SELECT * FROM `articles` WHERE `status` = 'true' ) AS article ORDER BY id DESC LIMIT 6";
    $result = $conn->query($sql);

    // Check error
    if(!$result){
        header('Location: blog.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--number-based width or "device-width"-->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SS | ขายเครื่องสำอางค์</title>

    <!-- Meta tag -->
    <?php include_once('includes/meta.php'); ?>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- NAV -->
    <?php include_once('includes/navbar.php'); ?>

    <!-- SECTION: CAROUSEL -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- carousel image -->
                <div class="carousel-img" style="background-image: url('assets/images/carousel1.jpg');">
                <!-- carousel caption -->
                <div class="carousel-caption">
                    <h1 class="display-1 brand-text">caption one</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, esse!</p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- carousel image -->
                <div class="carousel-img" style="background-image: url('assets/images/carousel2.jpg');">
                <!-- carousel caption -->
                <div class="carousel-caption">
                    <h1 class="display-1 brand-text">caption two</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, esse!</p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- carousel image -->
                <div class="carousel-img" style="background-image: url('assets/images/carousel3.jpg');">
                <!-- carousel caption -->
                <div class="carousel-caption">
                    <h1 class="display-1 brand-text">caption three</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, esse!</p>
                </div>
                </div>
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
    </section>

    <!-- SECTION: JUMBORTRON -->
    <section id="jumbotron" class="jumbotron jumbotron-fluid my-jumbortron">
        <div class="container text-center">
            <h2 class="big-title" data-title="specialize in">specialize in</h2>
            <div class="row">
                <div class="col-12 col-md-4 py-4">
                    <i class="fas fa-people-carry fa-4x mb-3"></i>
                    <h3>guarantee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus inventore, nesciunt quidem qui quasi enim eaque nemo quod ipsam maiores.</p>
                </div>
                <div class="col-12 col-md-4 py-4">
                    <i class="fas fa-shipping-fast fa-4x mb-3"></i>
                    <h3>shipping fast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus inventore, nesciunt quidem qui quasi enim eaque nemo quod ipsam maiores.</p>
                </div>
                <div class="col-12 col-md-4 py-4">
                    <i class="fas fa-money-check-alt fa-4x mb-3"></i>
                    <h3>low-priced</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus inventore, nesciunt quidem qui quasi enim eaque nemo quod ipsam maiores.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: BLOG -->
    <section id="blog" class="container py-5">
            <h2 class="big-title text-center" data-title="blog">blog</h2>
            <div class="row">
            <?php while($row = $result->fetch_assoc()): ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100 shadow-sm">
                        <a href="blog-detail.php?id=<?php echo $row['id'];?>" class="warpper-card-img">
                            <img src="<?php echo $base_path_blog.$row['image'];?>" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['subject']);?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($row['sub_title']);?></p>
                        </div>
                        <div class="p-3">
                            <a href="blog-detail.php" class="btn btn-block my-btn">อ่านเพิ่มเติม...</a>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
            </div>
    </section>

    <!-- SECTION: FOOTER -->
    <?php include_once('includes/footer.php'); ?>

    <!-- Facebook chat -->
    <div class="fb-customerchat"
        page_id="100351208127571" theme_color="#e8b923">
    </div>
    <!-- SECTION: TO TOP -->
    <div class="to-top" id="scrollme">
        <i class="fas fa-angle-up"></i>
    </div>

    <!-- jQuery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d8ef0f1bbc.js" crossorigin="anonymous"></script>
    <!-- Jarallax -->
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>

<!-- facebook chat -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId            : '429847841295587',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v5.0'
            });
        };
        </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
</body>
</html>