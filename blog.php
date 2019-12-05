<?php
    require_once('php/connect.php');

    // Check tag
    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';

    // Find data in tb articles
    $sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true' ";
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

    <!-- SECTION: PAGE TITLE -->
    <header class="jarallax page-title" data-jarallax='{ "speed": 0.5 }' style="background-image: url('assets/images/the-honest-company-wf7h0NmE1TM-unsplash.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center page-title-inner">
                    <h1 class="display-2 brand-text">Blogs</h1>
                    <p class="lead">Fugiat iure blanditiis nihil consequuntur quibusdam recusandae sequi quaerat veritatis,</p>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION: BLOG -->
    <section class="container py-5">
        <!-- Menu bottom -->
        <div class="row pb-4">
            <div class="col-12">
                <div class="my-btn-group text-center">
                    <a href="blog.php?tag=all">
                        <button class="btn my-btn <?php echo $tag == 'all' ? 'my-btn-active' : '' ;?>">All</button>
                    </a>
                    <a href="blog.php?tag=eyebrow">
                        <button class="btn my-btn <?php echo $tag == 'eyebrow' ? 'my-btn-active' : '' ;?>">Eyebrow</button>
                    </a>
                    <a href="blog.php?tag=eyeliner">
                        <button class="btn my-btn <?php echo $tag == 'eyeliner' ? 'my-btn-active' : '' ;?>">Eyeliner</button>
                    </a>
                    <a href="blog.php?tag=lips">
                        <button class="btn my-btn <?php echo $tag == 'lips' ? 'my-btn-active' : '' ;?>">Lips</button>
                    </a>
                    <a href="blog.php?tag=waxing">
                        <button class="btn my-btn <?php echo $tag == 'waxing' ? 'my-btn-active' : '' ;?>">Waxing</button>
                    </a>
                    <a href="blog.php?tag=makeup">
                        <button class="btn my-btn <?php echo $tag == 'makeup' ? 'my-btn-active' : '' ;?>">Makeup</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Show blogs -->
        <div class="row">
            <?php 
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()): 
            ?>
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
                            <a href="blog-detail.php?id=<?php echo $row['id'];?>" class="btn btn-block my-btn">อ่านเพิ่มเติม...</a>
                        </div>
                    </div>
                </section>
            <?php 
                    endwhile;
                }else{
            ?>
                <!-- No blogs -->
                <section class="col-12">
                    <p class="text-center">ไม่มีข้อมูล</p>
                </section>
            <?php 
                    } 
            ?>

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
    <!-- main.js -->
    <script src="assets/js/main.js"></script>
</body>

</html>