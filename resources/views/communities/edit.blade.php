@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/communities/edit.css') }}">
</head>

@section('content')

<h4 class="text-center mb-3 editer">{{ $community->name }}の編集ページ</h4>

<div class="form-group">
    {!! Form::model($community, ['route' => ['communities.update', $community->id], 'method' => 'put']) !!}
<div class="offset-2-col-8 form-container">    
    {!! Form::label('name', 'コミュニティ名: ') !!}
    {!! Form::text('name', $community->name, ['class' => 'form-control']) !!}
</div>
<div class="offset-2-col-8 form-container">    
    {!! Form::label('description', 'コミュニティ概要: ') !!}
    {!! Form::text('description', $community->description, ['class' => 'form-control']) !!}
</div>
</div>
    
<div class="text-center">
        {!! Form::submit('変更', ['class' => 'btn btn-secondary']) !!}
{!! Form::close() !!}
</div>

@endsection