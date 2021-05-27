<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Brando Responsive & Multipurpose OnePage Template - Blog</title>
        <!-- description -->
        <meta name="description" content="A great collection of creative, responsive, elegant onepage templates for different industries.">
        <!-- keywords -->
        <meta name="keywords" content="creative, css3, html5, onepage, multipurpose, bootstrap, responsive, agency, architecture, resume, blog, photography, restaurant, portfolio, spa, travel, wedding, coming soon">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('demo1/css/animate.css') }}" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('demo1/css/bootstrap.min.css') }}" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{ asset('demo1/css/et-line-icons.css') }}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('demo1/css/font-awesome.min.css') }}" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('demo1/css/owl.transitions.css') }}" />
        <link rel="stylesheet" href="{{ asset('demo1/css/owl.carousel.css') }}" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('demo1/css/magnific-popup.css') }}" />
        <!-- pull menu -->
        <link rel="stylesheet" href="{{ asset('demo1/css/pull-menu-sideslide.css') }}" />
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('demo1/css/style.css') }}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('demo1/css/responsive.css') }}" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- navigation -->
        <nav class="navbar no-margin-bottom alt-font">
            <div class="container">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-lg-2 col-md-3 navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand inner-link" href="agency.html#home"><img src="images/logo-agency.png" alt=""/></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-9 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="agency.html#about" class="inner-link">About</a></li>
                            <li><a href="agency.html#services" class="inner-link">Services</a></li>
                            <li><a href="agency.html#work" class="inner-link">Work</a></li>
                            <li><a href="agency.html#team" class="inner-link">Team</a></li>
                            <li><a href="agency.html#blog" class="inner-link">Blog</a></li>
                            <li><a href="agency.html#contact" class="inner-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-2 pull-right header-right text-right sm-display-none">
                        <span class="text-uppercase white-text text-small md-display-none">Let's work together?&nbsp;&nbsp;</span>
                        <a class="btn-small-white btn btn-very-small no-margin inner-link" href="agency.html#contact">Start Now</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
        <!-- page title -->
        <section class="page-title parallax2 parallax-fix wow fadeIn">
            <img class="parallax-background-img" src="http://placehold.it/1920x1080" alt="" />
            <div class="opacity-full-dark bg-deep-blue3"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="alt-font white-text font-weight-600 xs-title-extra-large">Latest Blog</h2>
                        <span class="alt-font title-small xs-text-large white-text text-uppercase margin-one no-margin-bottom no-margin-lr display-block">Our thoughts in one place</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- breadcrumb -->
        <div class="breadcrumb alt-font">
            <div class="container">  
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Blog Listing</li> 
                </ul> 
            </div> 
        </div>
        <!-- end breadcrumb --> 
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 blog-listing">
                        <!-- blog item -->
                        <article>
                            <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                <div class="post-date xs-margin-lr-auto xs-no-margin-top"><span>13</span>Mar 2015</div>
                            </div>
                            <div class="col-md-10 col-sm-10 post-details no-padding-right margin-twenty-nine no-margin-lr no-margin-top xs-no-padding-left xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                <span class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="{{ route('demo-satu-blog-detail') }}">Standard post with preview image</a></span>
                                <a href="{{ route('demo-satu-blog-detail') }}"><img src="http://placehold.it/800x549" alt=""/></a>
                                <p class="margin-eight no-margin-lr xs-margin-four xs-no-margin-lr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type & scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap intoelectronic typesetting, remaining essentially unchanged.</p>
                                <div class="col-md-8 col-sm-12 no-padding blog-listing-link xs-margin-eight xs-no-margin-lr xs-no-margin-top xs-text-center">
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Sara Smith</a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Design Tutorials </a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">67 Comments</a>
                                </div>
                                <!-- social icon -->
                                <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                    <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                </div>
                                <!-- end social icon -->
                                <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                    <a href="{{ route('demo-satu-blog-detail') }}" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding">
                                    <div class="bg-fast-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                </div>
                            </div>
                        </article>
                        <!-- end blog item -->
                        <!-- blog item -->
                        <article>
                            <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                <div class="post-date xs-margin-lr-auto"><span>24</span>Mar 2015</div>
                            </div>
                            <div class="col-md-10 col-sm-10 post-details no-padding-right margin-twenty-nine no-margin-lr no-margin-top xs-no-padding-left xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                <span class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="{{ route('demo-satu-blog-detail') }}">Standard post with preview picture images slider</a></span>
                                <div class="owl-slider-full owl-carousel light-pagination">
                                    <!-- slider item -->
                                    <div class="item">
                                        <img src="http://placehold.it/800x549" alt=""/>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- slider item -->
                                    <div class="item">
                                        <img src="http://placehold.it/800x549" alt=""/>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- slider item -->
                                    <div class="item">
                                        <img src="http://placehold.it/800x549" alt=""/>
                                    </div>
                                    <!-- end slider item -->
                                </div>
                                <p class="margin-eight no-margin-lr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type & scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap intoelectronic typesetting, remaining essentially unchanged.</p>
                                <div class="col-md-8 col-sm-12 no-padding blog-listing-link xs-margin-eight xs-no-margin-lr xs-no-margin-top xs-text-center">
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Sara Smith</a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Design Tutorials </a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">67 Comments</a>
                                </div>
                                <!-- social icon -->
                                <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                    <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                </div>
                                <!-- end social icon -->
                                <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                    <a href="{{ route('demo-satu-blog-detail') }}" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding">
                                    <div class="bg-fast-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                </div>
                            </div>
                        </article>
                        <!-- end blog item -->
                        <!-- blog item -->
                        <article>
                            <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                <div class="post-date xs-margin-lr-auto"><span>08</span>Mar 2015</div>
                            </div>
                            <div class="col-md-10 col-sm-10 post-details no-padding-right margin-twenty-nine no-margin-lr no-margin-top xs-no-padding-left xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                <span class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="{{ route('demo-satu-blog-detail') }}">This is a blockquote post</a></span>
                                <div class="col-md-12 no-padding">
                                    <div class="blog-image">
                                        <blockquote class="bg-gray">
                                            <p class="text-large ">Reading is not only informed by what’s going on with us at that moment, but also governed by how our eyes and brains work to process information. What you see and what you’re experiencing as you read these words is quite different.</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 no-padding blog-listing-link xs-margin-eight xs-no-margin-lr xs-no-margin-top xs-text-center">
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Sara Smith</a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Design Tutorials </a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">67 Comments</a>
                                </div>
                                <!-- social icon -->
                                <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                    <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                </div>
                                <!-- end social icon -->
                                <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                    <a href="{{ route('demo-satu-blog-detail') }}" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding">
                                    <div class="bg-fast-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                </div>
                            </div>
                        </article>
                        <!-- end blog item -->
                        <!-- blog item -->
                        <article>
                            <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                <div class="post-date xs-margin-lr-auto"><span>06</span>Mar 2015</div>
                            </div>
                            <div class="col-md-10 col-sm-10 post-details no-padding-right margin-twenty-nine no-margin-lr no-margin-top xs-no-padding-left xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                <span class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="{{ route('demo-satu-blog-detail') }}">This is a standard post with thumbs gallery</a></span>
                                <div class="blog-listing wow fadeIn">
                                    <!-- lightbox images -->
                                    <div class="blog-image lightbox-gallery clearfix margin-ten no-margin-lr no-margin-top">
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding"><a href="http://placehold.it/800x500" title="This is a standard post with thumbs gallery"><img src="http://placehold.it/800x500" alt=""></a></div>
                                    </div>
                                    <!-- end lightbox images -->
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding margin-eight no-margin-lr no-margin-top"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p></div>
                                <div class="col-md-8 col-sm-12 no-padding blog-listing-link xs-margin-eight xs-no-margin-lr xs-no-margin-top xs-text-center">
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Sara Smith</a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Design Tutorials </a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">67 Comments</a>
                                </div>
                                <!-- social icon -->
                                <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                    <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                </div>
                                <!-- end social icon -->
                                <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                    <a href="{{ route('demo-satu-blog-detail') }}" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding">
                                    <div class="bg-fast-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                </div>
                            </div>
                        </article>
                        <!-- end blog item -->
                        <!-- blog item -->
                        <article>
                            <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                <div class="post-date xs-margin-lr-auto"><span>07</span>Mar 2015</div>
                            </div>
                            <div class="col-md-10 col-sm-10 post-details no-padding-right margin-twenty-nine no-margin-lr no-margin-top xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                <span class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="{{ route('demo-satu-blog-detail') }}">This is a standard post with an embedded video</a></span>
                                <div class="fit-videos">
                                    <iframe src="https://player.vimeo.com/video/75976293" width="500" height="281"></iframe>
                                </div>
                                <p class="margin-eight no-margin-lr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type & scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap intoelectronic typesetting, remaining essentially unchanged.</p>
                                <div class="col-md-8 col-sm-12 no-padding blog-listing-link xs-margin-eight xs-no-margin-lr xs-no-margin-top xs-text-center">
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Sara Smith</a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Design Tutorials </a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">67 Comments</a>
                                </div>
                                <!-- social icon -->
                                <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                    <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                </div>
                                <!-- end social icon -->
                                <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                    <a href="{{ route('demo-satu-blog-detail') }}" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding">
                                    <div class="bg-fast-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                </div>
                            </div>
                        </article>
                        <!-- end blog item -->
                        <!-- blog item -->
                        <article>
                            <div class="col-md-2 col-sm-2 text-center alt-font overflow-hidden no-padding-left sm-no-padding md-no-padding">
                                <div class="post-date xs-margin-lr-auto"><span>04</span>Mar 2015</div>
                            </div>
                            <div class="col-md-10 col-sm-10 post-details no-padding-right xs-no-padding-left xs-margin-twenty-three xs-no-margin-lr xs-no-margin-top">
                                <span class="alt-font display-block title-small xs-text-extra-large sm-text-medium margin-six no-margin-lr no-margin-top xs-text-center"><a href="{{ route('demo-satu-blog-detail') }}">This is a standard post with a HTML5 video</a></span>
                                <video controls="" loop="" muted="" autoplay=""><source type="video/mp4" src="video/video.mp4"></video>
                                <p class="margin-eight no-margin-lr">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type & scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap intoelectronic typesetting, remaining essentially unchanged.</p>
                                <div class="col-md-8 col-sm-12 no-padding blog-listing-link xs-margin-eight xs-no-margin-lr xs-no-margin-top xs-text-center">
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Sara Smith</a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">Design Tutorials </a>
                                    <a href="#" class="text-small dark-gray-text text-uppercase alt-font">67 Comments</a>
                                </div>
                                <!-- social icon -->
                                <div class="col-md-4 col-sm-12 no-padding text-right sm-margin-six sm-no-margin-bottom sm-no-margin-lr sm-text-left xs-text-center">
                                    <div class="blog-sharing"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook sm-no-margin-left"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin no-margin-right"></i></a></div>
                                </div>
                                <!-- end social icon -->
                                <div class="col-md-12 col-sm-12 no-padding sm-text-left xs-text-center margin-six no-margin-lr ">
                                    <a href="{{ route('demo-satu-blog-detail') }}" class="btn-black btn btn-very-small no-margin">Continue Reading</a>
                                </div>
                                <div class="col-md-12 col-sm-12 no-padding">
                                    <div class="bg-fast-yellow separator-line-thick no-margin-lr margin-five no-margin-bottom xs-display-none"></div>
                                </div>
                            </div>
                        </article>
                        <!-- end blog item -->
                    </div>
                    <!-- sidebar -->
                    <div class="col-md-3 col-md-offset-1 col-sm-4">
                        <!-- widget  -->
                        <div class="widget margin-twenty no-margin-lr no-margin-top xs-margin-twelve xs-no-margin-lr xs-no-margin-top">
                            <form>
                                <i class="fa fa-search close-search search-button"></i>
                                <input type="text" name="search" class="alt-font blog-search-btn" placeholder="TYPE KEYWORD HERE...">
                            </form>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Categories</span>
                            <div class="bg-fast-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="category-list">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Featured Blog</a></li>
                                    <li><a href="#">Photography Idea</a></li>
                                    <li><a href="#">Design Tutorials</a></li>
                                    <li><a href="#">News and Events</a></li>
                                    <li><a href="#">Arts and Entertainment</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">About Me</span>
                            <div class="bg-fast-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                            <div class="widget-body">
                                <img src="http://placehold.it/600x255" alt=""/>
                                <span class="alt-font text-uppercase dark-gray-text font-weight-600 margin-twenty-two display-block no-margin-lr no-margin-bottom  xs-margin-five xs-no-margin-lr">John Deo</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard.</p>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Text Widget</span>
                            <div class="bg-fast-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                            <div class="widget-body">
                                <p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the of type and scrambled it to make a type specimen.</p>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Popular Posts</span>
                            <div class="bg-fast-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="widget-posts">
                                    <li><a href="{{ route('demo-satu-blog-detail') }}">Standard Post with Gallery</a>Saturday - June 15, 2013 </li>
                                    <li><a href="{{ route('demo-satu-blog-detail') }}">Standard post with preview Video</a>Saturday - June 20, 2013 </li>
                                    <li><a href="{{ route('demo-satu-blog-detail') }}">Standard post with preview Picture</a>Saturday - June 25, 2013 </li>
                                    <li><a href="{{ route('demo-satu-blog-detail') }}">Standard Post with Gallery</a>Saturday - June 15, 2013 </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Tags</span>
                            <div class="bg-fast-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                            <div class="widget-body tags">
                                <a href="#">Advertisement</a><a href="#">Fashion</a><a href="#">Sea</a><a href="#">Forest</a><a href="#">Nature</a><a href="#">Portrait</a><a href="#">Wordpress</a><a href="#">Photo</a><a href="#">Sky</a>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">Recent Comments</span>
                            <div class="bg-fast-yellow separator-line-thick no-margin-lr md-margin-eleven md-no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class=" widget-posts">
                                    <li><a href="{{ route('demo-satu-blog-detail') }}" class="display-block alt-font">Standard Post with Gallery</a>Saturday - June 15, 2013 at 12:04 pm</li>
                                    <li><a href="{{ route('demo-satu-blog-detail') }}" class="display-block alt-font">Standard post with preview Video</a>Saturday - June 20, 2013 at 07:11 pm</li>
                                    <li><a href="{{ route('demo-satu-blog-detail') }}" class="display-block alt-font">Standard post with preview Picture</a>Saturday - June 25, 2013 at 05:12 pm</li>
                                    <li><a href="{{ route('demo-satu-blog-detail') }}" class="display-block alt-font">Standard Post with Gallery</a>Saturday - June 15, 2013 at 09:14 am</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget-media">
                            <a href="#"><img src="http://placehold.it/800x667" alt=""/></a>
                        </div>
                        <!-- end widget  -->
                    </div>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- pagination -->
        <section class=" wow fadeIn bg-black padding-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 pagination text-center no-padding">
                        <a href="#"><i class="fa fa-angle-left title-medium font-weight-600 fast-yellow-text no-border"></i></a>
                        <a href="#" class="alt-font">1</a>
                        <a href="#" class="alt-font active">2</a>
                        <a href="#" class="alt-font">3</a>
                        <a href="#" class="alt-font">4</a>
                        <a href="#" class="alt-font">5</a>
                        <a href="#"><i class="fa fa-angle-right title-medium font-weight-600 fast-yellow-text"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end pagination -->
        <!-- footer -->
        <footer class="no-padding-top wow fadeIn">
            <div class="container">
                <div class="row border-bottom padding-eight no-padding-lr">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="footer-social position-relative top4">
                            <!-- social media link -->
                            <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                            <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                            <!-- end social media link -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <span class="text-small text-uppercase letter-spacing-1 alt-font">&copy; 2015 Brando is proudly powered by <a href="http://www.themezaa.com/" target="_blank">ThemeZaa.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- scroll to top -->
        <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('demo1/js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('demo1/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('demo1/js/skrollr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('demo1/js/smooth-scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.appear.js') }}"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.nav.js') }}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('demo1/js/wow.min.js') }}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('demo1/js/page-scroll.js') }}"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="{{ asset('demo1/js/owl.carousel.min.js') }}"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.countTo.js') }}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.parallax-1.1.3.js') }}"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="{{ asset('demo1/js/isotope.pkgd.min.js') }}"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('demo1/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="{{ asset('demo1/js/classie.js') }}"></script>
        <!-- counter  -->
        <script type="text/javascript" src="{{ asset('demo1/js/counter.js') }}"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="{{ asset('demo1/js/jquery.fitvids.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('demo1/js/main.js') }}"></script>
    </body>
</html>
