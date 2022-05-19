<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Travel</title>
        <meta name="description" content="">
        <meta name="author" content="">

    <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('/css/base.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/vendor.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/main.css')}}" type="text/css">

    <!-- script
        ================================================== -->
        <script src="/js/modernizr.js"></script>
        <script src="/js/pace.min.js"></script>

    <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="/images/mountain.ico" type="image/x-icon">
        <link rel="icon" href="/images/mountain.ico" type="image/x-icon">

    </head>



    <body id="top">

      <!-- pageheader
        ================================================== -->
        <section class="s-pageheader s-pageheader--home">

            <header class="header">
                <div class="header__content row">

                    <div class="header__logo">
                        <a class="logo" href="/">
                            <img src="/images/logo.png" alt="Homepage">
                        </a>
                    </div> <!-- end header__logo -->

                    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                    <nav class="header__nav-wrap">

                        <ul class="header__nav">
                            <li><a href="/Home">Home</a></li>
                            <li><a href="/News">News</a></li>
                            <li><a href="/Blog">Blog</a></li>
                            @foreach($menu_data as $item)
  
                            @if($item->parent==0)
                            @if($item->header!="Home"&&$item->header!="News"&&$item->header!="Blog")
                            <li class="has-children"><a href="/{{$item->header}}">{{$item->header}}</a>
                                <ul class="sub-menu">

                                    <?php 
                                    $attachdata = DB::table("posts")->where("parent", "=", $item->id)->get();  
                                    ?>
                                    @if($attachdata !=null)
                                    @foreach($attachdata as $parents)
                                        <li><a href="/{{$item->header}}/{{$parents->name}}">{{$parents->name}}</a></li>
                                    @endforeach
                                    @endif
                                    
                                </ul>
                            </li>
                            @endif
                            @endif
                            @endforeach 

                            <li><a href="/Console">Console</a></li>
                        </ul> <!-- end header__nav -->

                        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                    </nav> <!-- end header__nav-wrap -->

                </div> <!-- header-content -->
            </header> <!-- header -->

        </section> <!-- end s-pageheader -->


        <section class="s-content">

            @yield('content')

        </section>




    <!-- s-footer
        ================================================== -->
        <footer class="s-footer">

            <div class="s-footer__main">
                <div class="row">

                    <div class="col-two md-four mob-full s-footer__sitelinks">

                        <h4>Quick Links</h4>

                        <ul class="s-footer__linklist">
                            @foreach($menu_data as $item)
  
                            @if($item->parent==0)
                            <li class="has-children"><a href="/{{$item->header}}">{{$item->header}}</a>   
                            @endif

                            </li>
                            @endforeach 
                        </ul>

                    </div> <!-- end s-footer__sitelinks -->
                    <div class="col-two md-four mob-full s-footer__sitelinks">

                        <h4>Quick Links</h4>

                        <ul class="s-footer__linklist">
                            <li><a href="/">Home</a></li>
                            <li><a href="/News">News</a></li>
                            <li><a href="/Blog">Blog</a></li>
                            <li><a href="/Categories">Categories</a></li>
                            <li><a href="/Cities">Cities</a></li>
                            <li><a href="/Seasons">Seasons</a></li>
                            <li><a href="/Console">Console</a></li>
                        </ul>
                    </div> <!-- end s-footer__sitelinks -->

                </div>
            </div> <!-- end s-footer__main -->

            <div class="s-footer__bottom">
                <div class="row">
                    <div class="col-full">
                        <div class="s-footer__copyright">
                            <span>© Copyright Travel 2022</span> 
                        </div>

                        <div class="go-top">
                            <a class="smoothscroll" title="Back to Top" href="#top"></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end s-footer__bottom -->

        </footer> <!-- end s-footer -->


    <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>


    <!-- Java Script
        ================================================== -->
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

    </body>

    </html>