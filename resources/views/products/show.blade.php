@extends('layouts.app')

@section ('content')
<style>
    .icon {
        width: 50px !important;
        height: 50px !important;
    }
</style>
<div class="single">
    <div class="container">

        <div class="cont span_2_of_3">
            <div class="labout span_1_of_a1">
                <!-- start product_slider -->
                <ul id="etalage">
                    <?php $img =  json_decode($product->image,true); 
                                    ?>
                    @foreach($img as $item)
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="{{asset($item)}}" />
                            <img class="etalage_source_image" src="{{asset($item)}}" />
                        </a>
                    </li>
                    @endforeach
                </ul>


                <!-- end product_slider -->
            </div>
            <div class="cont1 span_2_of_a1 pull-right">
                <h3 class="m_3">{{ $product->name }} </h3>
                <span>{{ $product->brand }}</span>

                <div class="price_single">
                    <!-- <span class="reducedfrom">$66.00</span> -->
                    <span class="actual">Rp {{ number_format($product->price ,2,',','.')}}</span><a href="#"></a>
                </div> <br>
                <!-- <ul class="options list-unstyled">
                    <h4 class="m_9">Select a Size</h4>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <div class="clearfix"></div>
                </ul> -->

                <div class="social_single">
                    <p>Beli Melalui</p>
                    <ul list-unstyled>
                        <li><a target="_blank"  href="{{$product->shopee}}"><img src="https://aromaincense.id/wp-content/uploads/2018/10/shopee-icon-png-5.png"
                                class="icon" alt=""></a></li>
                        <li><a target="_blank"  href="{{$product->tokopedia}}"> <img
                                src="https://ecs7.tokopedia.net/assets-about-frontend/master/img/Tokopedia_Mascot-36c1015eabb66a26893edeb227db71e0.png"
                                class="icon" alt=""></a></li>
                        <li><a target="_blank"  href="{{$product->bukalapak}}"><img src="https://s1.bukalapak.com/images/logo-new/bukalapak-icon-secondary@2x.png"
                                class="icon" alt=""></a></li>
                        <li><a class="wa" href="#"><img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c543.png" class="icon wa"
                                alt=""></a></li>
                    </ul>
                </div>
                <div class="toogle">{!!$product->content!!}</div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- <div class="nbs-flexisel-container">
            <div class="nbs-flexisel-inner">
                <ul id="flexiselDemo3" class="nbs-flexisel-ul" style="left: -195.2px; display: block;">





                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic9.jpg">
                        <div class="grid-flex"><a href="#">Zumba</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic8.jpg">
                        <div class="grid-flex"><a href="#">Bloch</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic7.jpg">
                        <div class="grid-flex"><a href="#">Capzio</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic11.jpg">
                        <div class="grid-flex"><a href="#">Bloch</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic10.jpg">
                        <div class="grid-flex"><a href="#">Capzio</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic9.jpg">
                        <div class="grid-flex"><a href="#">Zumba</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic8.jpg">
                        <div class="grid-flex"><a href="#">Bloch</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic7.jpg">
                        <div class="grid-flex"><a href="#">Capzio</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic11.jpg">
                        <div class="grid-flex"><a href="#">Bloch</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 195.2px;"><img src="{{asset('frontend')}}/images/pic10.jpg">
                        <div class="grid-flex"><a href="#">Capzio</a>
                            <p>Rs 850</p>
                        </div>
                    </li>
                </ul>
                <div class="nbs-flexisel-nav-left" style="top: 74px;"></div>
                <div class="nbs-flexisel-nav-right" style="top: 74px;"></div>
            </div>
        </div> -->
        <!-- <div class="toogle">
            <h3 class="m_3">Product Details</h3>
            <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
        </div>
        <div class="toogle">
            <h3 class="m_3">Product Reviews</h3>
            <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
        </div> -->
    </div>
    <div class="clearfix"></div>
</div>
@push('js')
<script src="{{asset('frontend')}}/js/jquery.etalage.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.flexisel.js"></script>
<link rel="stylesheet" href="{{asset('frontend')}}/css/etalage.css">
<!-- Include the Etalage files -->
<script type="text/javascript">
    $(window).load(function () {
        $("#flexiselDemo1").flexisel();
        $("#flexiselDemo2").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<script>
    jQuery(document).ready(function ($) {

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,

            show_hint: true,
            click_callback: function (image_anchor, instance_id) {
                // alert('Callback example:\nYou clicked on an image with the anchor: "' +
                //     image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
            }
        });
        // This is for the dropdown list example:
        $('.dropdownlist').change(function () {
            etalage_show($(this).find('option:selected').attr('class'));
        });

    });
    $(".wa").click(function () {
        openWhatApps()
    });

    function openWhatApps() {
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        let url = window.location.href;
        if (isMobile) {
            window.open(
                `https://wa.me/6289643446893?text=Halo%20Cari%20LuckyShop,%20Apakah%2Produk%20Ini%20Terseedia%20? {{ $product->name }} `
                );
        } else {
            window.open(
                `https://web.whatsapp.com/send?phone=6289643446893&text=Halo%20Cari%20LuckyShop,%20Apakah%2Produk%20Ini%20Terseedia%20? {{ $product->name }} `,
                '_blank');
        }
    }


</script>
@endpush
@endsection