@extends('frontend/layout/layout')
@section('submenu')
    <div id="page-menu">
            <div id="page-menu-wrap">
                <div class="container clearfix ">
                    <nav class="one-page-menu">
                        <ul>
                            <li><a class="current" href="/machine-quilting/">Machine Quilting</a></li>
                            <li><a href="{!! url('/' . getLang()) !!}/machine-quilting/gq-frame/"><div>GQ Frame</div></a></li>
                            <li><a href="{!! url('/' . getLang()) !!}/machine-quilting/gracie-king/"><div>Gracie King &amp; Queen</div></a></li>
                            <li><a href="{!! url('/' . getLang()) !!}/machine-quilting/sr-2-frame"><div>SR-2 Frame</div></a></li>
                            <li><a href="{!! url('/' . getLang()) !!}/machine-quilting/accessories/"><div>Acceccories</div></a></li>
                            <li><a href="{!! url('/' . getLang()) !!}/machine-quilting/compare-machine-frames/"><div>Compare Frames</div></a></li>
                        </ul>
                    </nav>
                    <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
                </div>
            </div>
        </div>
@stop
@section('slider')

@stop
@section('content')

 <!-- Content ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                    <div class="row clearfix">

                        <div class="col-lg-5">
                            <div class="heading-block topmargin">
                                <h3 itemprop="hasPart about">The Qnique Quilting Machine</h3>
                            </div>
                            <p class="lead">
                        We set out to make the perfect mid-arm quilting machine for the quilting enthusiast. We carefully crafted all of the high-end long-arm features you love into a truly affordable quilting machine.
                    </p>

                        </div>

                        <div class="col-lg-7">

                            <div style="position: relative;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                            {!! HTML::image('frontend/images/product-overviews/qnique/qnique-angled.png', 'Qnique', array('data-animate' => 'fadeInUp', 'itemprop' => 'image', 'style' => 'position: absolute; top: 0; left: 0;')) !!}

                            </div>

                        </div>

                    </div>

                    <div class="row clearfix">

                        <div class="col-lg-12">
                   <p class="lead">
                        For over 25 years the Grace Company has been the leading manufacturer of high quality quilting frames and quilting accessories. Now we are pleased to announce a revolutionary new quilting machine, designed to take your quilting experience to a whole new level!
                    </p>
                        </div>
                    </div>
                </div>







<!--expand your reach parallax =================================================== -->


                <div class="section parallax dark nobottommargin" style="background-image: {!! url('frontend/images/dark-background.jpg') !!};padding:0px 0px 0px 100px;" data-stellar-background-ratio="0.4">
                   <div class="col_one_third nomargin">
                        <div class="heading-block topmargin nobottommargin">
                            <h3>Expand Your Reach!</h3>
                        </div>

                        <p>The extended length and height of the work area on the Qnique gives you the freedom to quilt larger patterns or blocks. The Qnique features a 15 inch throat space from the needle to the back of the work area.</p>

                           {!! HTML::image('frontend/images/product-overviews/qnique/qnique-block.png', 'Qnique larger quilting blocks', array('class' => 'image', 'data-animate' => 'fadeInUp', 'itemprop' => 'image')) !!}
                    </div>
                    <div class="col_two_third col_last nobottommargin">

                        <img data-animate="fadeInRight" src="{!! url('frontend/images/product-overviews/qnique/qnique-side-frame.png') !!}" alt="Qnique extended throat space">
                    </div>

                </div>

<!--Superior Stitching Section ========================================-->

                <div class="section parallax nobottommargin dark" style="background-image: url('{!! url('frontend/images/product-overviews/qnique/needle-blue.jpg') !!}');" data-stellar-background-ratio="0.4">

                    <div class="col_half fright rightmargin">

                        <div data-animate="fadeIn" class="transparent-block-dark col_half">
                            <div class="block-img">
                                <img src="{!! url('frontend/images/product-overviews/qnique/screen-square.jpg') !!}" alt="Qnique Quilter LCD Screen">
                            </div>
                            <h3>The Perfect Stitch</h3>
                            <p> Built-in stitch regulation keeps your stitch length consistent, even as you speed up and slow down.  The Qnique quilting machine features four different sewing modes, all conveniently displayed on the easy to navigate menu in the OLED screen.</p>

                        </div>

                    </div>


                </div>

<!--Features Section ==============================================-->

                <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Professional Quiltng Features</h2>
