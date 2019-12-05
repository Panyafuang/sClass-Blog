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
    <header class="jarallax page-title" data-jarallax='{ "speed": 0.5 }'
        style="background-image: url('assets/images/the-honest-company-wf7h0NmE1TM-unsplash.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center page-title-inner">
                    <h1 class="display-2 brand-text">Contect Us</h1>
                    <p class="lead">SURINSTUDIO</p>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION: CONTACT -->
    <section class="container contact py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="big-title text-center" data-title="รายละเอียด">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-map-marker-alt fa-3x py-2"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">สุรินทร์ อ.เมือง ต.ในเมือง</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-phone-alt fa-3x py-2"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p class="card-text">(+66)89-9999999</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-envelope fa-3x py-2"></i>
                        <h4 class="card-title">อีเมล์</h4>
                        <p class="card-text">example@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">แบบฟอร์มติดต่อเรา</h5>
                        <form action="php/contact.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อของคุณ" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมล์</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="example@gmali.com" required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="message">ข้อความของคุณ</label>
                                    <textarea name="message" id="message" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี่" required></textarea>
                                </div>
                                <div id="recaptcha-wrapper" class="text-center mb-2">
                                    <div class="g-recaptcha d-inline-block" 
                                    data-sitekey="6LdEHMMUAAAAAE3KkT851bgYp-MvfjojDaSJrH-W"
                                    data-callback="checkCaptcha"></div>
                                </div>
                                <button type="submit" name="btn-submit" id="btn-submit" class="btn my-btn d-block mx-auto submit" disabled>ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
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
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d8ef0f1bbc.js" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Popper.js -->
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d8ef0f1bbc.js" crossorigin="anonymous"></script>
    <!-- Jarallax -->
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <!-- Facebook Comment -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v5.0">
    </script>
    <!-- Recaptcha v2 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>

    <script>
        // reCaptcha v2 //
        $(function(){
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
            resizeCaptcha();
            });

            resizeCaptcha();
        });

        //
        // ─── RESPONESIVE RECAPTCHA ───────────────────────────────────────
        //

            function resizeCaptcha() {
                if (captchaWrapper.width() >= captchaWidth) {
                    if (captchaResized) {
                        captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform',
                        '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin',
                        '').css('-o-transform-origin', '');
                        captchaWrapper.height(captchaHeight);
                        captchaResized = false;
                    }
                } else {
                    var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                    captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform',
                    'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform',
                    'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0')
                    .css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                    captchaWrapper.height(captchaHeight * scale);
                    if (captchaResized == false) captchaResized = true;
                }
            }
        

        //
        // ─── CHECK SUBMIT ────────────────────────────────────────────────
        //

            function checkCaptcha(){
                document.querySelector('#btn-submit').disabled = false;
            }

    </script>
</body>

</html>