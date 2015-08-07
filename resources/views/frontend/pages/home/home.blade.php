@extends('frontend/pages/home/master')


 <style>
.landing-form-overlay{bottom:106px!important;}
 </style>

@section('content')

   <section id="slider" style="background: url('{!! url('frontend/images/landing/landing2.jpg') !!}') center; overflow: visible;" data-height-lg="800" data-height-md="600" data-height-sm="600" data-height-xs="600" data-height-xxs="600">
            <div class="container clearfix">

            <form action="#" method="post" role="form" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
                    <div class="heading-block notopmargin nobottomborder">
                        <h2>Signup for FREE</h2>
                        <span>Get 30 Days Unlimited Access</span>
                    </div>
                    <div class="line" style="margin: 20px 0 30px;"></div>
                    <div class="col_full">
                        <input type="text" class="form-control input-lg not-dark" value="" placeholder="Your Name*">
                    </div>
                    <div class="col_full">
                        <input type="email" class="form-control input-lg not-dark" value="" placeholder="Your Email*">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" value="" placeholder="Choose Password*">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" value="" placeholder="Confirm Password*">
                    </div>
                    <div class="col_full nobottommargin">
                        <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">START FREE TRIAL</button>
                    </div>
            </form>

            </div>
        </section>


 <!-- Content ============================================= -->
     <section id="content" style="overflow:hidden;">

            <div class="content-wrap">




<div class="promo promo-dark promo-full landing-promo header-stick">
                    <div class="container clearfix">
                        <h3>Beautiful Quilt designs are waiting for you inside <i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i></h3>
                        <span>You'll love our beautiful &amp; interactive Automated Quilter that makes your quilt process easier &amp; fun.</span>
                    </div>
                </div>



 <div id="section-features" class="heading-block title-center page-section">
                     {{--    <h2>Features Overview</h2>
                        <span>Some of the Features that are gonna blow your mind off</span> --}}
                    </div>



  <div class="container clearfix">

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{!! url('frontend/images/services/1.jpg') !!}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{!! url('frontend/images/services/2.jpg') !!}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                                <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="{!! url('frontend/images/services/3.jpg') !!}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-desc">
                                <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                                <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                            </div>
                        </div>
                    </div>

                </div>








 <a class="button button-full center tright topmargin footer-stick">
                    <div class="container clearfix">
                        Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>
<br style="clear:both" />
    <div class="content-wrap">
  <div class="container clearfix">

      <div id="shop" class="product-3 clearfix">

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/hqf/ez3.jpg') !!}" alt="Checked Short Dress"></a>
                                <a href="#"><img src="{!! url('frontend/images/hqf/ez3-1.jpg') !!}" alt="Checked Short Dress"></a>
                                <div class="sale-flash">10% Off*</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">EZ3 Adjustable Hand Quilting Frames</a></h3></div>
                                <div class="product-price"><del>$425.95</del> <ins>$399.95</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/hqf/z44.jpg') !!}" alt="Slim Fit Chinos"></a>
                                <a href="#"><img src="{!! url('frontend/images/hqf/z44-1.jpg') !!}" alt="Slim Fit Chinos"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">The Z44 Quilting Frame</a></h3></div>
                                <div class="product-price">$699.95</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/grace/hoop2.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/grace/hoop2-person.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/grace/hoop2-w.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">The Grace Hoop2</a></h3></div>
                                <div class="product-price">$299.95</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                   {{--  <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/dress/2.jpg') !!}" alt="Light Blue Denim Dress"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/dress/2-2.jpg') !!}" alt="Light Blue Denim Dress"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                <div class="product-price">$19.95</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/sunglasses/1.jpg') !!}" alt="Unisex Sunglasses"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/sunglasses/1-1.jpg') !!}" alt="Unisex Sunglasses"></a>
                                <div class="sale-flash">Sale!</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/tshirts/1.jpg') !!}" alt="Blue Round-Neck Tshirt"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/tshirts/1-1.jpg') !!}" alt="Blue Round-Neck Tshirt"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                <div class="product-price">$9.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/watches/1.jpg') !!}" alt="Silver Chrome Watch"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/watches/1-1.jpg') !!}" alt="Silver Chrome Watch"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                <div class="product-price">$129.99</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/shoes/2.jpg') !!}" alt="Men Grey Casual Shoes"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/shoes/2-1.jpg') !!}" alt="Men Grey Casual Shoes"></a>
                                <div class="sale-flash">Sale!</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/shop/dress/3.jpg') !!}" alt="Pink Printed Dress"></a></div>
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/shop/dress/3-1.jpg') !!}" alt="Pink Printed Dress"></a></div>
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/shop/dress/3-2.jpg') !!}" alt="Pink Printed Dress"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                <div class="product-price">$39.49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/pants/5.jpg') !!}" alt="Green Trousers"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/pants/5-1.jpg') !!}" alt="Green Trousers"></a>
                                <div class="sale-flash">Sale!</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/sunglasses/2.jpg') !!}" alt="Men Aviator Sunglasses"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/sunglasses/2-1.jpg') !!}" alt="Men Aviator Sunglasses"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                <div class="product-price">$13.49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/tshirts/4.jpg') !!}" alt="Black Polo Tshirt"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/tshirts/4-1.jpg') !!}" alt="Black Polo Tshirt"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                <div class="product-price">$11.49</div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                </div>
                            </div>
                        </div>  --}}

                    </div><!-- #shop end -->
                </div>
            </div>
        </div>
    </div>



                <script type="text/javascript">

                    jQuery(window).load(function(){

                        var $container = $('#portfolio');

                        $container.isotope({
                            transitionDuration: '0.65s',
                            masonry: {
                                columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
                            }
                        });

                        $('#page-menu a').click(function(){
                            $('#page-menu li').removeClass('current');
                            $(this).parent('li').addClass('current');
                            var selector = $(this).attr('data-filter');
                            $container.isotope({ filter: selector });
                            return false;
                        });

                        $(window).resize(function() {
                            $container.isotope('layout');
                        });

                    });

                </script>


@stop
