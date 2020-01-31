@extends('layouts.app')

@section('content')

<h3 class="text-center pb-3">{{ $community->name }}の編集ページ</h3>

{!! Form::model($community, ['route' => ['communities.update', $community->id], 'method' => 'put']) !!}
    
    <div class="container text-center">
        {!! Form::label('name', 'コミュニティ名: ') !!}
        {!! Form::text('name', $community->name, ['class' => '']) !!}
    </div>    
    <div class="container text-center">
        {!! Form::label('description', 'コミュニティ概要: ') !!}
        {!! Form::text('description', $community->description, ['class' => '']) !!}
    </div>
    
    <div class="container text-center">
        {!! Form::submit('変更') !!}
    </div>

{!! Form::close() !!}

@endsection