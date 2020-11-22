@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Produk Terbaru</h2>
                <div class="col-md-6">
                    <select class="form-control orderby">
                        <option selected disabled value="">Pilih Berdasarkan</option>
                        <option value="min">Harga Terendah</option>
                        <option value="max">Harga Tertinggi</option>
                    </select>

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="d-flex justify-content-center">
                @foreach ($products as $product)
                <div class="col-md-2">
                    <div class="grid">
                        <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
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
                        <p class="text-center"><a href="{{ route('product.show',['product'=>$product->id]) }}">Lihat</a>
                        </p>
                    </div>
                    <div class="clearfix"></div>

                </div>
    
                @endforeach
                
            </div>
        </div>

        <div class="pull-right">
                  {{ $products->links() }}
        </div>
        <div class="clearfix"></div>
        
    </div>
    <div class="top">
        <div class="row">
            <div class="col-md-4">
                <div class="grid">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit
                        dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et
                        est hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid">
                    <h2>Our Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit
                        dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et
                        est hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid1 pull-left">
                    <h2>Contact</h2>
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
<script>
    $('.orderby').change(() => {
        let data = $('.orderby').val();
        console.log(data)
        let url = `{{url('product/orderby')}}/${data}`;
        window.location.replace(`${url}`);

    })
</script>
<!--end slider -->
@endpush
@endsection