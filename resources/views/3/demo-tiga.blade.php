
    @include('3.head-style')
    
    <body>
        <!-- main page -->
        <div class="main"> 

            <!-- header-->
            <header id="home" data-stellar-background-ratio="0.5" class="header animated">
                <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav" role="navigation">
                    <div class="container main-navigation">
                        <div class="col-md-3 float-left"> <a class="logo-dark" href="#home"><img alt="logo-dark" src="{{asset('demo2/images/logo-dark.png') }}" class="logo-dark" /></a> <a class="logo-light" href="#home"><img alt="logo-white" src="{{asset('demo2/images/logo-white.png') }}" class="logo-white" /></a> </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="col-md-9 text-left float-right collapse-navation">
                            <div class="navbar-collapse collapse navbar-inverse no-transition">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a id="nav-about" href="#about">About</a></li>
                                    <li><a id="nav-work" href="#work">Work</a></li>
                                    <li><a id="nav-expertise" href="#expertise">Expertise</a></li>
                                    <li><a id="nav-team" href="#team">Team</a></li>
                                    <li><a id="nav-blog" href="#blog">Blog</a></li>
                                    <li class="last"><a id="nav-contact" href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="color-overlay full-screen"> 
                    <!-- header text -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="intro-section os-animation" data-os-animation="fadeIn">
                                    <h1 class="intro"><span class="highlight">Where Good Ideas</span><br>
                                        are born, Raised and Nurtured.</h1>
                                    <a class="highlight-button inner-link" href="#about">Digital Marketing</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollDownWrap">
                        <div class="scrollDown"> <a href="#about" class="inner-link"><i class="fa fa-angle-down"></i> </a> </div>
                    </div>
                </div>
            </header>
            <!-- header end --> 

            <!-- about -->
            <section id="about" class="gray-bg">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">About</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">We are relentless in moving boundaries and carry out this spirited attitude into digital solutions. Solutions that engage, inspire and make you think.</p>
                        </div>
                    </div>
                    <div class="row border-bottom os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-3 col-sm-3 service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-pencil-square-o"></i> </div>
                            <h6>Innovate</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-comment-o"></i> </div>
                            <h6>Qualities</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box border-right text-center">
                            <div class="service-icon"> <i class="fa fa-cut"></i> </div>
                            <h6>Analytics</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 service-box text-center">
                            <div class="service-icon"> <i class="fa fa-bell-o"></i> </div>
                            <h6>strategy</h6>
                            <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="row os-animation text-center" data-os-animation="fadeInUp">
                        <p class="lead width">We grow brands by making decisions that are rooted in business strategy.</p>
                        <br>
                        <a id="href-about" class="highlight-button-black inner-link" href="#contact">Let's work together</a> </div>
                </div>
            </section>
            <!-- about end --> 

            <!-- work -->
            <section id="grid-gallery" class="grid-gallery no-padding-top no-padding-bottom">
                <div id="work" class="work grid-wrap"> 
                    <!-- portfolio tab -->
                    <ul class="isotope-filters text-center os-animation" data-os-animation="fadeInUp">
                        <li class="active"><a class="active" data-filter="*" href="#">all</a></li>
                        <li><a data-filter=".design" href="#">design</a></li>
                        <li><a data-filter=".fashion" href="#">fashion</a></li>
                        <li><a data-filter=".illustration" href="#">illustraion</a></li>
                        <li><a data-filter=".product" href="#">product</a></li>
                        <li><a data-filter=".style" href="#">style</a></li>
                    </ul>
                    <ul class="grid portfolio isotope no-transition portfolio-hex portfolio-shadows row demo-3 os-animation" data-os-animation="fadeInUp">
                        <li class="portfolio-item col-md-3 col-sm-3 fashion style grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000">
                                <figcaption>
                                    <h4 class="title">Pixflow</h4>
                                    <span>Fashion, style</span> <a class="text-right" href="javascript:;"><i class="fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 fashion product style grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-02" />
                                <figcaption>
                                    <h4 class="title">Apple New Design</h4>
                                    <span>product, style</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 fashion style product grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-03" />
                                <figcaption>
                                    <h4 class="title">Dreams</h4>
                                    <span>design, Fashion, product</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 illustration fashion style grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-04" />
                                <figcaption>
                                    <h4 class="title">Dreams of glory</h4>
                                    <span>Fashion, style</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design illustration product grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-05" />
                                <figcaption>
                                    <h4 class="title">satra jean brand</h4>
                                    <span>design, product</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-06" />
                                <figcaption>
                                    <h4 class="title">flat screen wall</h4>
                                    <span>design, product</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design illustration grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-07" />
                                <figcaption>
                                    <h4 class="title">parament action</h4>
                                    <span>design, Illustraion</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                        <li class="portfolio-item col-md-3 col-sm-3 design illustration product grid cs-style-3">
                            <figure class="portfolio-figure"> <img src="http://placehold.it/1000x1000" alt="work-08" />
                                <figcaption>
                                    <h4 class="title">visual art exibition</h4>
                                    <span>design, Illustraion</span> <a class="text-right" href="javascript:;"><i class="fa fa fa-angle-right"></i></a> </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <!-- work popup -->
                <div class="slideshow">
                    <ul class="popup-slide">
                        <li class="popup-slideshow content-scroll ">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel1" data-slide-to="1"></li>
                                                <li data-target="#carousel1" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title text-left">Pixflow</h4>
                                        <span class="text-left category">Fashion Industry&nbsp;&nbsp;???&nbsp;&nbsp;United Kingdom</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + Mobile Website + WordPress Development</span>
                                        <div class="popup-line"></div>
                                        <p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jacskon Smith&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-01" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Apple New Design</h4>
                                        <span class="category">product Industry&nbsp;&nbsp;???&nbsp;&nbsp;United States of America</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + Mobile Website + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Stella Kromstain&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll ">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-02" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-g03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Dreams</h4>
                                        <span class="category">design Industry&nbsp;&nbsp;???&nbsp;&nbsp;australia</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + WordPress Development + Mobile Website</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jerry Gordinter&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel2" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel2" data-slide-to="1"></li>
                                                <li data-target="#carousel2" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-01"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-02"/> </div>
                                                <div class="item"> <img src="http://placehold.it/1000x1000" alt="work-03"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">Dreams of glory</h4>
                                        <span class="text-left category">Illustraion Industry&nbsp;&nbsp;???&nbsp;&nbsp;United States of America</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">WordPress Development + Blog + Branding + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jone Doe&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-04" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-05"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">satra jean brand</h4>
                                        <span class="text-left category">design Industry&nbsp;&nbsp;???&nbsp;&nbsp;australia</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">WordPress Development + Blog + Branding + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jacskon Smith&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-05" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-06"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">flat screen wall</h4>
                                        <span class="text-left category">Fashion Industry&nbsp;&nbsp;???&nbsp;&nbsp;United Kingdom</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Magento Development + WordPress Development + Mobile Website</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Stella Kromstain&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-06" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-07"/> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">parament action</h4>
                                        <span class="text-left category">product Industry&nbsp;&nbsp;???&nbsp;&nbsp;United States of America</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Custom Website Development + Facebook Pages Design + eNewsletter</span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jerry Gordinter&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="popup-slideshow content-scroll">
                            <figure class="ipad-scroll">
                                <figcaption>
                                    <div class="popup-slider">
                                        <div id="carousel-example-generic-07" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active"> <img src="http://placehold.it/1000x1000" alt="work-08" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-part">
                                        <h4 class="title">visual art exibition</h4>
                                        <span class="text-left category">Fashion Industry&nbsp;&nbsp;???&nbsp;&nbsp;australia</span>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Custom Website Development + Branding + Campaign </span>
                                        <div class="popup-line"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="popup-line"></div>
                                        <span class="work-details">Client Speak</span>
                                        <p class="client-speak">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<span>Jone Doe&nbsp;&nbsp;???&nbsp;&nbsp;Google Inc</span></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <nav class="popup-navigation"> <span class="icon nav-prev"></span> <span class="icon nav-next"></span> <span class="icon nav-close"></span> </nav>
                </div>
            </section>
            <!-- work end --> 

            <!-- skills -->
            <section class="orange-bg work-count">
                <div class="container">
                    <div class="row">
                        <div class="work-count-box col-md-4 col-sm-4 os-animation" data-os-animation="bounceIn"> <span class="title-top">01.</span> <span class="title">logo design</span>
                            <div class="black-line-top"></div>
                            <div class="black-line-bottom"></div>
                            <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#expertise" class="small-button inner-link">Read More</a> </div>
                        <div class="work-count-box col-md-4 col-sm-4 os-animation" data-os-animation="bounceIn"> <span class="title-top">02.</span> <span class="title">print design</span>
                            <div class="black-line-top"></div>
                            <div class="black-line-bottom"></div>
                            <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#expertise" class="small-button inner-link">Read More</a> </div>
                        <div class="work-count-box col-md-4 col-sm-4 os-animation" data-os-animation="bounceIn"> <span class="title-top">03.</span> <span class="title">web design</span>
                            <div class="black-line-top"></div>
                            <div class="black-line-bottom"></div>
                            <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="#expertise" class="small-button inner-link">Read More</a> </div>
                    </div>
                </div>
            </section>
            <!-- skills end --> 

            <!-- testimonial -->
            <section id="testimonial" class="testimonial">
                <div class="color-overlay">
                    <div class="container">
                        <div class="row text-center os-animation" data-os-animation="fadeInUp">
                            <h2 class="title">Testimonial</h2>
                        </div>
                        <div class="row text-center os-animation" data-os-animation="fadeInUp">
                            <div data-ride="carousel" class="carousel slide" id="myCarousel">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#myCarousel"></li>
                                    <li data-slide-to="1" data-target="#myCarousel"></li>
                                    <li data-slide-to="2" data-target="#myCarousel" class="active"></li>
                                    <li data-slide-to="3" data-target="#myCarousel"></li>
                                    <li data-slide-to="4" data-target="#myCarousel"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>jerry gordinter</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Jone Doe</span> </div>
                                        </div>
                                    </div>
                                    <div class="item active">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Tom Anthony</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Stella Kromstain</span> </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="carousel-caption">
                                                <p>We build pretty complex tools and this allows us to take designs and turn them into functional prototypes quickly and easily.</p>
                                                <div class="white-line"></div>
                                                <span>Jone Doe</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial end --> 

            <!-- expertise -->
            <section id="expertise" class="expertise">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">expertise</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">We consult on digital strategy &amp; craft meaningful connections with your customers across web, social, mobile &amp; ecommerce.</p>
                        </div>
                    </div>
                    <div class="row feature-content os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6">
                            <div class="feature">
                                <div class="icon-container"> <i class="fa fa-paper-plane-o"></i> </div>
                                <div class="fetaure-details">
                                    <h4 class="title">Discover. <span>Understand the situation.</span></h4>
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="feature">
                                <div class="icon-container"> <i class="fa fa-bullhorn"></i> </div>
                                <div class="fetaure-details">
                                    <h4 class="title">Strategise. <span>Chart the course.</span></h4>
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 os-animation" data-os-animation="fadeInUp">
                        <div class="expertise-img"><img src="http://placehold.it/1100x400" class="animated fadeIn" alt="expertise-img" /></div>
                    </div>
                </div>
            </section>
            <!-- expertise end --> 

            <!-- Piechart -->
            <section id="count" class="count orange-bg">
                <div class="container">
                    <div class="row os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-3 col-sm-5 text-center count-box">
                            <div class="chart easyPieChart" data-line-width="8" data-percent="70" data-size="200"><span>70%</span></div>
                            <h3 class="title margin-top">logo design</h3>
                            <p>A first impression</p>
                        </div>
                        <div class="col-md-3 col-sm-5 text-center count-box">
                            <div class="chart easyPieChart" data-line-width="8" data-percent="50" data-size="200"><span>50%</span></div>
                            <h3 class="title margin-top">Motion Design</h3>
                            <p>Clearly defined </p>
                        </div>
                        <div class="col-md-3 col-sm-5 text-center count-box">
                            <div class="chart easyPieChart" data-line-width="8" data-percent="92" data-size="200"><span>92%</span></div>
                            <h3 class="title margin-top">Graphic Design</h3>
                            <p>Marketing and branding</p>
                        </div>
                        <div class="col-md-3 col-sm-5 text-center count-box">
                            <div class="chart easyPieChart" data-line-width="8" data-percent="100" data-size="200"><span>100%</span></div>
                            <h3 class="title margin-top">Web Interactive</h3>
                            <p>Interlace our creative</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Piechart end --> 

            <!-- team -->
            <section id="team" class="team gray-bg">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">our team</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">We are a fun mix of designers and strategists with a great passion for all things creative. We love what we do, it's a way of life.</p>
                        </div>
                    </div>
                    <div class="row os-animation" data-os-animation="fadeInUp">
                        <p class="lead width">We grow brands by making decisions that are rooted in business strategy.</p>
                    </div>
                    <div class="row os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                            <figure class="team-profile"><!-- 800 X 966 --><img src="http://placehold.it/497x600" alt="team-01" />
                                <figcaption class="text-center our-team">
                                    <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="orange-line"></div>
                                    <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </figcaption>
                            </figure>
                            <div class="namerol"> <span>Sara smith</span>
                                <div class="orange-line text-center"></div>
                                <p class="content">Founder and ceo</p>
                            </div>
                        </div>
                        <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                            <figure class="team-profile"><img src="http://placehold.it/497x600" alt="team-02" />
                                <figcaption class="text-center our-team">
                                    <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="orange-line"></div>
                                    <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </figcaption>
                            </figure>
                            <div class="namerol"> <span>sommer Christian</span>
                                <div class="orange-line text-center"></div>
                                <p class="content">creative studio head</p>
                            </div>
                        </div>
                        <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                            <figure class="team-profile"><img src="http://placehold.it/497x600" alt="team-03" />
                                <figcaption class="text-center our-team">
                                    <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="orange-line"></div>
                                    <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </figcaption>
                            </figure>
                            <div class="namerol"> <span>Jane lupkin</span>
                                <div class="orange-line text-center"></div>
                                <p class="content">magento developer</p>
                            </div>
                        </div>
                        <div class="col-md-3 team-details os-animation text-center" data-os-animation="bounceIn">
                            <figure class="team-profile"><img src="http://placehold.it/497x600" alt="team-04" />
                                <figcaption class="text-center our-team">
                                    <p class="content-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="orange-line"></div>
                                    <div class="social"> <a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></div>
                                </figcaption>
                            </figure>
                            <div class="namerol"> <span>Sebastian roll</span>
                                <div class="orange-line text-center"></div>
                                <p class="content">Logo / branding designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center row os-animation" data-os-animation="fadeInUp">
                        <p class="light">Creative thinkers, clever developer and marketing</p>
                        <p class="lead big">superheroes apply here.</p>
                        <p class="label">we're hiring</p>
                    </div>
                </div>
            </section>
            <!-- team end --> 

            <!-- counter -->
            <section id="conter-box" class="conter-box">
                <div class="color-overlay">
                    <div class="container">
                        <div class="row os-animation" data-os-animation="fadeInUp">
                            <div class="col-md-3 col-sm-5 text-center">
                                <div id="conterbox-01" class="counterBox counterWithAnimation" data-delay="400" data-animation="fade-in-left" data-countNmber="312"> <span class="counterBoxNumber">312</span>
                                    <div class="orange-line"></div>
                                    <h6 class="counterBoxDetails">Pizzas Ordered</h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5 text-center">
                                <div id="conterbox-02" class="counterBox counterWithAnimation" data-delay="400" data-animation="fade-in-left" data-countNmber="980"> <span class="counterBoxNumber">980</span>
                                    <div class="orange-line"></div>
                                    <h6 class="counterBoxDetails">Happy Clients</h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5 text-center">
                                <div id="conterbox-03" class="counterBox counterWithAnimation" data-delay="400" data-animation="fade-in-left" data-countNmber="810"> <span class="counterBoxNumber">810</span>
                                    <div class="orange-line"></div>
                                    <h6 class="counterBoxDetails">Projects Completed</h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-5 last text-center">
                                <div id="conterbox-04" class="counterBox counterWithAnimation" data-delay="400" data-animation="fade-in-left" data-countNmber="600"> <span class="counterBoxNumber">600</span>
                                    <div class="orange-line"></div>
                                    <h6 class="counterBoxDetails">Comments</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter --> 

            <!-- blog -->
            <section id="blog" class="blog gray-bg">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">our blog</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">We are a fun mix of designers and strategists with a great passion for all things creative. We love what we do, it's a way of life.</p>
                        </div>
                    </div>
                    <div id="group-01" class="row blog-content os-animation group show active" data-os-animation="fadeInUp">
                        <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-01" />
                            <div class="col-md-1 blog-day text-center"> <span>15</span> </div>
                        </div>
                        <div class="col-md-12 frameOverlay">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="blog-title">
                                    <h5 class="title">standard post with preview picture</h5>
                                    <span class="month">June 15, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                <div class="blog-content-out">
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <a href="{{ route('demo-tiga-blog') }}" class="small-button text-left">more details</a> </div>
                            </div>
                        </div>
                    </div>
                    <div id="group-02" class="row blog-content os-animation group show" data-os-animation="fadeInUp">
                        <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-02" />
                            <div class="col-md-1 blog-day text-center"> <span>20</span> </div>
                        </div>
                        <div class="col-md-12 frameOverlay">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="blog-title">
                                    <h5 class="title">standard post with gallery</h5>
                                    <span class="month">June 20, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                <div class="blog-content-out">
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <a href="{{ route('demo-tiga-blog') }}" class="small-button text-left">more details</a></div>
                            </div>
                        </div>
                    </div>
                    <div id="group-03" class="row blog-content os-animation group show" data-os-animation="fadeInUp">
                        <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-03" />
                            <div class="col-md-1 blog-day text-center"> <span>25</span> </div>
                        </div>
                        <div class="col-md-12 frameOverlay">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="blog-title">
                                    <h5 class="title">simple post with preview video</h5>
                                    <span class="month">June 25, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                <div class="blog-content-out">
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <a href="{{ route('demo-tiga-blog') }}" class="small-button text-left">more details</a></div>
                            </div>
                        </div>
                    </div>
                    <div id="group-04" class="row blog-content os-animation group show" data-os-animation="fadeInUp">
                        <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-04" />
                            <div class="col-md-1 blog-day text-center"> <span>27</span> </div>
                        </div>
                        <div class="col-md-12 frameOverlay">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="blog-title">
                                    <h5 class="title">standard post with preview picture</h5>
                                    <span class="month">June 27, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                <div class="blog-content-out">
                                    <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <a href="{{ route('demo-tiga-blog') }}" class="small-button">more details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <div id="group-05" class="row blog-content os-animation" data-os-animation="fadeInUp">
                            <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-01" />
                                <div class="col-md-1 blog-day text-center"> <span>29</span> </div>
                            </div>
                            <div class="col-md-12 frameOverlay">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="blog-title">
                                        <h5 class="title">standard post with preview picture</h5>
                                        <span class="month">June 29, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                    <div class="blog-content-out">
                                        <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <a href="{{ route('demo-tiga-blog') }}" class="small-button">more details</a></div>
                                </div>
                            </div>
                        </div>
                        <div id="group-06" class="row blog-content os-animation" data-os-animation="fadeInUp">
                            <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-02" />
                                <div class="col-md-1 blog-day text-center"> <span>30</span> </div>
                            </div>
                            <div class="col-md-12 frameOverlay">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="blog-title">
                                        <h5 class="title">standard post with preview picture</h5>
                                        <span class="month">June 30, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                    <div class="blog-content-out">
                                        <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <a href="{{ route('demo-tiga-blog') }}" class="small-button">more details</a></div>
                                </div>
                            </div>
                        </div>
                        <div id="group-07" class="row blog-content os-animation" data-os-animation="fadeInUp">
                            <div class="col-md-12 blog-image"> <img src="http://placehold.it/1100x113" class="fadeIn blog-img" alt="blog-img-03" />
                                <div class="col-md-1 blog-day text-center"> <span>31</span> </div>
                            </div>
                            <div class="col-md-12 frameOverlay">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="blog-title">
                                        <h5 class="title">standard post with preview picture</h5>
                                        <span class="month">June 31, 2013  &nbsp;/&nbsp;  By Admin in Creative, Design</span> </div>
                                    <div class="blog-content-out">
                                        <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <a href="{{ route('demo-tiga-blog') }}" class="small-button">more details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row buttons border-top os-animation text-center" data-os-animation="fadeInUp"> <a id="load-more" class="small-button text-center">Load More Blog</a>&nbsp;&nbsp;<a href="{{ route('demo-tiga-blog') }}" class="small-button text-center">View All Blog</a> </div>
                </div>
            </section>
            <!-- blog end --> 

            <!-- client logos -->
            <section class="client-logos">
                <div class="color-overlay">
                    <div class="container">
                        <div class="row os-animation" data-os-animation="bounceIn">
                            <div class="clients-slider text-center">
                                <ul class="slides">
                                    <li><img alt="Client Logo" src="http://placehold.it/350x89" /></li>
                                    <li><img alt="Client Logo" src="http://placehold.it/350x89" /></li>
                                    <li><img alt="Client Logo" src="http://placehold.it/350x89" /></li>
                                    <li><img alt="Client Logo" src="http://placehold.it/350x89" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- client logos end  --> 

            <!-- contact -->
            <section id="contact" class="contact gray-bg">
                <div class="container">
                    <div class="row border-bottom os-animation text-center" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 title-text border-right">
                            <h2 class="title">Contact</h2>
                        </div>
                        <div class="col-md-6 col-sm-6 simple-text">
                            <p class="description text-left">How we can help you. We like to talk and on the strength of that you are invited for a coffee at our head office.</p>
                        </div>
                    </div>
                    <div class="row contact-info os-animation" data-os-animation="fadeInUp">
                        <div class="col-md-6 col-sm-6 left-part">
                            <div class="head"> <span class="contact-title">how to reach us</span>
                                <p class="content contact-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="head"> <span class="contact-title">our address</span>
                                <p class="content contact-text address">Sturlly Technologies<br>
                                    PO Box 16122, Collins Street West,<br>
                                    Victoria 8007, United States.</p>
                            </div>
                            <ul class="icon-list">
                                <li><i class="fa fa-phone"></i>+61 123 456 7890</li>
                                <li class="divider"></li>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:no-reply@domain.com">no-reply@domain.com</a></li>
                                <li class="divider"></li>
                                <li><i class="fa fa-globe"></i><a href="javascript:;">www.domain.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 right-part">
                            <div class="form-group">
                                <form action="javascript:void(0)" method="post">
                                    <input class="form-control" name="name" placeholder="Your Name" type="text">
                                    <input class="form-control" name="email" placeholder="Your Email" type="text">
                                    <input class="form-control" name="website" placeholder="Your Website" type="text">
                                    <textarea class="form-control" placeholder="Your Comment" name="comment"></textarea>
                                    <button id="submit-button" class="small-button text-left">Send message</button>
                                </form>
                            </div>
                            <div id="success"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end --> 

            <!-- map -->
            <section class="map">
                <div class="map-overlay">
                    <button class="map-button" value="Show map">Locate Us on Map</button>
                </div>
                <div id="googlemap">
                    <div id="map" data-address="121 King St Melbourne VIC 3000 Australia" data-text="<p><strong>Envato Headquarters.</strong><br>121 King Street, Melbourne<br>Victoria 3000 Australia.<br>Phone: +61 3 8376 6284</p>"></div>
                </div>
            </section>
            <!-- map end --> 

            <!-- footer -->
            <footer id="footer" class="footer">
                <div class="color-overlay">
                    <div class="container">
                        <div class="row os-animation" data-os-animation="bounceIn">
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
            <!-- footer end --> 

            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 

        </div>
        <!-- main page end --> 
        <!-- javascript  --> 
        <!-- Placed at the End of the document so the pages load faster --> 
        <!-- jQuery --> 
        
        @include('3.script')
