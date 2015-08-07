@extends('backend/layout/layout')
@section('content')
{{ print_r($errors, true)  }}
<hr>
{{ print_r($_SERVER['REQUEST_METHOD'], true) }}

{!! Form::open(['url' => 'test', 'method' => 'post']) !!}
{!! Form::submit('Submit', ['class' => 'form-control']) !!}
{!! Form::close() !!}
@stop
