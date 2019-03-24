@extends("templates.freebie")

@section("styles")
    <link href="{{asset("assets/plugin-frameworks/assets/owl.carousel.min.css")}}" rel="stylesheet" type="text/css" />
    <style>
        .owl-carousel .owl-stage {
            display: flex;
            align-items: center;
        }

        .owl-carousel .caption {
            text-align: center;
        }
        p a {
            color: #ffc107 !important;
        }
        .content-post ul li{
            list-style: inherit;
            display: list-item;
            font-size: inherit;
        }
        .content-post ul {
            padding-left:40px;

        }
        .item{
            display: flex;
            justify-content: space-around;
            align-content: center;
        }
    </style>
@endsection

@section("scripts")
    <script src="{{asset('assets/plugin-frameworks/owl.carousel.min.js')}}"></script>
    <script>
        $(".item_click").click(function(){
            var url = $(this).data("url");
            window.location.href = url;
        });
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            items: 1,
            center: true
        })
    </script>

@endsection

@section("body")
    <section class="bg-1-white ptb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="sided-70x">
                                <div>
                                    <p class="ptb-20 color-ash"><b>{{$item->title}}</b></p>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-sm-12 col-md-6">--}}
                        {{--<ul class="color-ash lh-70 text-right text-sm-left list-a-plr-10 font-13">--}}
                        {{--<li><b>COMPARTIR</b></li>--}}
                        {{--<li><a href="#"><i class="color-facebook ion-social-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="color-twitter ion-social-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="color-google ion-social-google"></i></a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                    </div>
                    <div class="owl-carousel">
                        @foreach(explode(',',$item->images) as $image)
                            <div class="item">
                                <img style="width:50% ;" src="{{config('app.path_url').$image}}">
                            </div>
                        @endforeach
                    </div>
                    <div class="brdr-grey-1 mt-40 mt-sm-20"></div>
                    <div class="mt-20 mt-sm-10" style="display: flex; align-items: center;">
                        <div style="display: flex; align-items: center;">
                            <a href="{{url('freebie/download/'.$item->download)}}" class="plr-70 btn-brdr-grey color-white" style="color: white"><b>COMPRAR</b></a>
                        </div>
                    </div>
                    <div class="brdr-grey-1 mt-20 mt-sm-20"></div>
                    <div class="mt-40 mt-sm-10 content-post">
                        <?php echo($item->content)?>
                    </div>
                    @include("layout.tags")
                    <div class="brdr-grey-1 mt-50 mt-sm-20"></div>
                    @include("layout.related")
                </div><!-- col-sm-9 -->
                @include("layout.ads")
            </div><!-- row -->
        </div><!-- container -->
    </section>
@endsection
