<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>  
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Full State  - Real State Template">
        <meta name="author" content="iwthemes.com">   
        
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width,  minimum-scale=1,  maximum-scale=1">
        <!-- Your styles -->
        <link href="/css/style.css" rel="stylesheet" media="screen">  

        <!-- Skins Theme -->
        <link href="/js/jquery.min.js" rel="stylesheet" media="screen" class="skin">

        <!-- Custom Adjustments -->
        <link href="/css/riatastyle.css" rel="stylesheet" media="screen">

        <!-- WOW Slider -->
        <link rel="stylesheet" type="text/css" href="/css/stylewow.css" />
        <script type="text/javascript" src="/js/wow/jquerywow.js"></script>

        <!-- Favicons -->
        <link rel="shortcut icon" href="/img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="/img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-touch-icon-114x114.png">  

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- styles for IE -->
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen" />
        <![endif]-->
        
        <!-- Skins Changer-->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    </head>
    <body> 

        <!-- layout-->
        <div id="layout">

            <!-- Nav-->
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo page-scroll">
                            <a href="/"><img src="/img/chesmarlogo200x46.png" alt="chesmar logo"></a>
                        </div>
                        <!-- Menu-->
                        <ul id="menu" class="col-md-9 sf-menu page-scroll">
                            
                            <li><a class="page-scroll" href="http://chesmar.com/communities/san-antonio/riata">ABOUT</a></li>
                            <li>
                                <a class="page-scroll" href="/#floor-plans">FLOOR PLANS</a>
                                <ul>                                  
                                    <li><a href="/floorplans/branton">Branton</a></li>
                                    <li><a href="/floorplans/bryce">Bryce</a></li>
                                    <li><a href="/floorplans/casandra">Casandra</a></li>
                                    <li><a href="/floorplans/ellison">Ellison</a></li>
                                    <li><a href="/floorplans/gallo">Gallo</a></li>
                                    <li><a href="/floorplans/harley">Harley</a></li>
                                    <li><a href="/floorplans/kendall">Kendall</a></li>
                                    <li><a href="/floorplans/nolan">Nolan</a></li>
                                    <li><a href="/floorplans/sheffield">Sheffield</a></li>

                                </ul>
                            </li>
                                                                        
                            <li><a class="page-scroll" href="/#contact">CONTACT</a></li>
                        </ul>
                        <!-- End Menu-->
                    </div>
                </div>
            </nav>
            <!-- End Nav-->

            @yield('content')

            <!-- Footer area - footer_medium -->
            <footer class="section_area footer_medium">
                <div class="container">
                    <div class="row">

                       <!-- Contact Footer -->
                       <div class="col-md-4">
                          <h3>Contact Ralph</h3>                        
                            <ul class="contact_footer">
                                <li>
                                    <i class="fa fa-envelope"></i><a href="mailto:ralphplaza@hotmail.com?Subject=Hello%20Ralph" target="_top">ralphplaza@hotmail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i><a href="tel:210-215-1090">(210) 215-1090</a>
                                 </li>
                                <li class="location">
                                    <i class="fa fa-home"></i><a href="https://www.google.com/maps/place/2901+Mineral+Springs,+Schertz,+TX+78108/@29.6163353,-98.2411752,17z/data=!3m1!4b1!4m2!3m1!1s0x865c93e7a404e659:0x2620d09eeee55c09"> 2901 Mineral Springs</a>
                                </li>  
                                <li class="location">
                                    <i class="fa fa-road"></i><a href="https://www.google.com/maps/place/2901+Mineral+Springs,+Schertz,+TX+78108/@29.6163353,-98.2411752,17z/data=!3m1!4b1!4m2!3m1!1s0x865c93e7a404e659:0x2620d09eeee55c09"> Schertz, Texas 78108</a>
                                </li>                                   
                            </ul>               
                        </div>
                        <!-- End Contact Footer -->

                        <!-- Recent Links -->
                        <div class="col-md-4 links">
                            <h3>Useful links</h3>
                            <ul>
                                <li><a href="http://chesmar.com/the-legend-of-chesmar">About Chesmar Homes</a></li>
                                <li><a href="http://chesmar.com/communities/san-antonio/riata">Local Area Information</a></li>
                                <li><a href="/#floor-plans">Floor Plans</a></li>
                                <li><a href="http://chesmar.com/meet-the-team/ralph-plaza">About Ralph</a></li>
                            </ul>
                        </div>
                        <!-- End Recent Links -->

                        <!-- Testimonials -->
                        <div class="col-md-4">
                            <ul class="testimonial-carousel">
                                <!-- Item Testimonial -->
                                <li>
                                    <div class="testimonials">
                                        <p>Ralph was extremely helpful when my family and I were shopping for our home. I would highly recommend him to anyone.</p>
                                        <span class="arrow_testimonials"></span>
                                    </div>        
                                    <h6 class="testimonial_autor">Juan David Rendon - Home Owner</h6> 
                                </li>
                                <!-- Item Testimonial -->

                                <!-- Item Testimonial -->
                                <li>
                                    <div class="testimonials">
                                        <p>I would go to Ralph anytime I have questions about homes. He knows what he's doing!</p>
                                        <span class="arrow_testimonials"></span>
                                    </div>        
                                    <h6 class="testimonial_autor">Jennifer Martinez - Home Owner</h6> 
                                </li>
                                <!-- Item Testimonial -->

                                <!-- Item Testimonial -->
                                <li>
                                    <div class="testimonials">
                                        <p>If you're looking for somebody to give you an honest and relaxed home-shopping experience, look no further.</p>
                                        <span class="arrow_testimonials"></span>
                                    </div>        
                                    <h6 class="testimonial_autor">Federic Gordon - Home Owner</h6> 
                                </li>
                                <!-- Item Testimonial -->
                            </ul>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                </div>
            </footer>
            <!-- End Footer area - footer_medium -->

            <!-- Footer area - footer_down -->
            <footer class="section_area footer_down">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6">
                            <p>Copyright &copy; {{ date("Y") }}. All Rights Reserved.</p>             
                        </div>
                        <div class="col-md-6">
                            <ul class="social tooltip-demo">
                                <li data-toggle="tooltip" title="Facebook">
                                    <a href="https://www.facebook.com/ChesmarHomesSA"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li data-toggle="tooltip" title="Email">
                                    <a href="mailto:ralphplaza@hotmail.com?Subject=Hello%20Ralph"><i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer area- footer_down -->
        </div>
        <!-- End layout-->
   
        <!-- ======================= JQuery libs =========================== -->
        <!-- Core JS Libraries -->
        <script src="/js/jquery.min.js"></script>         
        <!--Nav-->
        <script type="text/javascript" src="/js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="/js/nav/superfish.js"></script>  
        <script type="text/javascript" src="/js/nav/hoverIntent.js"></script>              
        <!--Totop-->
        <script type="text/javascript" src="/js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="/js/slide/camera.js" ></script>      
        <script type='text/javascript' src='/js/slide/jquery.easing.1.3.min.js'></script> 
        <!--owlcarousel-->
        <script type='text/javascript' src='/js/owlcarousel/owl.carousel.js'></script> 
        <!--efect_switcher-->
        <script type='text/javascript' src='/js/efect_switcher/jquery.content-panel-switcher.js'></script>         
        <!--Theme Options-->
        <script type="text/javascript" src="/js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="/js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script src="/js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="/js/main.js"></script>

        <!-- Wow Slider -->
        <script type="text/javascript" src="/js/wow/wowslider.js"></script>
        <script type="text/javascript" src="/js/wow/scriptwow.js"></script>
        
        <!-- ======================= End JQuery libs =========================== -->
    </body>
</html>