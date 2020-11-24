<!DOCTYPE HTML>
<html>

<head>
    <title>{{$title}} | Lucky Outfit</title>
    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('frontend')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('frontend')}}/css/theme.css" rel='stylesheet' type='text/css' />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$title}}">
    <meta name="keywords" content="Pakaian Wanita, Lucky Outfit, {{$title}}">
    <meta name="author" content="Bahyu Sanciko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.flaticon.com/svg/static/icons/svg/3220/3220587.svg" type="image/svg" sizes="16x16">

    <style>


    </style>
</head>

<body>
    <!----start-container----->
    <div class="header-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo"><a href="{{url('/')}}" class="text-muted">
                            <h4>Lucky Outfit</h4>
                        </a></div>
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header"><span class="text-left"><a
                                        href="{{url('/')}}">MENU</a></span>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{url('/product')}}">Artikel</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
                <!----start-images-slider---->
                <!-- Single button -->

            </div>
        </div>
    </div>
    @yield('content')
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-4">
                    <div class="grid">
                        <h2>Tentang Kami</h2>
                        <img class="img-circle" high src="https://instagram.fcgk23-1.fna.fbcdn.net/v/t51.2885-19/s320x320/123532915_387591942442263_8719164586203942614_n.jpg?_nc_ht=instagram.fcgk23-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=GP-sQ_CoYlEAX_TlGHW&tp=1&oh=239aa74d64ea1225844f907be3e2aa13&oe=5FE60FD9" height="100">
                        <p>ALL GIRLS NEED</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="grid1 pull-left">
                        <h2>Kontak</h2>
                        <address>
                            <p>
                        Line@ : @fao6855w ( dengan @ )
                        Whatsapp : 089526557294
                        📬 Pengiriman H+1 transfer
                        💰 BCA / BNI
                        🏡 JKT
                        </p>
                        </address>
                    </div>
                    <div class="grid2 pull-right">
                        <div class="social-icons-set">
                            <ul>
                                <li><a class="facebook" href="#"> </a></li>
                                <li><a class="twitter" href="#"> </a></li>
                                <div class="clear"> </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="copy-right text-center">
                <p>&#169Copyright Lucky Outfit</a>
                </p>
            </div>
        </div>
    </div>
</body>
<script type="application/x-javascript">
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<!--  jquery plguin -->

@stack('js')

</html>
