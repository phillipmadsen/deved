@extends('backend/layout/layout')
@section('scirptnstyles')
{!! Minify::stylesheet(array('/assets/bootstrap/css/bootstrap-tagsinput.css')) !!}
{!! Minify::javascript(array('/ckeditor/ckeditor.js', '/assets/bootstrap/js/bootstrap-tagsinput.js', '/assets/js/jquery.slug.js')) !!}

<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

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
    <h1> Article <small> | Update Article</small> </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url(getLang() . '/admin/article') !!}"><i class="fa fa-book"></i> Article</a></li>
        <li class="active">Update Article</li>
    </ol>
</section>
<br>

<section class="content back newlayout" id="category-create-back">
    <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
         <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            <div class="container">

                    {!! Form::open( array( 'route' => array(getLang(). '.admin.article.update', $article->id), 'method' => 'PATCH', 'files'=>true)) !!}
                <!-- Title -->
                <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                    <label class="control-label" for="title">Title</label>

                    <div class="controls">
                        {!! Form::text('title', $article->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                        <span class="small">this is the main title of the page and title of the blog intro on blog listing page // itemprop="headline name"
                        </span>
                        @if ($errors->first('title'))
                        <span class="help-block"> {!! $errors->first('title') !!} </span>
                        @endif
                    </div>
                </div>
                <br>



            <!-- / PUBLISHED_BY / Form Input -->
       {{--      <div class="control-group {!! $errors->has('published_at') ? 'has-error' : '' !!}">

                     {!! Form::label('published_at', 'Publish Date:') !!}
                     <div class="controls">
                    {!! Form::input('date', 'published_at', $article->published_at,  array('class' => 'form-control publishedat', 'id' => 'publishedat', 'value'=>Input::old('published_at'))) !!}
                     @if ($errors->first('published_at'))
                    <small class="text-danger">{{ $errors->first('published_at') }}</small>
                    @endif

                </div>
            </div>
                <br> --}}






                <!-- excerpt -->
                <div class="control-group {!! $errors->has('excerpt') ? 'has-error' : '' !!}">
                    <label class="control-label" for="title">Excerpt</label>

                    <div class="controls">

                        {!! Form::textarea('excerpt', $article->excerpt, array('class'=>'form-control', 'id' => 'excerpt', 'placeholder'=>'Excerpt', 'value'=>Input::old('excerpt'))) !!}
                        <span class="small">This is the short info section on the blog listing page with the read more button // itemprop="blogPosting"
                        </span>
                        @if ($errors->first('excerpt'))
                        <span class="help-block">{!! $errors->first('excerpt') !!}</span>
                        @endif
                    </div>
                </div>
                <br>

                <!-- Content -->
                <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
                    <label class="control-label" for="title">Content</label>

                    <div class="controls">
                        {!! Form::textarea('content', $article->content, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) !!}
                        <span class="small">this is the main contend of the main article page // itemprop="articleBody"
                        </span>
                        @if ($errors->first('content'))
                        <span class="help-block">{!! $errors->first('content') !!}</span>
                        @endif
                    </div>
                </div>
                <br>

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
                                            {!! Form::text('meta_description', $article->meta_description, array('class'=>'form-control', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_description'))) !!}
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
                                            {!! Form::textarea('meta_keywords', $article->meta_keywords, array('class'=>'form-control', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>Input::old('meta_keywords'))) !!}
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



                 <!-- Category -->
                <div class="control-group {!! $errors->has('category') ? 'error' : '' !!}">
                    <label class="control-label" for="title">Category</label>

                    <div class="controls">
                        {!! Form::select('category', $categories, $article->category_id, array('class' => 'form-control', 'value'=>Input::old('category'))) !!}
                         <span class="small">these are the article targeted keywords to get visits in search // itemprop=""
                         </span>
                        @if ($errors->first('category'))
                        <span class="help-block">{!! $errors->first('category') !!}</span>
                        @endif
                    </div>
                </div>
                <br>

             <!-- Tag -->
                <div class="control-group {!! $errors->has('tag') ? 'has-error' : '' !!}">
                    <label class="control-label" for="title">Tag</label>

                    <div class="controls">

                        {!! Form::text('tag', $tags, array('class'=>'form-control', 'id' => 'tag', 'placeholder'=>'Tag', 'value'=>Input::old('tag'))) !!}
                        <span class="small">these are the article targeted terms to get visits in search // itemprop=""
                        </span>
                        @if ($errors->first('tag'))
                        <span class="help-block">{!! $errors->first('tag') !!}</span>
                        @endif
                    </div>
                </div>
                <br>

                <!-- Image -->
                <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                        <img data-src="" {!! (($article->path) ? "src='".url($article->path)."'" : null) !!} alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                    {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                  @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                    </div>
                    <br>



                <!-- Published -->
                <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">

                    <div class="controls">
                        <label class="checkbox">{!! Form::checkbox('is_published', 'is_published',$article->is_published) !!} Publish ?</label>
                        @if ($errors->first('is_published'))
                        <span class="help-block">{!! $errors->first('is_published') !!}</span>
                        @endif
                    </div>
                </div>
                <br>
                {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
                <script>
                    window.onload = function () {
                        CKEDITOR.replace('content', {
                            "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
                        });
                    };
                </script>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
