
<!DOCTYPE HTML>
<html>
<head>
    <title>Myanmar Music Art (Mobile App)</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('css/my.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Stardos+Stencil:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

    <script src="{{asset('js/waypoints.min.js')}}"></script>

    <script src="{{asset('js/jquery.counterup.js')}}"></script>

    <link href="{{asset('js/js-image-slider.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/js-image-slider.js')}}" type="text/javascript"></script>


    <script src="{{asset('js/my.js')}}" type="text/javascript"></script>



    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!---End-smoth-scrolling---->
</head>
<body>
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">

            </div>
            <div class="top-menu">
                <span class="menu"><img src="images/nav.png" alt=""/></span>
                <ul>
                    <li><a class="active" href="{{url('/')}}" class="scroll">Home</a></li>
                    <li><a href="#download" class="scroll">Download လုပ်ရန်</a></li>
                   
                    <li><a href="#features" class="scroll">Features များ</a></li>
                    <li><a href="#team" class="scroll">Screen Shots</a></li>
                    <li><a href="#contact" class="scroll">ဆက်သွယ်ရန်</a></li>
            </div>
            <!-- script for menu -->

            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>

            <!-- //script for menu -->


            <div class="clearfix"></div>
        </div>




        <div id="sliderFrame">



        <div class="center-img" id="slider">
            <img src="{{asset('images/nexus1.png')}}" alt="">
            <img src="{{asset('images/slide2.png')}}" alt="">
            <img src="{{asset('images/slide3.png')}}" alt="">
            <img src="{{asset('images/slide4.png')}}" alt="">
            <img src="{{asset('images/slide5.png')}}" alt="">
            <img src="{{asset('images/slide6.png')}}" alt="">
            <img src="{{asset('images/slide7.png')}}" alt="">
            <img src="{{asset('images/slide8.png')}}" alt="">

        </div>

        </div>
    </div>
</div>

@foreach($downloads as $download)


    <div class="content">
    <div class="service-section" id="download">
        <div class="container">
            <h3><span></span> Download လုပ်ရန် <span></span></h3>
            <div class="service-grids">

                <div class="col-md-3 service-grid">


                </div>

                <div class="col-md-3 service-grid">

                    <a href="https://play.google.com/store/apps/details?id=mmsd.phyochan.mma" target="_blank">
                    <img src="{{asset('images/appstore2.png')}}"></a>
                    <p>Google Playstore တွင် Download ရယူရန်</p>
                </div>


                <div class="col-md-3 service-grid">

                    <form action="{{url('/',$download -> id)}}" method="post">

                        <input type="hidden" name="_token" value="{{ csrf_token()}}">


                        <input type="image" src="{{asset('images/download.png')}}" onsubmit="submit();" />



                    </form>


                    <p>တိုက်ရိုက် Download ရယူရန်</p>

                </div>




                <div class="clearfix"></div>
            </div>
        </div>
    </div>





            <div class="content">
                <div class="service-section" id="count">
                    <div class="container">

                        <img src="{{asset('images/mma.png')}}" alt="">

                        <br>

                        <h4><span></span>v1.3<span></span></h4>
                        <br>
                        <br>
                        <h3><span></span> Download အရေအတွက်<span></span></h3>
                        <br>


                      <h3 class="counter">{{$download -> count}}</h3>




                    </div>
                </div>

                @endforeach

    <div class="feature" id="features">
        <div class="container">
            <h3><span></span> ပါ၀င်သော Feature များ<span></span></h3>
            <div class="feature-grids">
                <div class="feature1">
                    <div class="col-md-6 feature-grid">
                        <img src="{{asset('images/ss1.png')}}">
                    </div>
                    <div class="col-md-6 feature-grid1">
                        <h4>Zawgyi Or Unicode Support ပေးခြင်း</h4>
                        <p>Zawgyi သို့မဟုတ် Unicode အသုံးပြုနိုင်ရန်ပြုလုပ်ပေးထားသောကြောင့် မိမိနှစ်သက်ရာအသုံးပြုနိင်ပါသည်။</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="feature2">
                    <div class="col-md-6 feature-grid2">
                        <h4>မိမိနှစ်သက်သောသီချင်းရွေးချယ်နိုင်ခြင်း</h4>
                        <p>မိမိနှစ်သက်သော သီချင်းများကိုသာရွေးချယ်ကြည့်နိင်ပါသည်။</p>
                    </div>
                    <div class="col-md-6 feature-grid3">
                        <img src="{{asset('images/ss2.png')}}">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="feature3">
                    <div class="col-md-6 feature-grid">
                        <img src="{{asset('images/ss3.png')}}">
                    </div>
                    <div class="col-md-6 feature-grid1">
                        <h4>အလွယ်တကူ Download ရယူနိုင်ခြင်း</h4>
                        <p>Download Method နှစ်မျိုးထည့်သွင်းပေးထားသည့်အတွက် မိမိနှစ်သက်ရာရွေးချယ်နိုင်ပါသည်။</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="feature2">
                    <div class="col-md-6 feature-grid2">
                        <h4>MTV များကြည့်နိုင်ခြင်း</h4>
                        <p>မိမိနှစ်သက်ရာ MTV များကိုရွေးချယ်ကြည့်နိုင်ပါသည်။</p>
                    </div>
                    <div class="col-md-6 feature-grid3">
                        <img src="{{asset('images/ss4.png')}}">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="feature3">
                    <div class="col-md-6 feature-grid">
                        <img src="{{asset('images/ss5.png')}}">
                    </div>
                    <div class="col-md-6 feature-grid1">
                        <h4>သီချင်းတောင်းဆိုနိုင်ခြင်း</h4>
                        <p>မိမိလိုချင်တဲ့ သီချင်းကိုအလွယ်တကူတောင်းဆိုထားနိုင်ပါတယ်။</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="feature2">
                    <div class="col-md-6 feature-grid2">
                        <h4>ကိုယ်ပိုင်သီချင်းပေးပို့နိုင်ခြင်း</h4>
                        <p>မိမိကိုယ်တိုင်သီဆိုထားတဲ့ သီချင်းကိုပေးပို့နိင်ပါတယ်။</p>
                    </div>
                    <div class="col-md-6 feature-grid3">
                        <img src="{{asset('images/ss6.png')}}">
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="team-section" id="team">
    <div class="container">
        <h3><span></span> Screen Shots  <span></span></h3>
        <div class="screen-shots">
            <!--sreen-gallery-cursual-->
            <div class="sreen-gallery-cursual">
                <!-- start content_slider -->
                <div id="owl-demo" class="owl-carousel">

                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus4.png')}}" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus3.png')}}" />
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus1.png')}}" />
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus2.png')}}" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus5.png')}}" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus6.png')}}" />
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="item-grid">
                            <div class="item-pic">
                                <img src="{{asset('images/nexus7.png')}}" />
                            </div>
                        </div>

                        </div>


                        <div class="item">
                            <div class="item-grid">
                                <div class="item-pic">
                                    <img src="{{asset('images/nexus8.png')}}" />
                                </div>
                            </div>
                        </div>

                </div>
            </div>
            <!--//sreen-gallery-cursual-->
        </div>
        <!-- requried-jsfiles-for owl -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    items :4,
                    lazyLoad : true,
                    autoPlay : true,
                    navigation : false,
                    navigationText :  false,
                    pagination : true,
                });
            });
        </script>
        <!-- //requried-jsfiles-for owl -->
    </div>
</div>
</div>
<div class="footer-section" id="contact" id="contact">
    <div class="container">
        <div class="contact-header">
            <h3><span>ဆက်သွယ်ရန်</span><span></span></h3>
        </div>
        <div class="social-icon">

            <a href="https://www.facebook.com/myanmarmusicart" target="_blank"><i class="icon2"></i></a>

        </div>

        <div class="footer-bottom">

            <p> Copyright &copy;2015  All rights  Reserved | <a href="http://myanmarmusicart.com" target="target_blank">Myanmar Music Art</a></p>

        </div>
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
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>

</div>
</div>




</body>
</html> 