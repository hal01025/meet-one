@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/comments/create.css') }}">
</head>


@section('content')
<h4 class="text-center mb-3">新規コメント作成</h4>
<div class="form-group textt-center container">
{!! Form::model($comment, ['route' => 'comment.store'], []) !!}
{!! Form::label('comment', 'コメント') !!}
{!! Form::text('comment', null, ['class' => 'form-control']) !!}
</div>
<div class="text-center">
{!! Form::submit('コメントする', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
</div>

@endsection