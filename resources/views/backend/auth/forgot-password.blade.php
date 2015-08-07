@extends('frontend.layout.layout') 
@section('seo') @endsection
@section('styles') @endsection
@section('scripts') @endsection

@section('submenu') @endsection
@section('slider')   @endsection      
@section('pagetitle') @endsection
  
@section('content')

<!-- Content ============================================= -->
<section id="content">
    <div class="row">
        <div style="text-align: center" class="col-md-4 col-md-offset-4">
            <h1 style="color: #FFFFFF">Grace Manager</h1>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center"> <b>Forgot Password</b>
                    </h5>
                    {!! Form::open(array('class' => 'form-signup', 'id' => 'form-signin')) !!}
    @if ($errors->has('forgot-password'))
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        {!! $errors->first('forgot-password', ':message') !!}
                    </div>
                    @endif
    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
                        {!! $errors->first('email', ':message') !!}
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            {!! Form::text('email', null,array('class' => 'form-control', 'placeholder'=>'Email', 'autofocus'=>'')) !!}
                        </div>
                    </div>
                    {!! Form::submit('Send Password', array('class' => 'btn btn-sm btn-primary btn-block', 'role'=>'button')) !!}
    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
