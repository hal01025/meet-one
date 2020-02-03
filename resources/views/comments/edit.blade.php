@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/comments/edit.css') }}">
</head>


@section('content')

<h4 class="text-center mt-3 mb-3 comment-title">コメント編集</h4>
<div class="form-group">
    {!! Form::model($comment, ['route' => ['comment.update', $comment->id], 'method' => 'put']) !!}
    <div class="offset-2-col-8 form-container">
    {!! Form::label('comment', 'コメント: ')!!}
    {!! Form::text('comment', $comment->comment, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="text-center button-create">
    {!! Form::submit('変更', ['class' => 'btn btn-secondary']) !!}
    {!! Form::close() !!}
</div>
@endsection