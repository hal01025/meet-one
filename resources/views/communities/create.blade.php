@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ secure_asset('css/communities/create.css') }}">
</head>


@section('content')

<div class="container">
    <div class="community-container">   
        <h3 class="text-center mt-3 mb-3 community-title">コミュニティ作成ページ</h3>
        <div class="form-group">
            {!! Form::model($community, ['route' => 'communities.store']) !!}
            <div class="col-9 form-container">    
                {!! Form::label('name', 'コミュニティ名: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control'])!!}
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-9 form-container">
                {!! Form::label('description', 'コミュニティ紹介文: ') !!}
                {!! Form::text('description', null, ['class' => 'form-control'])!!}
            </div>
        </div>
        <div class="text-center button-create">
            {!! Form::submit('作成', ['class' => 'btn mb-3']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>


@endsection