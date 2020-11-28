@extends('layouts.app')

@section ('content')
<style>
    /* @media screen and (min-width: 1025px) {
        .img {
            height: 700px;
        }
    } */
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!----start-images-slider---->
            <div class="images-slider">
                <div id="fwslider">
                    <div class="slider_container">
                        <div class="slide">
                            <a href="{{ url('product') }}">
                                <img class="img-responsive" src="{{asset('image')}}/banner1.png" alt="" />
                                <div class="slide_content">
                                    <div class="slide_content_wrap">
                                        <!-- <p class="description">Produk Terbaru</p>
                                    <h4 class="title">Pakaian</h4>
                                    <p class="description"><a href="{{ url('product') }}">Lihat Koleksi</a></p>
                                    <div class="slide-btns description"> -->
                                    </div>
                                </div>
                        </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="{{ url('product') }}">
                            <img class="img-responsive" src="{{asset('image')}}/bg1.jpg" alt="" />
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <!-- <p class="description">Produk Terbaru</p>
                                    <h4 class="title">Pakaian</h4>
                                    <p class="description"><a href="{{ url('product') }}">Lihat Koleksi</a></p>
                                    <div class="slide-btns description"> -->
                                </div>
                            </div>
                    </div>
                    </a>
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
                <h2>Produk Terbaru</h2>
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
                            <p class="text-center">{{ substr($product->name ,0,20)}} <br> <span>{{ $product->brand }}</span> </p>
                            <h2 class="text-center">Rp {{ number_format($product->price ,2,',','.')}}</h2>
                            <p class="text-center"><a
                                    href="{{ route('product.show',['product'=>$product->id]) }}">Lihat</a>
                            </p>
                            <br>
                            <br>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    @endforeach

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