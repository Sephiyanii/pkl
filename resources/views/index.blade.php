

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sasha - Blogging HTML5 Template</title>
    <meta name="description" content="Sasha - Blogging HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png') }}">

    <!-- Import Icon Packs -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/elegent-icons.css') }}">

    <!-- Import External Scrpit CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.carousel.css') }}">

    <!-- Import Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/themes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/responsive.css') }}">

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js') }}"></script> -->

    <script src="{{ asset('assets/frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>

</head>


<body>

    <div class="overlay-wrapper">

        <header class="masthead">
            <div class="header-top">
                <div class="container">
                    <div class="side-menu-trigger"><span class="trigger-icon"><i class="icon_menu"></i></span></div><!-- /.side-menu-trigger -->
                    <a class="navbar-brand hidden-xs" href="./"><img src="{{ asset('assets/frontend/images/convers.png') }}" alt="Site Logo"></a>
                    <div class="menu-search">
                        <div class="form-trigger"><i class="icon_search"></i></div>
                        <form action="#">
                            <input type="text" name="search" id="menu-search" placeholder="Search here..">
                        </form>
                    </div>

                    <nav class="sidebar-menu">
                        <a class="navbar-brand" href="./"><img src="{{ asset('assets/frontend/images/logo2.png') }}" alt="Site Logo"></a>
                        <span class="menu-close"><i class="icon_close"></i></span>

                        <ul class="nav navbar-nav">
                            <li class="menu-item menu-item-has-children active">
                                <a href="#">Home</a>
                            </li>
                        </ul><!-- /.navbar-nav -->

                        <div class="menu-social">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div><!-- /.menu-social -->
                    </nav><!-- /.sidebar-menu -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->

            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand visible-xs" href="./"><img src="{{ asset('assets/frontend/images/logo3.png') }}" alt="Site Logo"></a>
                        </div>

                        <div id="main-menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="menu-item menu-item-has-children active">
                                    <a href="#">Home</a>
                                    
                                </li>

                            </ul><!-- /.navbar-nav -->
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.container -->
            </div><!-- /.header-bottom -->
        </header><!-- /.masthead -->



        <section class="banner-slider banner-slider-01 carousel slide">
            <ol class="carousel-indicators">
                <li data-target=".banner-slider-01" data-slide-to="0" class="active"></li>
                <li data-target=".banner-slider-01" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active background-bg" data-image-src="{{ asset('assets/frontend/images/slider/1.jpg') }}">
                    <article class="post type-post">
                        <div class="entry-content">
                            <div class="overlay">
                                <div class="inner-content">
                                    <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                    <h2 class="entry-title"><a href="standard.html">Natural summer</a></h2><!-- /.entry-title -->
                                    <a href="standard.html" class="btn read-more">Read More</a><!-- /.btn -->
                                </div><!-- /.inner-content -->
                            </div><!-- /.overlay -->
                        </div><!-- /.entry-content -->
                    </article><!-- /.post -->
                </div><!-- /.item -->

                <div class="item background-bg" data-image-src="{{ asset('assets/frontend/images/slider/2.jpg') }}">
                    <article class="post type-post">
                        <div class="entry-content">
                            <div class="overlay">
                                <div class="inner-content">
                                    <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                    <h2 class="entry-title"><a href="standard.html">Cruise to Alaska</a></h2><!-- /.entry-title -->
                                    <a href="standard.html" class="btn read-more">Read More</a><!-- /.btn -->
                                </div><!-- /.inner-content -->
                            </div><!-- /.overlay -->
                        </div><!-- /.entry-content -->
                    </article><!-- /.post -->
                </div><!-- /.item -->
            </div><!-- /.carousel-inner -->
        </section><!-- /.banner-slider -->



        <section class="main-content">
            <div class="padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="default-posts">
                                <article class="post type-post col-sm-6 full-width">
                                    <div class="entry-thumbnail"><img src="{{ asset('assets/frontend/images/posts/01/1.jpg') }}" alt="Thumbnail Image"></div><!-- /.entry-thumbnail -->
                                    <div class="entry-content">
                                        <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                        <h2 class="entry-title"><a href="standard.html">Cruise to Alaska</a></h2><!-- /.entry-title -->
                                        <span class="time"><time datetime="2017-12-05">May 12, 2017</time></span><!-- /.time -->
                                        <p>
                                            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor, nisi sequat ipsum, necsagittis emnibh idelit. Duis sed odio sit amet nibh vulputate cursus amet mauris. Morbi acumsan ipsum velit. Nam nec tellusb adio tin cidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit 
                                        </p>

                                        <a href="standard.html" class="btn">Read more</a><!-- /.btn -->

                                        <div class="post-meta">
                                            <span class="comments pull-left"><i class="icon_comment_alt"></i> <a href="#">4 Comments</a></span><!-- /.comments -->
                                            <span class="post-social pull-right">
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                            </span><!-- /.post-social -->
                                        </div><!-- /.post-meta -->
                                    </div><!-- /.entry-content -->
                                </article><!-- /.post -->

                            @foreach($artikel as $data)
                                <article class="post type-post col-sm-6">
                                    <div class="entry-thumbnail"><img src="{{ asset('assets/img/artikel/'.$data->foto)}}" alt="Thumbnail Image"></div><!-- /.entry-thumbnail -->
                                    <div class="entry-content">
                                        <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                        <h2 class="entry-title"><a href="standard.html">{{ $data->judul }}</a></h2><!-- /.entry-title -->
                                        <p>
                                           {!! $data->konten !!}
                                        </p>
                                        <a href="standard.html" class="btn">Read more</a><!-- /.btn -->
                                    </div><!-- /.entry-content -->
                                </article><!-- /.post -->
                                @endforeach
                            </div><!-- /.default-posts -->

                            <nav class="pagination pagination-01">
                               <a href="#" class="previous-page hidden pull-left"><i class="fa fa-angle-double-left"></i> Previous Posts </a>
                               <a href="#" class="next-page pull-right">Older Posts <i class="fa fa-angle-double-right"></i></a>
                           </nav><!-- /.pagination -->
                       </div>

                       <div class="col-sm-4">
                        <aside class="sidebar text-center">
                            <div class="widget widget_about_author">
                                <h3 class="widget-title">About me</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <div class="author-avatar"><img src="{{ asset('assets/frontend/images/sidebar/a.jpg') }}" alt="Avatar" class="img-circle"></div><!-- /.author-avatar -->
                                    <p>
                                        Ahasellus rhoncus laoreet odio, sit amet rutrum metus aliquet quis. Sed sed nulla erat. Curabitur ullamcorper dum tortor.
                                    </p>
                                    <div class="author-social">
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div><!-- /.author-social -->
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_newsletter">
                                <h3 class="widget-title">Newsletter</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <form class="mc4wp-form" method="post">
                                        <div class="mc4wp-form-fields"> 
                                            <input class="form-control" type="email" name="EMAIL" placeholder="Email Address" required="">
                                            <input type="submit" class="form-control" name="submit" value="Subscribe">
                                        </div>
                                        <div class="mc4wp-response"></div>
                                    </form>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_insta_feed">
                                <h3 class="widget-title">Instagram</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/Converseee.jpg') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/10.jfif') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/offwhite.png') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/marii.jpg') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/11.jpg') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/6.jpg') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/7.jpg') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/8.jpg') }}" alt="Instagram Image"></a>
                                    <a href="#"><img src="{{ asset('assets/frontend/images/sidebar/9.jpg') }}" alt="Instagram Image"></a>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_recent_posts">
                                <h3 class="widget-title">Recent Posts</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <article class="post type-post media">
                                        <div class="entry-thumbnail media-left pull-left"><img src="{{ asset('assets/frontend/images/sidebar/Converseee.jpg') }}" alt="Thumb Image"></div><!-- /.entry-thumbnail -->
                                        <div class="entry-content media-body">
                                            <h3 class="entry-title"><a href="standard.html">CONVERSE</a></h3><!-- /.entry-title -->
                                            <span class="time"><time datetime="2017-12-05">May 12, 2017 @sephiyani_</time></span><!-- /.time -->
                                        </div><!-- /.entry-content -->
                                    </article><!-- /.post -->
                                    <article class="post type-post media">
                                        <div class="entry-thumbnail media-left pull-left"><img src="{{ asset('assets/frontend/images/sidebar/a2.jpg') }}" alt="Thumb Image"></div><!-- /.entry-thumbnail -->
                                        <div class="entry-content media-body">
                                            <h3 class="entry-title"><a href="standard.html">Hitchhog is dangerous?</a></h3><!-- /.entry-title -->
                                            <span class="time"><time datetime="2017-12-05">May 12, 2017</time></span><!-- /.time -->
                                        </div><!-- /.entry-content -->
                                    </article><!-- /.post -->
                                    <article class="post type-post media">
                                        <div class="entry-thumbnail media-left pull-left"><img src="{{ asset('assets/frontend/images/sidebar/a3.jpg') }}" alt="Thumb Image"></div><!-- /.entry-thumbnail -->
                                        <div class="entry-content media-body">
                                            <h3 class="entry-title"><a href="standard.html">Dream on Zanzibar</a></h3><!-- /.entry-title -->
                                            <span class="time"><time datetime="2017-12-05">May 12, 2017</time></span><!-- /.time -->
                                        </div><!-- /.entry-content -->
                                    </article><!-- /.post -->
                                    <article class="post type-post media">
                                        <div class="entry-thumbnail media-left pull-left"><img src="{{ asset('assets/frontend/images/sidebar/a4.jpg') }}" alt="Thumb Image"></div><!-- /.entry-thumbnail -->
                                        <div class="entry-content media-body">
                                            <h3 class="entry-title"><a href="standard.html">Happy Road Trip</a></h3><!-- /.entry-title -->
                                            <span class="time"><time datetime="2017-12-05">May 12, 2017</time></span><!-- /.time -->
                                        </div><!-- /.entry-content -->
                                    </article><!-- /.post -->
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_ad">
                                <div class="widget-details">
                                    <a href="#" class="ad-banner"><img src="{{ asset('assets/frontend/images/sidebar/ad.jpg') }}" alt="Ad Banner"></a>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->
                        </aside><!-- /.sidebar -->
                    </div> 
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.padding -->
    </section><!-- /.main-content -->



    <section class="section-widget">
        <div class="widget widget_insta_feed">
            <div class="col-sm-2"><a href="#"><img src="{{ asset('assets/frontend/images/ins/1.jpg') }}" alt="Instagram Image"></a></div>
            <div class="col-sm-2"><a href="#"><img src="{{ asset('assets/frontend/images/ins/2.jpg') }}" alt="Instagram Image"></a></div>
            <div class="col-sm-2"><a href="#"><img src="{{ asset('assets/frontend/images/ins/3.jpg') }}" alt="Instagram Image"></a></div>
            <div class="col-sm-2"><a href="#"><img src="{{ asset('assets/frontend/images/ins/4.jpg') }}" alt="Instagram Image"></a></div>
            <div class="col-sm-2"><a href="#"><img src="{{ asset('assets/frontend/images/ins/5.jpg') }}" alt="Instagram Image"></a></div>
            <div class="col-sm-2"><a href="#"><img src="{{ asset('assets/frontend/images/ins/6.jpg') }}" alt="Instagram Image"></a></div>
        </div><!-- /.widget -->
    </section><!-- /.section-widget -->



    <footer class="site-footer colophon">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="./" class="footer-logo pull-left"><img src="{{ asset('assets/frontend/images/logo4.png') }}" alt="Logo"></a><!-- /.footer-logo -->
                </div>

                <div class="col-sm-6">
                    <div class="copyright text-center">
                        © <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div><!-- /.copyright -->
                </div>

                <div class="col-sm-3">
                    <div class="footer-social pull-right">
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div><!-- /.footer-social -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.site-footer -->

</div><!-- /.overlay -->

<script src="{{ asset('assets/frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
</body>
</html>
