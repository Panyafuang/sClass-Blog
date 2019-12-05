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
                <div class="col-12 text-center">
                    <h1 class="display-2 brand-text">about us</h1>
                    <p class="lead">Fugiat iure blanditiis nihil consequuntur quibusdam recusandae sequi quaerat veritatis,</p>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION: TODO -->
    <section>
        <div class="row">
            <!-- VIDEO SECTION -->
            <div id="video-play" class="col-lg-5 col-md-6 vdo-about">
                <div class="vdo-wrapper">
                    <a href="#" class="video" data-video="https://www.youtube.com/embed/DRlheEbsM5U"
                        data-toggle="modal" data-target="#videoModal">
                        <i class="fas fa-play fa-5x"></i>
                    </a>
                    <h3 class="pt-3">See What We Do</h3>
                </div>
            </div>
            <!-- VIDEO MODAL -->
            <div class="modal fade" id="videoModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                            <iframe src="" frameborder="0" width="100%" height="350px"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-7 col-md-6 p-5 content-about">
                <h3 class="display-4 brand-text">online</h3>
                <h3 class="display-4 brand-text">fashion shop</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita excepturi corrupti totam voluptates sunt ea officiis nihil nemo natus nostrum rerum in odit necessitatibus minus, itaque nobis ipsum sed et? Delectus quae blanditiis, impedit quod consequuntur</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sit, odio pariatur praesentium libero odit excepturi iure incidunt atque quo omnis, architecto adipisci similique suscipit, natus sint aliquid consequatur saepe.</p>
            </div>
        </div>
    </section>

     <!-- SECTION: TIMELINE -->
     <section class="jarallax timeline-title position-relative p-5 page-title" data-jarallax='{ "speed": 0.5 }'
         style="background-image: url('assets/images/title2.jpg');">
         <div class="container">
             <div class="row">
                 <div class="col-12 text-center">
                     <h1 class="display-2 brand-text">Time line about us</h1>
                 </div>
             </div>
         </div>
     </section>
     <section class="container py-5">
         <div class="row">
             <div class="col-12">
                 <ul class="timeline">
                     <li>
                         <div class="timeline-badge">
                             <p>March 2010</p>
                        </div>
                         <div class="timeline-card">
                             <h5>Establish</h5>
                             <p class="text-muted">2 December 2010 Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio natus, velit ipsum.</p>
                         </div>
                     </li>
                     <li class="inverted">
                         <div class="timeline-badge">
                             <p>July 2013</p>
                        </div>
                         <div class="timeline-card">
                             <h5>7 branches</h5>
                             <p class="text-muted">9 July 2011 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, beatae!</p>
                         </div>
                     </li>
                     <li>
                         <div class="timeline-badge">
                             <p>August 2015</p>
                        </div>
                         <div class="timeline-card">
                             <h5>More then 17 branches</h5>
                             <p class="text-muted">7 March 2013 Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                         </div>
                     </li>
                     <li class="inverted">
                         <div class="timeline-badge">
                             <p>December 2018 - Present</p>
                        </div>
                         <div class="timeline-card">
                             <h5>Online shopping</h5>
                             <p class="text-muted">11 August 2017 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate saepe facilis officiis ullam sequi deserunt minima hic, maiores error. In.</p>
                         </div>
                     </li>
                     <li class="timeline-arrow">
                         <i class="fas fa-chevron-down fa-2x"></i>
                     </li>
                 </ul>
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
    <!-- main.js -->
    <script src="assets/js/main.js"></script>

    <script>
        $(function () {
        // Auto play modal video
            $(".video").click(function () {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-video"),
                    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                    $(theModal + ' iframe').attr('src', videoSRCauto);
                    $(theModal + ' button.close').click(function () {
                        $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        });
    </script>
</body>

</html>