
<!doctype html>
<html lang="en">
<head>
  @include('frontend.includes.head')
    <title>Blogy | @yield('title') </title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
@include('frontend.includes.nav')
</nav>

<!-- Start retroy layout blog posts -->
@yield('body')

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="mb-4">About</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div> <!-- /.widget -->
                <div class="widget">
                    <h3>Social</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4 ps-lg-5">
                <div class="widget">
                    <h3 class="mb-4">Company</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Creative</a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="mb-4">Recent Post Entry</h3>
                    <div class="post-entry-footer">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{asset('/')}}front/images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
                                    <div class="text">
                                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">March 15, 2018 </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('/')}}front/images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
                                    <div class="text">
                                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">March 15, 2018 </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('/')}}front/images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
                                    <div class="text">
                                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">March 15, 2018 </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">


                <p>Copyright &copy;<script>document.write(new Date().getFullYear());
                    </script>. All Rights Reserved. &mdash; Designed with love by
                    <a href="https://untree.co">Untree.co</a>
                </p>
            </div>
        </div>
    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>


<script src="{{asset('/')}}front/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}front/js/tiny-slider.js"></script>

<script src="{{asset('/')}}front/js/flatpickr.min.js"></script>


<script src="{{asset('/')}}front/js/aos.js"></script>
<script src="{{asset('/')}}front/js/glightbox.min.js"></script>
<script src="{{asset('/')}}front/js/navbar.js"></script>
<script src="{{asset('/')}}front/js/counter.js"></script>
<script src="{{asset('/')}}front/js/custom.js"></script>


</body>
</html>
