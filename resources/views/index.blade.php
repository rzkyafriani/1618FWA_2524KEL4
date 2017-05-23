<!DOCTYPE html>
<html>
<head>
<title>GVKaraoke</title>
<!-- Custom Theme files -->
<meta charshet="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Warbler Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="{{asset('web/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('web/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" /> 
<!-- js -->
<script src="{{asset('web/js/jquery-1.11.1.min.js')}}"></script> 
<!-- //js -->   
<!--google-fonts-->
<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,100italic,100,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//google-fonts-->
<!--pop-up-->
<script src="{{asset('web/js/menu_jquery.js')}}"></script>
<!--//pop-up-->
<!--animate-->
<link href="{{asset('web/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('web/js/wow.min.js')}}"></script>
    <script>
         new WOW().init();
    </script>
    <style type="text/css">
    .footer{
        background-color: grey;
    }
    body{
        background-color: grey;
    }
    </style>
<!--//end-animate-->
</head>
<body>
    
    <div class="header" id="home">
        <div class="container">
            <div id="loginContainer" class="sign-farm">
                <button type="button" id="loginButton" class="wow fadeInDown animated" data-wow-delay=".5s"><span class="glyphicon glyphicon-user" aria-hidden="true">Login</span></button>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Username</label>
                                <input type="text" name="email" id="email">
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                            </fieldset>
                            <input type="submit" id="login" value="Sign in">
                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                        </fieldset>
                        
                    </form>
                </div>
            </div>          
            <form class="navbar-form navbar-right search-box wow fadeInDown animated" data-wow-delay=".5s">
                <!-- <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </div> -->
            </form> 
            <div class="clearfix"> </div>           
        </div>  
    </div>  

    <!--navigation-->


    <div class="top-nav">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-center cl-effect-15">
                        <li><a href="#home" class="active scroll">Beranda</a></li>
                        <li><a href="tentang" class="scroll" data-hover="Tentang">Tentang</a></li>                   
                        <!-- <li><a href="#team" class="scroll" data-hover="Team">Team</a></li> -->
                            <li><a href="#album" class="scroll" data-hover="Menu">Menu</a></li>
                        <li><a href="#album" class="scroll" data-hover="Room">Room</a></li>
                        <li><a href="#news" class="scroll" data-hover="Daftar Lagu">Daftar Lagu</a></li>          
                      <!--   <li><a href="#contact" class="scroll" data-hover="Contact">Contact</a></li> -->
                    </ul>   
                    <div class="clearfix"> </div>
                </div>
            </div>  
        </nav>      
    </div>  
    <!--navigation-->

    <div class="banner-info">
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner bnr-one">
                    </div>
                </li>
                <li>
                    <div class="banner banner1">
                    </div>
                </li>
                <li>
                    <div class="banner banner2">
                    </div>
                </li>                               
            </ul>           
            <div class="clearfix"> </div>
        </div>
        <div class="banner-text">
            <h1><a href="index.html" class="wow fadeInUp animated" data-wow-delay=".5s"> Goyang Vista Karaoke </a></h1>
            <h2 class="wow fadeInUp animated" data-wow-delay=".7s">Berdendang Bersama Kami !  </h2>
            <a href="#about" class="scroll bnr-about wow fadeInUp animated" data-wow-delay=".9s">About</a>
            <a href="#news" class="scroll bnr-about bnr-news wow fadeInUp animated" data-wow-delay="1s">Room</a>
        </div>
    </div>
    
   <div class="footer">
            <div class="container"> 
                <div class="icons wow fadeInUp animated" data-wow-delay=".5s">  
                    <ul>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><img src="{{asset('web/images/i1.png')}}" alt=""/></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><img src="{{asset('web/images/i2.png')}}" alt=""/> </a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google+"><img src="{{asset('web/images/i3.png')}}" alt=""/></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="LinkedIn"><img src="{{asset('web/images/i4.png')}}" alt=""/> </a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><img src="{{asset('web/images/i5.png')}}" alt=""/> </a></li>
                    </ul>
                    <script>$(function () {
                      $('[data-toggle="tooltip"]').tooltip()
                    })</script>
                </div>
                <p class="wow fadeInUp animated" data-wow-delay=".7s">© 2016 Warbler . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>                 
            </div>
        </div>
    </div>


    <script src="{{asset('web/js/responsiveslides.min.js')}}"></script>
        <script>
            // You can also use "$(window).load(function() {"
                $(function () {
                 //Slideshow 3
                    $("#slider3").responsiveSlides({
                    auto: true,
                    pager:true,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                    $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                }); 
            });
        </script>
        <!--//End-slider-script -->     
    <!-- start-smooth-scrolling-->
    <script type="text/javascript" src="{{asset('web/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/easing.js')}}"></script> 
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
    <!--//end-smooth-scrolling-->
    <!--smooth-scrolling-of-move-up-->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <!--//smooth-scrolling-of-move-up-->
    <!-- pop-up-box -->
    <script type="text/javascript" src="{{asset('web/js/modernizr.custom.js')}}"></script>   
    <script src="{{asset('web/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
    <!--//pop-up-box -->
    <!--magnificPopup-->
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });                                                                         
            });
        </script>
        <!--//magnificPopup-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('web/js/bootstrap.js')}}"></script>
    </body>
</html>
