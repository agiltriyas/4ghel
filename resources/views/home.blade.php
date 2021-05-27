<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery | Alpins | Mountain And Trekking Template</title>
    <meta name="description" content="">
    <script src="{{ asset('main/themekit/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('main/themekit/scripts/main.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('main/themekit/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/css/glide.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/css/media-box.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/css/contact-form.css') }}">
    <link rel="stylesheet" href="{{ asset('main/themekit/skin.css')}}">
    <link rel="icon" href="media/favicon.png">
</head>
<body class="page-main">
    <div id="preloader"></div>
    <nav class="menu-classic menu-fixed align-right" data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                <a href="index.html">
                    <img class="logo-default scroll-hide" src="{{ asset('main/themekit/logo-4ghel.png')}}" alt="logo" width="200" height="200"/>
                    <img class="logo-retina scroll-hide" src="{{ asset('main/themekit/logo-4ghel.png')}}" alt="logo" />
                    <img class="logo-default scroll-show" src="{{ asset('main/themekit/logo-4ghel.png')}}" alt="logo" />
                    <img class="logo-retina scroll-show" src="{{ asset('main/themekit/logo-4ghel.png')}}" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('main/themekit/hero.jpg')}}" data-offset="0">
        <div class="container">
            <h1>4ghel Studio</h1>
            <h2>Gallery for demo landing page website with several category</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
            </ol>
        </div>
    </header>
    <main>
        <section class="section-base ">
            <div class="container">
                <div class="album" data-album-anima="fade-bottom" data-columns-md="2" data-columns-sm="1">
                    <div class="album-list">   
                        <div class="album-box">
                            <a href="#" class="img-box img-scale">
                                <img src="https://picsum.photos/id/366/800/500" alt="" />
                            </a>
                            <div class="caption">
                                <h3>Demo Album 1</h3>
                                <h3><a href="{{ route('demo-satu') }}" style="text-decoration:none;color:white"><b>Live Demo</b></a></h3>
                            </div>
                        </div>
                        <div class="album-box">
                            <a href="#" class="img-box img-scale">
                                <img src="https://picsum.photos/id/119/800/500" alt="" />
                            </a>
                            <div class="caption">
                                <h3>Demo Album 2</h3>
                                <h3><a href="{{ route('demo-dua') }}" style="text-decoration:none;color:white"><b>Live Demo</b></a></h3>
                            </div>
                        </div>
                        <div class="album-box">
                            <a href="#" class="img-box img-scale">
                                <img src="https://picsum.photos/id/60/800/500" alt="" />
                            </a>
                            <div class="caption">
                                <h3>Demo Album 3</h3>
                                <h3><a href="{{ route('demo-tiga') }}" style="text-decoration:none;color:white"><b>Live Demo</b></a></h3>
                            </div>
                        </div>
                        <div class="album-box">
                            <a href="#" class="img-box img-scale">
                                <img src="https://picsum.photos/id/62/800/500" alt="" />
                            </a>
                            <div class="caption">
                                <h3>Demo Album 4</h3>
                                <h3><a href="{{ route('demo-empat') }}" style="text-decoration:none;color:white"><b>Live Demo</b></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="cnt-album-box">
                        <p class="album-title"><span>...</span> <a>Album list</a></p>
                        <div class="album-item">
                            <div class="grid-list list-gallery" data-lightbox-anima="fade-top" data-columns="3" data-columns-md="2">
                                <div class="grid-box">
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="list-pagination">
                                    <ul class="pagination" data-page-items="6" data-pagination-anima="fade-right"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="album-item">
                            <div class="grid-list list-gallery" data-lightbox-anima="fade-top" data-columns="3" data-columns-md="2">
                                <div class="grid-box">
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="list-pagination">
                                    <ul class="pagination" data-page-items="6" data-pagination-anima="fade-right"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="album-item">
                            <div class="grid-list list-gallery" data-lightbox-anima="fade-top" data-columns="3" data-columns-md="2">
                                <div class="grid-box">
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="list-pagination">
                                    <ul class="pagination" data-page-items="6" data-pagination-anima="fade-right"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="album-item">
                            <div class="grid-list list-gallery" data-lightbox-anima="fade-top" data-columns="3" data-columns-md="2">
                                <div class="grid-box">
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="list-pagination">
                                    <ul class="pagination" data-page-items="6" data-pagination-anima="fade-right"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="album-item">
                            <div class="grid-list list-gallery" data-lightbox-anima="fade-top" data-columns="3" data-columns-md="2">
                                <div class="grid-box">
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-item">
                                        <a class="img-box" href="http://via.placeholder.com/800x500">
                                            <img src="http://via.placeholder.com/800x500" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="list-pagination">
                                    <ul class="pagination" data-page-items="6" data-pagination-anima="fade-right"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>4ghel Studio</h3>
                    <p>Web Development | App Development</p>
                </div>
                <div class="col-lg-4">
                    <h3>Contacts</h3>
                    <ul class="icon-list icon-line">
                        <li>Jakarta</li>
                        <li>admin@4ghel.com</li>
                        <li>081293715569</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="google"><i class="icon-google"></i></a>
                    </div>
                    <hr class="space-sm" />
                    <p>Subscribe to our newsletter of follow us on the social channels to stay tuned.</p>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© 2021 4ghel Studio.</span>
                <span><a href="contacts.html">Contact us</a> | <a href="#">Privacy policy</a></span>
            </div>
        </div>
        <link rel="stylesheet" href="{{ asset('main/themekit/media/icons/iconsmind/line-icons.min.css') }}">
        <script src="{{ asset('main/themekit/scripts/parallax.min.js') }}"></script>
        <script src="{{ asset('main/themekit/scripts/glide.min.js') }}"></script>
        <script src="{{ asset('main/themekit/scripts/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('main/themekit/scripts/pagination.min.js') }}"></script>
    </footer>
</body>
</html>