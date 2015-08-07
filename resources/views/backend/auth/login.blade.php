@extends('frontend.layout.bare')
@section('title') <title>Grace Login Page</title> @endsection 
@section('seo') 
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection
@section('styles') @endsection
@section('scripts') @endsection

@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle') @endsection
  
@section('content')

<!-- Content ============================================= -->
<section id="content">

    <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #444;"></div>

        <div class="section nobg full-screen nopadding nomargin">
            <div class="container vertical-middle divcenter clearfix">

                <div class="row center">
                    <a href="index.html">
                    <img src="{!! url('frontend/images/logo-dark.png') !!}" alt="Grace Logo"></a>
                </div>

                <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
                    <div class="panel-body" style="padding: 40px;">
                     
  				{!! Form::open(array()) !!}

		            @if ($errors->has('login'))
		                <div class="alert alert-danger">
		                    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{!! $errors->first('login', ':message') !!}
		                </div>
		            @endif
                            <h3>Login to your Account</h3>

                            <div class="col_full">
                                <label for="login-form-username">Email:</label>
                                <input type="text" id="login-form-username" name="email" value="" class="form-control not-dark" />
                            </div>

                            <div class="col_full">
                                <label for="login-form-password">Password:</label>
                                <input type="password" id="login-form-password" name="password" value="" class="form-control not-dark" />
                            </div>

                            <div class="col_full nobottommargin">
                                <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                <a href="#" class="fright">Forgot Password?</a>
                            </div>
                    
						{!! Form::close() !!}
                        <div class="line line-sm"></div>

                        {{-- <div class="center">
                            <h4 style="margin-bottom: 15px;">or Login with:</h4>
                            <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
                            <span class="hidden-xs">or</span>
                            <a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
                        </div> --}}
                    </div>
                </div>

                <div class="row center dark"><small>Copyrights &copy; All Rights Reserved by The Grace Company.</small></div>

            </div>
        </div>

    </div>

</section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
