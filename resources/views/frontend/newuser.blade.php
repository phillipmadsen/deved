@extends('frontend.layout.layout') 
@section('seo') @endsection
@section('styles') 
    {{-- {!! Minify::stylesheet('vendors/wizard/jquery-steps/css/wizard.css') !!} --}}
    {{-- {!! Minify::stylesheet('vendors/wizard/jquery-steps/css/jquery.steps.css') !!} --}}
<!--page level css -->
<link href="{!! asset('vendors/wizard/jquery-steps/css/wizard.css') !!}" rel="stylesheet" />
<link href="{!! asset('vendors/wizard/jquery-steps/css/jquery.steps.css') !!}" rel="stylesheet" />
<!--end of page level css-->
@endsection
@section('scripts') @endsection
    @section('top') 
    @include('frontend.top-default')
    @endsection
@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle') 

<section id="page-title">
    <div class="container clearfix">
        <h1>New Profile</h1>
        <span>The Native title;  </span>
        <ol class="breadcrumb">
            <li><i class="livicon" data-name="home" data-size="14" data-loop="true"></i><a href="{!! url('/' . getLang()) !!}/">Home</a></li>
            <li><a href="{!! url('/' . getLang()) !!}/">Account</a></li>
            <li class="active">New Profile</li>
        </ol>
    </div>
</section>
@endsection
    @section('content')

<!-- Content ============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full clearfix">
             <!--main content-->
               {{--  <div class="row"> --}}
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"> <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   New Grace Profile
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">

                                    <div class="col-md-12">
                                        <h3>Profile Setup Wizard</h3>

                                        <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                        <form class="form-wizard" action="#" method="POST">
                                            <h1>User Profile</h1>
                                            <section>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group">
                                                    <label for="userName">User name *</label>
                                                    <input id="userName" name="userName" type="text" placeholder="Enter your name" class="form-control required"></div>
                                                <div class="form-group">
                                                    <label for="password">Password *</label>
                                                    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control required"></div>
                                                <div class="form-group">
                                                    <label for="confirm">Confirm Password *</label>
                                                    <input id="confirm" name="confirm" type="password" placeholder="Confirm your password " class="form-control required"></div>
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input id="email" name="email" placeholder="Enter your Email" type="text" class="form-control required email"></div>
                                                <div class="">
                                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                                    <label for="acceptTerms">I have read terms and conditions</label>
                                                </div>

                                                <p>(*) Mandatory</p>
                                            </section>
                                            <h1>Profile Details</h1>
                                            <section>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group">
                                                    <label for="name">First name *</label>
                                                    <input id="name" name="name" placeholder="Enter your First name"type="text" class="form-control required"></div>
                                                <div class="form-group">
                                                    <label for="surname">Last name *</label>
                                                    <input id="surname" name="surname" type="text" placeholder=" Enter your Last name" class="form-control required"></div>

                                                <div class="form-group">
                                                    <label for="email">Gender</label>
                                                    <select class="form-control" title="Select an account type...">
                                                        <option>Select</option>
                                                        <option>MALE</option>
                                                        <option>FEMALE</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input id="address" name="address" type="text" class="form-control"></div>
                                                <div class="form-group">
                                                    <label for="age">Age *</label>
                                                    <input id="age" name="age" type="text" class="form-control required number"></div>
                                                <p>(*) Mandatory</p>
                                            </section>

                                            <h1>Finish</h1>

                                            <section>
                                                <div class="form-group">
                                                    <label>Home number</label>
                                                    <input type="text" placeholder="Home number" class="form-control"></div>
                                                <div class="form-group">
                                                    <label >Personal number</label>
                                                    <input type="text" placeholder="Personal number" class="form-control"></div>
                                                <div class="form-group">
                                                    <label>Alternate number</label>
                                                    <input type="text" placeholder="Alternate number" class="form-control"></div>

                                                <h2 class="hidden">&nbsp;</h2>
                                                <span>Terms and Conditions</span>
                                                <div class="pos-rel p-l-30">
                                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="pos-rel p-l-30 required">
                                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                                </div>
                                            </section>
                                        </form>
                                        <!-- END FORM WIZARD WITH VALIDATION --> </div>
                                </div>
                                <!--main content end--> </div>
                        </div>
                    </div>
              
                {{-- </div> --}}
                <!--row end-->
            </div>
        </div>
    </div>
</section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts') 
<script src="{!! asset('vendors/wizard/jquery-steps/js/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('vendors/wizard/jquery-steps/js/additional-methods.min.js') !!}"></script>
<script src="{!! asset('vendors/wizard/jquery-steps/js/wizard.js') !!}"></script>
<script src="{!! asset('vendors/wizard/jquery-steps/js/jquery.steps.js') !!}"></script>
<script src="{!! asset('vendors/wizard/jquery-steps/js/form_wizard.js') !!}"></script>
<script src="{!! asset('frontend/js/pages/formwizard.js') !!}"></script>
@endsection
@stop
