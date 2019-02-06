<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Quite Light</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">	
    <link href="{{asset("assets/plugin-frameworks/swiper.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/plugin-frameworks/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/fonts/ionicons.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/common/styles.css")}}" rel="stylesheet" type="text/css" />
    @yield("styles")
</head>
<body>
	
    @include("layout.header")
    <div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
        <div class="img-bg bg-1 bg-layer-4"></div>
        <div class="container-fluid h-100 mt-xs-50">
            <div class="row h-100">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-5 h-100 h-sm-50">
                    <div class="dplay-tbl">
                        <div class="dplay-tbl-cell color-white mtb-30">
                            <div class="mx-w-400x">
                                <h5><b>ART</b></h5>
                                <h1 class="mt-20 mb-30"><b>The Shoddy Science Behind most Pregnancy Advice</b></h1>
                                <h6><a class="plr-20 btn-brdr-grey color-white" href="#"><b>Continue Reading</b></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 h-sm-50 oflow-hidden swiper-area pos-relative">			
                    <div class="abs-blr pos-sm-static">
                        <div class="row pos-relative mt-50 all-scroll">
                            <div class="swiper-scrollbar resp"></div>
                            <div class="col-md-10">
                                <h5 class="mb-50 color-white"><b>HOT NEWS</b></h5>
                                <div class="swiper-container oflow-visible" data-slide-effect="slide" data-autoheight="false" 
                                    data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="2"
                                    data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true"
                                    data-swpr-responsive="[1, 2, 1, 2]">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="bg-white">
                                                <img src="images/hot_news_1_300x150.jpg" alt="">
                                                <div class="plr-25 ptb-15">
                                                    <h5 class="color-ash"><b>ART</b></h5>
                                                    <h4 class="mtb-10">
                                                        <a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h4>
                                                    <ul class="list-li-mr-10 color-lt-black">
                                                        <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                                                        <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @yield("body")	
    <script src="{{asset("assets/plugin-frameworks/jquery-3.2.1.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/plugin-frameworks/bootstrap.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/plugin-frameworks/swiper.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/common/scripts.js")}}" type="text/javascript"></script>
	@yield("scripts")
</body>
</html>