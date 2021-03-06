@extends('backend/layout/layout')
@section('scirptnstyles')


    <script type="text/javascript">
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };

        $(document).ready(function () {

            if ($('#tag').length != 0) {
                var elt = $('#tag');
                elt.tagsinput();
            }
        });
    </script>
@stop

@section('content')



<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Article <small> | Add Article</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url(getLang() . '/admin/article') !!}"><i class="fa fa-book"></i> Article</a></li>
        <li class="active">Add Article</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Article Composer</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>

          </div>
        </div>

        <div class="box-body">

                        {!! Form::open(array('action' => '\Grace\Http\Controllers\Admin\ArticleController@store', 'files'=>true)) !!}




        <div class="row">
            <div class="col-xs-12 col-md-8">
                <!-- Title -->
                <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                    {!! Form::label('title', 'Article Title:') !!}
                    <div class="input-group">
                        <div class="controls">
                            {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                            @if ($errors->first('title'))
                            <span class="help-block">{!! $errors->first('title') !!}</span>
                            @endif
                        </div>
                        <div class="input-group-addon">
                        <i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfotitle" aria-expanded="false" aria-controls="openinfotitle"></i>
                        </div>
                    </div>
                    {{-- / input-group end--}}
                    <div class="collapse" id="openinfotitle">
                        <div class="well">
                            <medium class="list-group-item list-group-item-info">
                                this is the main article heading / SCHEMA:  itemprop="headline name"
                            </medium>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                            <div class="col-xs-6 col-md-4">
                                <div class="box box-danger">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Publishing Options</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <!-- Published -->
                                                <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">
                                                    <div class="form-group ">
                                                        {!! Form::label('status','Status', array('id'=>'','class'=>'')) !!}
                                                        {!! Form::select('status', array('draft'=>'Draft','publish'=>'Published' ), 'draft',
                                                        array( 'class'=>'form-control select2 select2-hidden-accessible')) !!}


                                                        @if ($errors->first('is_published'))
                                                        <span class="help-block">{!! $errors->first('is_published') !!}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <!-- / PUBLISHED_BY / Form Input -->
                                                <div class="form-group has-warning">
                                                    {!!  Form::label('published_at', 'Publish Date:', array('class' => 'control-label')) !!}
                                                    <div class="input-group has-warning">
                                                        <div class="input-group-addon"> <i class="fa fa-calendar"></i>
                                                        </div>
                                                        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control  publishedat',
                                                            'data-inputmask' => '"alias": "dd/mm/yyyy"',
                                                            'data-mask' => '']) !!}
                                                    </div>
                                                    @if ($errors->first('published_at'))
                                                    <small class="text-danger">{{ $errors->first('published_at') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                {!! Form::label('create', 'Save / Create:') !!}
                                                {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body --> </div>
                            </div>




                        </div>

                        <div class="row">
                            <div class="col-xs-12 ">
                                <!-- / SUMMERY / Form Input -->
                                <div class="form-group">
                                    {!! Form::label('summary', 'Excerpt / Summary:') !!}
                                    <div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
                                    {!! Form::textarea('summary', null, ['class' => 'form-control', 'data-autogrow' => '', 'rows' => '3', 'placeholder' => 'short summary goes here for post listing page']) !!}
                                        <div class="input-group-addon">
                                            <i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfosummary" aria-expanded="false" aria-controls="openinfosummary"></i>
                                        </div>
                                    </div> {{-- / input-group end--}}
                                    <div class="collapse" id="openinfosummary">
                                        <div class="well">
                                        <medium class="list-group-item list-group-item-info">short summary goes here for post listing page / SCHEMA: blogPosting / itemprop="articleBody"</medium>
                                        </div>
                                    </div>
                                   {{--    <span id="helpBlock" class="help-block">
                                    A block of help text that breaks onto a new line and may extend beyond one line. </span> --}}
                                    <small class="text-danger">{{ $errors->first('summary') }}</small>
                                </div>
                            </div>
                        </div>





                        <div class="row">
                            <div class="col-xs-12 ">
                                    <!-- / CONTENT / Form Input -->
                                    <div class="form-group">
                                        {!! Form::label('content', 'Content:') !!}
                                        <div class="input-group"> {{-- <div class="input-group-addon"></div> --}}
                                        {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content', 'placeholder' => 'content / itemprop="articleBody"']) !!}
                                            <div class="input-group-addon">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="false" data-c="#428BCA" data-hc="#428BCA" title="view info" data-toggle="collapse" href="#openinfo2" aria-expanded="false" aria-controls="openinfo2"></i>
                                            </div>
                                        </div> {{-- / input-group end--}}
                                        <div class="collapse" id="openinfo2">
                                            <div class="well"><medium class="list-group-item list-group-item-info">this is the main article body / SCHEMA: itemprop="articleBody"</medium>
                                            </div>
                                        </div>
                                        <span id="helpBlock" class="help-block">
                                        this needs to be a minimum of 350 words and should have around 5 keywords about the subject in it. </span>
                                        @if ($errors->first('content'))
                                        <small class="text-danger">{{ $errors->first('content') }}</small>
                                        @endif
                                    </div>
                            </div>
                        </div>


<hr>






                        <div class="row">
                            <div class="col-xs-12 ">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th-list">
                                            </span>META DATA</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <!-- Meta Description -->
                                                    <div class="control-group {!! $errors->has('meta_description') ? 'has-error' : '' !!}">
                                                        <label class="control-label" for="title">Meta Description</label>

                                                        <div class="controls">
                                                            {!! Form::textarea('meta_description', null, array('class'=>'form-control', 'row'=> '4', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_description'))) !!}
                                                            @if ($errors->first('meta_description'))
                                                            <span class="help-block">{!! $errors->first('meta_description') !!}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <!-- Meta Keywords -->
                                                    <div class="control-group {!! $errors->has('meta_keywords') ? 'has-error' : '' !!}">
                                                        <label class="control-label" for="title">Meta Keywords</label>

                                                        <div class="controls">
                                                            {!! Form::textarea('meta_keywords', null, array('class'=>'form-control', 'row'=> '2', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>Input::old('meta_keywords'))) !!}
                                                            @if ($errors->first('meta_keywords'))
                                                            <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
















        </div><!-- /.box-body -->


        <div class="box-footer">
          Footer
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section>

</section>
@stop
