<?php
    define('SITE_KEY', '6LdBD8MUAAAAAHifvF4zIbpMEHGMrFcnW25NcQi0');
    define('SECRET_KEY', '6LdBD8MUAAAAAMXBKH3BpmHKOelvqyYi2BwxEdKp');

    if($_POST){
        function getCaptcha($SecretKey){
            // Let google check validation
            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");

            // Decode JSON from google (convert json to array[key => value])
            $Return = json_decode($Response);
            return $Return;
        }
        // Assign value from getCaptcha func to $Return
        $Return = getCaptcha($_POST['recaptchaV3']);
 
        if($Return->success == true && $Return->score > 0.5){
            echo "Successfully";
        }else{
            echo "You are robot!";
        }
    }
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <!-- reCappcha v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdBD8MUAAAAAHifvF4zIbpMEHGMrFcnW25NcQi0"></script>
    <title>Contact</title>
</head>

<body>
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-alpha fixed-top navExpand">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/image/logo.png" width="35px" height="35px" class="d-inline-block align-top">
                &nbsp;Panyafuang
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.html">Content</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- SECTION: PAGE TITLE -->
    <header class="jarallax page-title" data-jarallax='{ "speed": 0.5 }'
        style="background-image: url('assets/image/contact.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center page-title-inner">
                    <h1 class="display-2 brand-text-thai">ข้อมูลการติดต่อ</h1>
                    <p class="lead">Panyafuang Shop</p>
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
                        <form action="contact.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมล์</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="example@gmali.com">
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="msg">ข้อความของคุณ</label>
                                    <textarea name="msg" id="msg" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                                </div>
                                <input type="hidden" name="recaptchaV3" id="recaptchaV3">
                                <button type="submit" class="btn my-btn d-block mx-auto submit">ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION: ABOUT -->
    <section class="jarallax about-title position-relative py-7" data-jarallax='{ "speed": 0.5 }'
        style="background-image: url('assets/image/photographe-evjf-greg--WQQ1-Fdbqk-unsplash.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center page-title-inner">
                    <h1 class="display-2 brand-text">Shop Shop</h1>
                    <div class="star-rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <div class="star-inner" style="width: 100%;">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION: FOOTER -->
    <section class="my-footer pt-5 px-5 text-center text-md-left">
        <div class="row">
            <div class="col-12 col-md-4 p-0 mb-4">
                <h5 class="mb-3">social</h5>
                <div class="icons-footer">
                    <a href="https://facebook.com" target="_blank" class="pl-0"><i
                            class="fab fa-facebook-square fa-2x pl-0 pr-3"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x pr-3"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-line fa-2x pr-3"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 p-0 mb-4">
                <h5 class="mb-3">menu</h5>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>
            <div class="col-12 col-md-4 p-0 mb-4">
                <h5 class="mb-3">address</h5>
                <div class="address-footer">
                    <div class="row">
                        <div class="address col-12">
                            <ul>
                                <li><i class="fas fa-map-marker-alt mr-2"></i>
                                    <span> 11600 New Petchaburi Rd, Ratchathewi Area, Surin, Thailand</span>
                                </li>
                                <li><a href="tel:099999999"><i class="fas fa-phone-alt mr-2"></i></a><span> (+66) 89-9999999</span>
                                </li>
                                <li><a href="mailto:panyafuang@gmail.com"><i class="fas fa-envelope mr-2"></i></a><span>
                                        example@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="map col-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12694.178030988185!2d103.53238791051555!3d14.8775637579782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedb088973f6d97ea!2sRobinson%20Surin!5e0!3m2!1sth!2sth!4v1572870938070!5m2!1sth!2sth"
                                frameborder="0" style="border:0;" allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div>
            <p>copyright &copy; <span class="year"></span> | ❤️ Panyafuang </p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d8ef0f1bbc.js" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Popper.js -->
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <!-- Jarallax -->
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <!-- Facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v5.0">
    </script>
    <!-- main.js -->
    <script src="assets/js/main.js"></script>

    <script>
        let currYear = new Date().getFullYear();
        document.querySelector('.year').innerHTML = currYear;

        grecaptcha.ready(function () {
                grecaptcha.execute('<?php echo SITE_KEY; ?>', {
                action: 'homepage'
            }).then(function (token) {
                document.getElementById('recaptchaV3').value = token;
            });
        });
    </script>
</body>

</html>