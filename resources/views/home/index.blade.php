@extends('layouts.app')

@section ('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!----start-images-slider---->
            <div class="images-slider">
                <div id="fwslider">
                    <div class="slider_container">
                        <div class="slide">
                            <img src="{{asset('image')}}/bg1.jpg" alt="" />
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <p class="description">Produk Terbaru</p>
                                    <h4 class="title">Pakaian</h4>
                                    <p class="description"><a href="{{ route('product.index') }}">Lihat Koleksi</a></p>
                                    <div class="slide-btns description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="{{asset('image')}}/bg1.jpg" alt="" />
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <p class="description">Produk Terbaru</p>
                                    <h4 class="title">Pakaian</h4>
                                    <p class="description"><a href="{{ route('product.index') }}">Lihat Koleksi</a></p>
                                    <div class="slide-btns description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/slide -->
                    </div>
                    <div class="timers"> </div>
                    <div class="slidePrev"><span> </span></div>
                    <div class="slideNext"><span> </span></div>
                </div>
                <!--/slider -->
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Produk Unggulan</h2>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center ">
                <div class="card-deck">

                    @foreach ($products as $product)

                    <div class="col-md-2">
                        <div class="grid">
                            <div class="portfolio app mix_all" data-cat="app"
                                style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a href="{{ route('product.show',['product'=>$product->id]) }}"
                                        class="b-link-stripe b-animate-go  thickbox">
                                        <?php $img =  json_decode($product->image,true); 
                                    ?>
                                        <img src="{{ asset($img[0]) }}" class="img-responsive" />
                                        <div class="b-wrapper">
                                            <h2 class="b-animate b-from-left b-delay03"><img
                                                    src="{{asset('frontend')}}/images/link-ico.png" alt="" /></h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <p class="text-center">{{ $product->name }} <br> <span>{{ $product->brand }}</span> </p>
                            <h2 class="text-center">Rp {{ number_format($product->price ,2,',','.')}}</h2>
                            <p class="text-center"><a
                                    href="{{ route('product.show',['product'=>$product->id]) }}">Lihat</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                    @endforeach

                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <div class="top">
        <div class="row">
            <div class="col-md-4">
                <div class="grid">
                    <h2>Tentang Kami</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit
                        dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et
                        est hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid1 pull-left">
                    <h2>Kontak</h2>
                    <address>
                        <p>tryd online service</p>
                        <p>12345 main street</p>
                        <p>Newyork</p>
                        <p><a href="#">info#@mystore.com</a></p>
                        <p>555-58746-5475</p>
                    </address>
                </div>
                <div class="grid2 pull-right">
                    <div class="social-icons-set">
                        <ul>
                            <li><a class="facebook" href="#"> </a></li>
                            <li><a class="twitter" href="#"> </a></li>
                            <li><a class="vimeo" href="#"> </a></li>
                            <div class="clear"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@push('js')
<!--start slider -->
<link rel="stylesheet" href="{{asset('frontend')}}/css/fwslider.css" media="all">
<script src="{{asset('frontend')}}/js/jquery-ui.min.js"></script>
<script src="{{asset('frontend')}}/js/css3-mediaqueries.js"></script>
<script src="{{asset('frontend')}}/js/fwslider.js"></script>
<!--end slider -->
@endpush
@endsection