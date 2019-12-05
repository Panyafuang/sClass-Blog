<?php $pathName = basename($_SERVER['SCRIPT_FILENAME'], '.php') ?>

<!-- SECTION: ABOUT -->
<section class="jarallax about-title position-relative py-7" data-jarallax='{ "speed": 0.5 }'
    style="background-image: url('assets/images/photographe-evjf-greg - WQQ1-Fdbqk-unsplash.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-4 brand-text">SURINSTUDIO</h2>
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
<!-- FOOTER: SECTION -->
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
                    <li class="nav-item <?php echo $pathName == 'index' ? 'active' : '' ;?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'shop' ? 'active' : '' ;?>">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'blog' || $pathName == 'blog-detail' ? 'active' : '' ;?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'about' ? 'active' : '' ;?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $pathName == 'contact' ? 'active' : '';?>">
                        <a class="nav-link" href="contact.php">Contact</a>
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
                                <li><a href="tel:099999999"><i class="fas fa-phone-alt mr-2"></i></a><span> (+66)
                                        89-9999999</span>
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
            <p>copyright &copy; <span class="year"></span> | ❤️ surinstudio </p>
        </div>
    </footer>