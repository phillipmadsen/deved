  <!-- Header
        ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo"><img src="{!! asset('frontend/images/logo.png') !!}" alt="Canvas Logo"></a>
                    <a href="/" class="retina-logo"><img src="{!! asset('frontend/images/logo@2x.png') !!}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <ul class="header-extras">
                    <li>
                        <i class="i-plain icon-call nomargin"></i>
                        <div class="he-text">
                            Call Us
                            <span>+1(800) 264 0644</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line2-envelope nomargin"></i>
                        <div class="he-text">
                            Email Us
                            <span>info@grace.com</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line-clock nomargin"></i>
                        <div class="he-text">
                            We'are Open
                            <span>Mon - Sat, 8AM to 5PM</span>
                        </div>
                    </li>
                </ul>

            </div>

            <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2 center">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <ul>
                            <li><a href="#"><div>Home</div></a></li>
                            <li class="current"><a href="#"><div>What we do</div></a>
                                <!-- <ul>
                                    <li><a href="#"><div>Manufacturing</div></a></li>
                                    <li><a href="#"><div>Machine Quilting</div></a></li>
                                    <li><a href="#"><div>Green Homes</div></a></li>
                                    <li><a href="#"><div>Architecture Design</div></a></li>
                                    <li><a href="#"><div>Interior Planning</div></a></li>
                                </ul> -->
                            </li>
                            <li><a href="#"><div>About Us</div></a></li>
                            <li><a href="#"><div>Manufacturing</div></a>
                                <ul>
                                    <li><a href="#"><div>Qnique</div></a></li>
                                    <li><a href="#"><div>Hand Quilting</div></a></li>
                                    <li><a href="#"><div>Machine Quilting</div></a></li>
                                    <li><a href="#"><div>Automated Quilting</div></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><div>Investors</div></a></li>
                            <li><a href="#"><div>News</div></a></li>
                            <li><a href="#"><div>Careers</div></a></li>
                            <li><a href="#"><div>Contact</div></a></li>
                        </ul>

                        <script>
                            jQuery(document).ready(function($){
                                $( '#primary-menu ul li:has(ul) > a > div' ).append( ' <i class="icon-angle-down norightmargin"></i>' );
                            });
                        </script>

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </header><!-- #header end -->
