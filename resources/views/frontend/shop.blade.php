@extends('frontend/layout/layout')
@section('styles') @endsection
@section('scripts') @endsection
@section('top') 
@include('frontend/top-default')
@endsection
@section('submenu') @endsection
@section('slider') @endsection

@section('pagetitle')
    <!-- Page Title ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Shop</h1>
            <span>Start Buying your Favourite Theme</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shop</li>
            </ol>
        </div>

    </section><!-- #page-title end -->
@stop
@section('content')
    <!-- Content ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="product-3 clearfix">

                        <div class="product clearfix">
                            <div class="product-image">
                                <a href="#"><img src="{!! url('frontend/images/shop/dress/1.jpg') !!}" alt="Checked Short Dress"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/dress/1-1.jpg') !!}" alt="Checked Short Dress"></a>
                                <div class="sale-flash">50% Off*</div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
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
                                <a href="#"><img src="{!! url('frontend/images/shop/pants/1-1.jpg') !!}" alt="Slim Fit Chinos"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/pants/1.jpg') !!}" alt="Slim Fit Chinos"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                <div class="product-price">$39.99</div>
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
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/shop/shoes/1.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/shop/shoes/1-1.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                            <div class="slide"><a href="#"><img src="{!! url('frontend/images/shop/shoes/1-2.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-desc center">
                                <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                <div class="product-price">$49</div>
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
                                <a href="#"><img src="{!! url('frontend/images/shop/dress/2.jpg') !!}" alt="Light Blue Denim Dress"></a>
                                <a href="#"><img src="{!! url('frontend/images/shop/dress/2-2.jpg') !!}" alt="Light Blue Denim Dress"></a>
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                    <a href="{!! url('frontend/include/ajax/shop-item.html') !!}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                        </div>

                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">

                            <h4>Shop Categories</h4>
                            <ul>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Tshirts</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Watches</a></li>
                            </ul>

                        </div>

                        <div class="widget clearfix">

                            <h4>Recent Items</h4>
                            <div id="post-list-footer">

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/1.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Blue Round-Neck Tshirt</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$29.99</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/6.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Checked Short Dress</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$23.99</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/7.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Light Blue Denim Dress</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$19.99</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Last Viewed Items</h4>
                            <div class="widget-last-view">
                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/3.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Round-Neck Tshirt</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$15</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/10.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Green Trousers</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$19</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/11.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Silver Chrome Watch</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$34.99</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Popular Items</h4>
                            <div id="Popular-item">
                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/8.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Pink Printed Dress</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$21</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/5.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Blue Round-Neck Tshirt</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$19.99</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img src="{!! url('frontend/images/shop/small/12.jpg') !!}" alt="Image"></a>
                                    </div>
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Men Aviator Sunglasses</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li class="color">$14.99</li>
                                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="widget clearfix">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/TheGraceCompany&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
                        </div>

                        <div class="widget subscribe-widget clearfix">

                            <h4>Subscribe For Latest Offers</h4>
                            <h5>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                            <form action="#" role="form" class="notopmargin nobottommargin">
                                <div class="input-group divcenter">
                                    <input type="text" class="form-control" placeholder="Enter your Email" required="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit"><i class="icon-email2"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="widget clearfix">

                            <div id="oc-clients-full" class="owl-carousel image-carousel">

                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/1.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/2.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/3.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/4.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/5.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/6.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/7.png') !!}" alt="Clients"></a></div>
                                <div class="oc-item"><a href="#"><img src="{!! url('frontend/images/clients/8.png') !!}" alt="Clients"></a></div>

                            </div>

                            <script type="text/javascript">

                                jQuery(document).ready(function($) {

                                    var ocClients = $("#oc-clients-full");

                                    ocClients.owlCarousel({
                                        items: 1,
                                        margin: 10,
                                        loop: true,
                                        nav: false,
                                        autoplay: true,
                                        dots: false,
                                        autoplayHoverPause: true
                                    });

                                });

                            </script>

                        </div>

                    </div>
                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->
@stop
@section('footerscripts') @stop
