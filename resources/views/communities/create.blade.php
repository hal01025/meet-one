@extends('layouts.app')

@section('content')

<div class="container">   
    <h3 class="text-center mt-3 mb-3">コミュニティ作成ページ</h3>
    {!! Form::model($community, ['route' => 'communities.store']) !!}
    <div class="text-center">
        {!! Form::label('name', 'コミュニティ名: ') !!}
        {!! Form::text('name', null, ['class' => ''])!!}
    </div>
    
    <div class="text-center">
        {!! Form::label('description', 'コミュニティ紹介文: ') !!}
        {!! Form::text('description', null, ['class' => ''])!!}
    </div>
    
    <div class="text-center">
        {!! Form::submit('作成') !!}
    </div>
    {!! Form::close() !!}
</div>


@endsection