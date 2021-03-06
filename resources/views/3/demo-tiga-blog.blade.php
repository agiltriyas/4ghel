@include('3.head-style')
  <!-- main page -->
  <div class="main">
    <header id="home" data-stellar-background-ratio="0.5" class="header animated"> 
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav" role="navigation">
            <div class="container main-navigation">
                <div class="col-md-3 float-left"> <a class="logo-dark" href="index.html"><img alt="logo-dark" src="images/logo-dark.png" class="logo-dark" /></a> <a class="logo-light" href="index.html"><img alt="logo-white" src="images/logo-white.png" class="logo-white" /></a></div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="col-md-9  float-right collapse-navation">
                    <div class="navbar-collapse collapse navbar-inverse no-transition">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html?about" class="directpage">About</a></li>
                            <li><a href="index.html?work" class="directpage">Work</a></li>
                            <li><a href="index.html?expertise" class="directpage">Expertise</a></li>
                            <li><a href="index.html?team" class="directpage">Team</a></li>
                            <li class="blog current"><a href="#blog" class="directpage">Blog</a></li>
                            <li class="last"><a href="index.html?contact" class="directpage">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header text -->
        <div class="blog-header">
            <div class="gradient-overlay"> 
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="intro-section os-animation" data-os-animation="fadeIn">
                                <h1 class="intro"><span class="highlight">Latest Blog</span><br>
                                    Our toughts in one place</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- blog listing -->
    <section id="blog-list" class="blog-list white-bg blog-page"> 
        <div class="container">
            <div class="row"> 
                <!-- left content area -->
                <div class="col-md-8 col-sm-8 blog-left"> 
                    <div class="blog-listing"> 
                        <ul class="blog-post">
                            <li class="post-preview"> 
                                <div class="col-md-12 blog-wrapper no-padding"> <a href="{{ route('demo-tiga-blog-detail') }}"><img class="blog-img img-responsive" alt="blog-list-img-01" src="http://placehold.it/1200x780" /></a> </div>
                                <div class="col-md-12 col-sm-12 blog-content no-padding">
                                    <div class="blog-title"> <span class="medium light-gray">Saturday  -  June 15, 2013 </span> 
                                        <h3 class="title "><a href="{{ route('demo-tiga-blog-detail') }}">standard post with preview Picture</a></h3>
                                        <span class="month medium"><a href="#">Admin</a> - <a href="#">Web Design</a> - <a href="#">23 Comments</a></span> </div>
                                    <article class="contentarea ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</article>
                                    <div class="blog-share"> <a class="small-button no-margin float-left" href="{{ route('demo-tiga-blog-detail') }}">Continue Reading</a>
                                        <div class="blogpost_share">
                                            <ul class="text-center">
                                                <li class="facebook"><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                <li class="linkedin"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="google-plus"><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="post-preview"> 
                                <div class="col-md-12 blog-wrapper no-padding">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                                        <div class="carousel-inner">
                                            <div class="item active"><img src="http://placehold.it/1200x780" alt=""></div>
                                            <div class="item"> <img src="http://placehold.it/1200x780" alt=""></div>
                                            <div class="item"> <img src="http://placehold.it/1200x780" alt=""></div>
                                        </div>
                                        <a class="left carousel-control icon-prev" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control icon-next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
                                </div>
                                <div class="col-md-12 col-sm-12 blog-content no-padding">
                                    <div class="blog-title"> <span class="medium light-gray">Thursday  -  June 20, 2013 </span> 
                                        <h3 class="title "><a href="{{ route('demo-tiga-blog-detail') }}">Standard Post with Gallery</a></h3>
                                        <span class="month medium"><a href="#">Susana Jacobs</a> - <a href="#">Photography Idea</a> - <a href="#">40 Comments</a></span> </div>
                                    <article class="contentarea ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</article>
                                    <div class="blog-share"> <a class="small-button no-margin float-left" href="{{ route('demo-tiga-blog-detail') }}">Continue Reading</a>
                                        <div class="blogpost_share">
                                            <ul class="text-center">
                                                <li class="facebook"><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                <li class="linkedin"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="google-plus"><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="post-preview"> 
                                <div class="col-md-12 blog-wrapper no-padding"> <a href="{{ route('demo-tiga-blog-detail') }}">
                                        <iframe src="//player.vimeo.com/video/99585787?title=0&amp;byline=0&amp;portrait=0&amp;color=bb9b44" allowfullscreen class="blog-video"></iframe>
                                    </a> </div>
                                <div class="col-md-12 col-sm-12 blog-content no-padding">
                                    <div class="blog-title"> <span class="medium light-gray">Tuesday  -  June 25, 2013 </span> 
                                        <h3 class="title "><a href="{{ route('demo-tiga-blog-detail') }}">Standard post with preview Video</a></h3>
                                        <span class="month medium"><a href="#">Sara Smith</a> - <a href="#">Design Tutorials</a> - <a href="#">67 Comments</a></span> </div>
                                    <article class="contentarea ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</article>
                                    <div class="blog-share"> <a class="small-button no-margin float-left" href="{{ route('demo-tiga-blog-detail') }}">Continue Reading</a>
                                        <div class="blogpost_share">
                                            <ul class="text-center">
                                                <li class="facebook"><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                <li class="linkedin"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="google-plus"><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="post-preview"> 
                                <div class="col-md-12 blog-wrapper no-padding"> <a href="{{ route('demo-tiga-blog-detail') }}"><img class="blog-img img-responsive" alt="blog-list-img-01" src="http://placehold.it/1200x780" /></a> </div>
                                <div class="col-md-12 col-sm-12 blog-content no-padding">
                                    <div class="blog-title"> <span class="medium light-gray">Thursday  -  June 27, 2013 </span> 
                                        <h3 class="title "><a href="{{ route('demo-tiga-blog-detail') }}">Standard post with preview Picture</a></h3>
                                        <span class="month medium"><a href="#">Sommer Christian</a> - <a href="#">News and Events</a> -   No Comments </span> </div>
                                    <article class="contentarea ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</article>
                                    <div class="blog-share"> <a class="small-button no-margin float-left" href="{{ route('demo-tiga-blog-detail') }}">Continue Reading</a>
                                        <div class="blogpost_share">
                                            <ul class="text-center">
                                                <li class="facebook"><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                <li class="linkedin"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="google-plus"><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="post-preview"> 
                                <div class="col-md-12 blog-wrapper no-padding"> <a href="{{ route('demo-tiga-blog-detail') }}"><img class="blog-img img-responsive" alt="blog-list-img-01" src="http://placehold.it/1200x780" /></a> </div>
                                <div class="col-md-12 col-sm-12 blog-content no-padding">
                                    <div class="blog-title"> <span class="medium light-gray">Saturday  -  June 15, 2013 </span> 
                                        <h3 class="title "><a href="{{ route('demo-tiga-blog-detail') }}">Standard post with preview Picture</a></h3>
                                        <span class="month medium"><a href="#">Susana Jacobs</a> - <a href="#">Design Tutorials</a> - <a href="#">23 Comments</a></span> </div>
                                    <article class="contentarea ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</article>
                                    <div class="blog-share"> <a class="small-button no-margin float-left" href="{{ route('demo-tiga-blog-detail') }}">Continue Reading</a>
                                        <div class="blogpost_share">
                                            <ul class="text-center">
                                                <li class="facebook"><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                <li class="linkedin"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="google-plus"><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- blog listing end -->
                </div>
                <!-- right content -->
                <div class="col-md-3 col-sm-3 blog-right"> 
                    <div class="sidepanel"> 
                        <div class="sidebar-block">
                            <h6 class="title ">Search Blog</h6>
                            <form class="form-group " id="signup_form" action="javascript:;" method="post">
                                <div class="input_var">
                                    <input class="form-control search" type="text"  placeholder="Search Blog...">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-block">
                            <h6 class="title ">Categories</h6>
                            <ul class="categories">
                                <li><a href="javascript:;">Web Design</a></li>
                                <li><a href="javascript:;">Featured Blog</a></li>
                                <li><a href="javascript:;">Photography Idea</a></li>
                                <li><a href="javascript:;">Design Tutorials</a></li>
                                <li><a href="javascript:;">News and Events</a></li>
                                <li><a href="javascript:;">Arts and Entertainment</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-block">
                            <h6 class="title ">Text Widget</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="sidebar-block">
                            <h6 class="title ">Popular posts</h6>
                            <ul class="categories">
                                <li><a href="javascript:;">Standard Post with Gallery</a><span>Saturday - June 15, 2013</span></li>
                                <li><a href="javascript:;">Standard post with preview Video</a><span>Thursday - June 20, 2013</span></li>
                                <li><a href="javascript:;">Standard post with preview Picture</a><span>Tuesday - June 25, 2013 </span></li>
                                <li><a href="javascript:;">Standard post with preview Video</a><span>Thursday - June 27, 2013 </span></li>
                                <li><a href="javascript:;">Standard post with preview picture</a><span>Saturday - June 15, 2013 </span></li>
                            </ul>
                        </div>
                        <div class="sidebar-block">
                            <h6 class="title ">TAGS</h6>
                            <div class="tagcloud"> <a href="javascript:;">Advertisement</a> <a href="javascript:;">Fashion</a> <a href="javascript:;">Forest</a> <a href="javascript:;">Nature</a> <a href="javascript:;">Photo</a> <a href="javascript:;">Portrait</a> <a href="javascript:;">Sea</a> <a href="javascript:;">Sky</a> <a href="javascript:;">Wordpress</a> </div>
                        </div>
                        <div class="sidebar-block">
                            <h6 class="title ">Recent Comments</h6>
                            <ul class="categories">
                                <li><a href="javascript:;">Standard Post with Gallery</a><span>Saturday - June 29, 2013 &nbsp; at 12:04 pm </span></li>
                                <li><a href="javascript:;">Standard post with preview Video</a><span>Thursday - June 20, 2013 &nbsp; at 07:11 pm</span></li>
                                <li><a href="javascript:;">Standard post with preview Picture</a><span>Tuesday - June 25, 2013 &nbsp; at 09:36 am</span></li>
                                <li><a href="javascript:;">Standard post with preview Video</a><span>Thursday - June 27, 2013 &nbsp; at 05:12 pm</span></li>
                                <li><a href="javascript:;">Standard post with preview picture</a><span>Saturday - June 15, 2013 &nbsp; at 09:14 am</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right content end --> 
            </div>
        </div>

        <!-- pagination -->
        <div class="pagination border-top">
            <ul class="pagerblock text-center">
                <li><a href="javascript:;"><i class="fa fa-angle-left"></i></a></li>
                <li class="current"><a href="javascript:;">1</a></li>
                <li><a href="javascript:;">2</a></li>
                <li><a href="javascript:;">3</a></li>
                <li><a href="javascript:;"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <!-- pagination end --> 
    </section>
    <!-- blog list end --> 

    <!-- footer -->
    <footer id="footer" class="footer">
        <div class="color-overlay"> 
            <div class="container">
                <div class="row os-animation text-center" data-os-animation="bounceIn">
                    <ul class="social footer-social text-center">
                        <li><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="http://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="javascript:;"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="row os-animation" data-os-animation="bounceIn">
                    <div class="transparent-line"></div>
                </div>
                <div class="row os-animation" data-os-animation="bounceIn">
                    <p class="text-center content-white copy">&copy; 2014 Sturlly is proudly powered by ThemeZaa.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end... --> 

    <!-- scroll to top --> 
    <a href="#" class="scrollToTop"><i class="fa fa-angle-double-up"></i></a> 
    <!-- scroll to top end --> 

</div>
<!-- main page end --> 

@include('3.script')