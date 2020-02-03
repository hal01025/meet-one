@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/comments/create.css') }}">
</head>


@section('content')

{!! Form::model($comment, ['route' => 'comment.store'], []) !!}
{!! Form::label('comment', 'コメント') !!}
{!! Form::text('comment', null, []) !!}
{!! Form::submit('コメントする', ['class' => 'btn']) !!}
{!! Form::close() !!}


@endsection