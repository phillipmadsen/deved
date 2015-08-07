<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="author" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! HTML::style("//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic") !!}
    {!! HTML::style("frontend/css/bootstrap.css") !!}
    {!! HTML::style("frontend/style.css") !!}
    {!! HTML::style("frontend/css/dark.css") !!}
    {!! HTML::style("frontend/css/font-icons.css") !!}
    {!! HTML::style("frontend/css/animate.css") !!}
    {!! HTML::style("frontend/css/magnific-popup.css") !!}

    {!! HTML::style("frontend/custom-css/block.css") !!}
    {!! HTML::style("frontend/custom-css/header.css") !!}
    {!! HTML::style("frontend/custom-css/custom.css") !!}

    {!! HTML::style("frontend/css/responsive.css") !!}
    <!--[if lt IE 9]>
        {!! HTML::script('//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') !!}
    <![endif]-->
    <link rel="shortcut icon" href="{!! url('favicon.ico') !!}">
    {!! HTML::script('frontend/js/jquery.js') !!}
    {!! HTML::script('frontend/js/plugins.js') !!}

     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '{!! $settings['ga_code']  or 'UA-64291412-1' !!}', 'auto');
      ga('send', 'pageview');

    </script>
    <style>#top-cart, #top-search {float: right!important; } #primary-menu ul {float: left!important; }  </style>
</head><!--/head-->

<body class="stretched">
<!-- Document Wrapper ============================================= -->
    <div id="wrapper" class="clearfix">
{{-- @include('frontend/layout/top') --}}
       <!-- Header ============================================= -->
        <header id="header" class="transparent-header semi-transparent dark full-header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo ============================================= -->
                    <div id="logo">
                        <a href="{!! url('/' . getLang()) !!}" class="standard-logo" data-dark-logo="{!! url('frontend/images/grace-logo-light.png') !!}"><img src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                        <a href="{!! url('/' . getLang()) !!}" class="retina-logo" data-dark-logo="{!! url('frontend/images/grace-logo-light.png') !!}"><img src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                    </div><!-- #logo end -->



                    <!-- Primary Navigation ============================================= -->
                    <nav id="primary-menu">
                                    @include('frontend/layout/menu')

                        <!-- Top Cart ============================================= -->
                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#">
                                            {!! HTML::image('frontend/images/shop/small/1.jpg', 'ALT TEXT') !!}
                                            </a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Blue Round-Neck Tshirt</a>
                                            <span class="top-cart-item-price">$19.99</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#">
                                           {!! HTML::image('frontend/images//shop/small/6.jpg', 'ALT TEXT') !!}
                                           </a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price">$24.99</span>
                                            <span class="top-cart-item-quantity">x 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">$114.95</span>
                                    <button class="button button-3d button-small nomargin fright">View Cart</button>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->

                        <!-- Top Search ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="{!! url('en/search') !!}" method="get" role="search">>
                                <input type="text" name="q" class="form-control" value="{!! $q or null !!}" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

@yield('pagetitle')





@yield('content')
@include('frontend/layout/foot')
    </div><!-- #wrapper end -->

    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts ============================================= -->
    {!! HTML::script('frontend/js/functions.js') !!}
</body>
</html>
