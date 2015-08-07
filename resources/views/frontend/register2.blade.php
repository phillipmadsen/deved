@extends('frontend.layout.layout') 
@section('seo') @endsection
@section('styles') 
 
    {!! Minify::stylesheet('/wizard/jquery-steps/css/wizard.css') !!}
    {!! Minify::stylesheet('/wizard/jquery-steps/css/jquery.steps.css') !!}
@endsection
@section('scripts') 

@endsection
@section('top') 
<!-- Top Bar ============================================= -->
<div id="top-bar">

    <div class="container clearfix">

        <div class="col_half nobottommargin clearfix">

            <!-- Top Links
            ============================================= -->
            <div class="top-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login-register.html">Login</a>
                        <div class="top-link-section">
                            <form id="top-login" role="form">
                                <div class="input-group" id="top-login-username">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="email" class="form-control" placeholder="Email address" required="">
                                </div>
                                <div class="input-group" id="top-login-password">
                                    <span class="input-group-addon"><i class="icon-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required="">
                                </div>
                                <label class="checkbox">
                                  <input type="checkbox" value="remember-me"> Remember me
                                </label>
                                <button class="btn btn-danger btn-block" type="submit">Sign in</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div><!-- .top-links end -->

        </div>

        <div class="col_half fright col_last clearfix nobottommargin">

            <!-- Top Social
            ============================================= -->
            <div id="top-social">
                <ul>
                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                    <li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
                    <li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
                    <li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
                    <li><a href="mailto:info@grace.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@grace.com</span></a></li>
                </ul>
            </div><!-- #top-social end -->

        </div>

    </div>

</div><!-- #top-bar end -->
@endsection
@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle') 
<!-- Page Title ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>My Account</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                
                <li class="active">Login</li>
            </ol>
        </div>

    </section><!-- #page-title end -->
@endsection
  
@section('content')

        <!-- Content ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_one_third nobottommargin">

                        <div class="well well-lg nobottommargin">
                            <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                                <h3>Login to your Account</h3>

                                <div class="col_full">
                                    <label for="login-form-username">Username:</label>
                                    <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    <a href="#" class="fright">Forgot Password?</a>
                                </div>

                            </form>
                        </div>

                    </div>

                    <div class="col_two_third col_last nobottommargin">


                        <h3>Don't have an Account? Register Now.</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

                        <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

                            <div class="col_half">
                                <label for="register-form-name">Name:</label>
                                <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="register-form-email">Email Address:</label>
                                <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_half">
                                <label for="register-form-username">Choose a Username:</label>
                                <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="register-form-phone">Phone:</label>
                                <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_half">
                                <label for="register-form-password">Choose Password:</label>
                                <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
                            </div>

                            <div class="col_half col_last">
                                <label for="register-form-repassword">Re-enter Password:</label>
                                <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full nobottommargin">
                                <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
