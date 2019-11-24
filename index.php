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
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP | เครื่องสำอางค์</title>

    <!-- COMMON TAGS -->
    <!-- Search Engine -->
    <meta name="description"
        content="ช้อปออนไลน์ สุดยอดสินค้าขายดี แบรนด์ดังเพียบ ของแท้ 100% เช็คโปรโมชั่น เมคอัพ สุดคุ้ม อัพเดทเทรนใหม่ก่อนใคร เฉพาะที่นี่ที่เดียว ออนไลน์">
    <meta name="keywords" content="เครื่องสำอางค์, เมคอัพ">
    <meta name="title" content="ขายเครื่องสำอางค์ รีวิวเครื่องสำอางค์">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Panyafuang">
    <meta name="image"
        content="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="TP | เครื่องสำอางค์">
    <meta itemprop="description"
        content="ช้อปออนไลน์ สุดยอดสินค้าขายดี แบรนด์ดังเพียบ ของแท้ 100% เช็คโปรโมชั่น เมคอัพ สุดคุ้ม อัพเดทเทรนใหม่ก่อนใคร เฉพาะที่นี่ที่เดียว ออนไลน์">
    <meta itemprop="image"
        content="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="TP | เครื่องสำอางค์">
    <meta name="og:description"
        content="ช้อปออนไลน์ สุดยอดสินค้าขายดี แบรนด์ดังเพียบ ของแท้ 100% เช็คโปรโมชั่น เมคอัพ สุดคุ้ม อัพเดทเทรนใหม่ก่อนใคร เฉพาะที่นี่ที่เดียว ออนไลน์">
    <meta name="og:image"
        content="https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
    <meta name="og:url" content="https://blog-1706d.web.app/">
    <meta name="og:site_name" content="https://blog-1706d.web.app/">
    <meta name="og:type" content="website">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


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
    <section id="jumbotron" class="jumbotron jumbotron-fluid">
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
</body>
</html>