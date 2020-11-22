<!DOCTYPE HTML>
<html>

<head>
    <title>Lucky Shop</title>
    <link href="{{asset('frontend')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('frontend')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('frontend')}}/css/theme.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <h4>Lucky Shop</h4>
                        </a></div>
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header"><span class="text-left"><a
                                        href="{{url('/product')}}">MENU</a></span>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
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
    <div class="footer">
        <div class="container">
            <div class="copy-right text-center">
                <p>&#169Copyright Lucky Shop Indonesia</a>
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
