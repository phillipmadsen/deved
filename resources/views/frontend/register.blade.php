@extends('frontend.layout.layout') 
@section('seo') @endsection
@section('styles') 
 
    {!! Minify::stylesheet('vendors/wizard/jquery-steps/css/wizard.css') !!}
    {!! Minify::stylesheet('vendors/wizard/jquery-steps/css/jquery.steps.css') !!}
@endsection
@section('scripts') 

@endsection
    @section('top') 
    @include('frontend.top-default')
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
                    <div class="col_full nobottommargin"> 

                    </div>
{{--                     <div class="col_one_third nobottommargin">  </div>
                    <div class="col_two_third col_last nobottommargin">  </div> --}}

                </div>

            </div>

        </section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
