<?php
    require_once('php/connect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM articles WHERE id = '".$id."' AND `status` = 'true' ";
        $result = $conn->query($sql) or die($conn->error);

        // Check having any data ?
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
        }else{
            header('Location: blog.php');
        }
    

    //
    // ─── QUERY FOR OWL CAROUSEL ─────────────────────────────────────────────────────
    //

        // Show random data
        $sql_owl = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
        $result_owl = $conn->query($sql_owl) or die($conn->error);

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['subject'];?></title>

    <!-- COMMON TAGS -->
    <!-- Search Engine -->
    <meta name="description" content="<?php echo $row['sub_title'];?>">
    <meta name="keywords" content="เครื่องสำอางค์, เมคอัพ">
    <meta name="robots" content="index, nofollow">
    <meta name="web_author" content="surinstudio">
    <meta name="image" content="https://surinstudio.com/demo/<?php echo $base_path_blog.$row['image'];?>">

<!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="fb:app_id" content="429847841295587" />
    <meta property="og:title" content="<?php echo $row['subject'];?>">
    <meta property="og:description" content="<?php echo $row['sub_title'];?>">
    <meta property="og:image" content="https://surinstudio.com/demo/<?php echo $base_path_blog.$row['image'];?>">
    <meta property="og:url" content="https://surinstudio.com/demo/blog-detail.php?id=<?php echo $id; ?>"> <!-- Path website -->
    <meta property="og:site_name" content="https://surinstudio.com"> <!-- Domain name -->
    <meta property="og:type" content="website">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta property="msapplication-TileColor" content="#da532c">
    <meta property="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta property="theme-color" content="#ffffff">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- NAV -->
    <?php include_once('includes/navbar.php'); ?>

    <!-- SECTION: PAGE TITLE -->
    <header class="jarallax" 
        data-jarallax='{ "speed": 0.5 }'
        style="
            background: url('<?php echo $base_path_blog.$row['image'];?>');
            background-size: cover;
            ">
            <div class="blog-image">
                <h1 class="display-4 brand-text"><?php echo $row['subject'];?></h1>
                <p class="lead"><?php echo $row['sub_title'];?></p>
            </div>
    </header>

    <!-- SETCTION: BLOGS DETAIL -->
    <section class="container blog-content">
        <div class="row">
            <!-- Show detail -->
            <div class="col-12">
                <?php echo $row['detail']; ?>
            </div>
            <!-- Date created -->
            <div class="col-12 text-right">
                <hr>
                <p class="text-muted"><?php echo date_format(new DateTime($row['updated_at']), "j F Y"); ?></p>
                <div class="pw-server-widget" data-id="wid-db6fpslc"></div>
            </div>
            <!-- Owl carousel -->
            <div class="col-12">
                <div class="owl-carousel owl-theme">

                    <?php  while($row_owl = $result_owl->fetch_assoc()): ?>
                        <section class="col-12 p-2">
                            <div class="card h-100">
                                <a href="blog-detail.php?id=<?php echo $row_owl['id'];?>" class="warpper-card-img">
                                    <img src="<?php echo $base_path_blog.$row_owl['image']; ?>" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($row_owl['subject']);?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row_owl['sub_title']);?></p>
                                </div>
                                <div class="p-3">
                                    <a href="blog-detail.php?id=<?php echo $row_owl['id'];?>"class="btn btn-block my-btn">อ่านเพิ่มเติม...</a>
                                </div>
                            </div>
                        </section>
                    <?php endwhile; ?>

                </div>
            </div>
            <!-- Facebook Comment -->
            <div class="col-12">
                <div class="fb-comments" data-href="http://localhost/phpFun/projects/blog/blog-detail.php?id_owlboss=<?php echo $row['id'];?>" data-width="100%"
                data-numposts="5">
                </div>
                <div id="fb-root"></div>
            </div>
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
    <!-- Bootstrap js -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Popper.js -->
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d8ef0f1bbc.js" crossorigin="anonymous"></script>
    <!-- Jarallax -->
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <!-- Owl carousel -->
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- Facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v5.0">
    </script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>

    <script>

        //
        // ─── OWL CAROUSEL ───────────────────────────────────────────────────────────────
        //

        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
            loop: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                }
            }
            });
        });

        (function () {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i') +
                '.po.st/static/v4/post-widget.js#publisherKey=rglpna5sudm3ipt4v6rk';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
</body>

</html>