<!--====================== lights parallax ======================-->
                <div class="section parallax nomargin dark" style="background-image: url('{!! url('frontend/images/product-overviews/qnique/lights-frame.jpg') !!}');" data-stellar-background-ratio="0.4">

                    <div class="col_half fright rightmargin">

                        <div data-animate="fadeIn" class="transparent-block-dark col_half">

                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>LED Sewing Lights</h4>
                                    <span class="before-heading">Bring your projects to light</span>
                                    <p>The Qnique features high powered, daylight color-balanced LED work lights to illuminate your projects while quilting. You can even control the light brightness.</p>

                            </div>
                            <div class="block-img">
                                <img src="{!! url('frontend/images/product-overviews/qnique/lights-square.jpg') !!}" alt="Qnique Quilter LED Sewing Lights">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="section nomargin" style="background-color:white;">
                    <div class="container clear-bottommargin clearfix">

                        <div class="row topmargin-sm clearfix">


                            <div class="col-md-6">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <img src="{!! url('frontend/images/product-overviews/qnique/screen.jpg') !!}" alt="Qnique Display Screen">
                                     <h4>Full Color OLED Screen</h4>
                                    <span class="before-heading">Simplified view of all sewing settings</span>
                                </div>
                                <p>All of the most important quilt functions and settings can be changed and are seen right on the display! So you'll always have quick access to stitching mode, stitch speed or stitch length, and needle position.</p>

                            </div>

                            <div class="col-md-6">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <img src="{!! url('frontend/images/product-overviews/qnique/bobbin-winder.jpg') !!}" alt="qnique bobbin winder">
                                    <h4>Built-in Bobbin Winder</h4>
                                    <span class="before-heading">Quick and easy bobbin refills</span>
                                </div>
                                <p>The included bobbin winder on the Qnique Quilter runs its own seperate built-in motor, so you can refill bobbins without having to run the sewing machine.</p>
                            </div>

                        </div>

                         <div class="row topmargin-sm clearfix">


                            <div class="col-md-6 ">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <img src="{!! url('frontend/images/product-overviews/qnique/bobbin-replace.jpg') !!}" alt="replacing quilting machine bobbin">
                                     <h4>Easy-Access Bobbin</h4>
                                    <span class="before-heading">Bobbin changing doesn't get any easier than this</span>
                                </div>
                                <p>The bobbin of the Qnique quilting machine has been designed for easy and quick access. Changing or checking on your bobbin is now more user-freindly than ever.</p>

                            </div>

                            <div class="col-md-6">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <img src="{!! url('frontend/images/product-overviews/qnique/m-class-bobbin.jpg') !!}" alt="M-class bobbin">
                                    <h4>Large M-Class Bobbin</h4>
                                    <span class="before-heading">So you can keep on quilting, and quilting, and quilting...</span>
                                </div>
                                <p>The Qnique Quilter comes standard with a large class M Bobbin. This lets you quilter for longer periods of time before needing to change or refill your bobbin</p>
                            </div>

                        </div>

                         <div class="row topmargin-sm clearfix">
                            <div class="col-md-6">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <img src="{!! url('frontend/images/product-overviews/qnique/buttons.jpg') !!}" alt="replacing quilting machine bobbin">
                                     <h4>Quick-Acess Controls</h4>
                                    <span class="before-heading">All the sewing power, right at your fingertips</span>
                                </div>
                                <p>We designed the control of the quilting machine to be as quilter-friendly as possible. All major functions and settings can be controlled right from the handles and seen on the full-color display.</p>

                            </div>

                            <div class="col-md-6">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <img src="{!! url('frontend/images/product-overviews/qnique/accessory-ports.jpg') !!}" alt="qnique bobbin winder">
                                    <h4>Additional Accessory Ports</h4>
                                    <span class="before-heading">More accessories, more power</span>
                                </div>
                                <p>Multiple accessory ports let you attach convenient sewing machine add-ons. Each port provides power to the accessory you plug in.</p>
                            </div>

                        </div>

                    </div>
                </div>
                <!-----------Frame section---------->
                <div class="section nomargin">
                    <div class="container clearfix">

                        <div class="row topmargin-lg bottommargin-sm">
                            <div class="heading-block center nomargin">
                                <h2>Perfectly Paired With a Quilting Frame</h2>
                            </div>
                            {!! HTML::image('frontend/images/product-overviews/qnique/qnique-frame-large.png', 'Qnique Frame', array('data-animate' => 'fadeInRight', 'itemprop' => 'image')) !!}

                        </div>
                        <div class="row topmargin-sm clearfix">
                            <div class="col-md-6">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h4>Save More With a Bundled Frame Package</h4>
                                    <span class="before-heading">They were made for eachother</span>
                                </div>
                                <p>The Qnique can be purchased bundled with your choice of quilting frame, and will come with everything you need to get quilting! Compare some of the available quilting frame packages below. </p>

                            </div>

                            <div class="col-md-6">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Already Own a Quilting Frame?</h4>
                                    <span class="before-heading">The Qnique is a perfect fit</span>
                                </div>
                                <p>The Qnique is designed to work seamlessly with many existing quilting frames, so you can upgrade to your dream quilting system. When you buy a Grace Qnique quilting machine, it will come with everything you need, including instructions, for partnering it perfectly with your frame.</p>
                                <a href="#" class="button button-rounded button-large noleftmargin topmargin-sm">Frame Compatibility List</a>
                            </div>

                        </div>
                    </div>

                </div>

                <!------frame packages-------->
              <div class="container clearfix">

                        <div class="row topmargin-lg bottommargin-sm">
                            <div class="heading-block center nomargin">
                                <h2>Complete Quilting System Packages</h2>
                            </div>
                        </div>
                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth rightmargin-sm">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5>Qnique Frame Package</h5>
                                </div>
                                {!! HTML::image('frontend/images/product-overviews/qnique/qnique-frame-700.png', 'Qnique Quilting Frame Package', array('class' => 'image', 'itemprop' => 'image')) !!}
                                <dl>
                                    <dt>Sets up in sizes:</dt>
                                    <dl>King, Crib</dl>
                                    <dt>Maximum Length:</dt>
                                    <dl>122 Inches</dl>
                                    <dt>Special Feature</dt>
                                    <dd>Made specifically for the Qnique Machine, optional 4th rail available</dd>

                                </dl>
                                <a href="#" class="button button-rounded button-secondary">Shop Now</a>

                            </div>

                            <div class="col_one_fourth rightmargin-sm">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5>Gracie King Package</h5>
                                </div>
{!! HTML::image('frontend/images/product-overviews/qnique/gracie-king-combo.png', 'Qnique Quilting Frame Package', array('class' => 'image', 'itemprop' => 'image')) !!}

                                <dl>
                                    <dt>Sets up in sizes:</dt>
                                    <dl>King, Queen, Crib</dl>
                                    <dt>Maximum Length:</dt>
                                    <dl>136 Inches</dl>
                                    <dt>Special Feature</dt>
                                    <dd>Flip-up rail to quickly inspect underside stitching</dd>

                                </dl>
                                <a href="#" class="button button-rounded button-secondary">Shop Now</a>

                            </div>

                            <div class="col_one_fourth rightmargin-sm">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5>Gracie Queen Package</h5>
                                </div>
                     {!! HTML::image('frontend/images/product-overviews/qnique/gracie-queen-combo.png', 'Qnique Quilting Frame Package') !!}               <dl>
                                    <dt>Sets up in sizes:</dt>
                                    <dl>Queen, Crib</dl>
                                    <dt>Maximum Length:</dt>
                                    <dl>136 Inches</dl>
                                    <dt>Special Feature</dt>
                                    <dd>Flip-up rail to quickly inspect underside stitching</dd>

                                </dl>
                                <a href="#" class="button button-rounded button-secondary">Shop Now</a>

                            </div>

                            <div class="col_one_fourth rightmargin-sm">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5>SR-2 Frame Package</h5>
                                </div>

                                 {!! HTML::image('frontend/images/product-overviews/qnique/SR2-frame-rockit-combo.png ', 'Qnique Quilting Frame Package') !!}
                                <dl>
                                    <dt>Sets up in sizes:</dt>
                                    <dl>Queen, Crib</dl>
                                    <dt>Maximum Length:</dt>
                                    <dl>136 Inches</dl>
                                    <dt>Special Feature</dt>
                                    <dd>2-rail system and <strong>"Quilt-Clips"</strong> for easiest fabric loading ever</dd>

                                </dl>
                                <a href="#" class="button button-rounded button-secondary">Shop Now</a>

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

@stop
