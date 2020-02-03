@extends('layouts.app')

@section('content')

<h4 class="text-center">プロフィール編集</h4>

{!! Form::model($user, ['route' => 'info.update']) !!}
{!! Form::label('gender', '性別') !!}
{!! Form::text('gender', null, ['class' => 'form-control']) !!}

{!! Form::label('age', '年齢') !!}
{!! Form::text('age', null, ['class' => 'form-control']) !!}

{!! Form::label('hobby', '趣味') !!}
{!! Form::text('hobby', Auth::user()->hobby, ['class' => 'form-control']) !!}

{!! Form::label('intro', '自己紹介') !!}
{!! Form::text('intro', Auth::user()->intro, ['class' => 'form-control']) !!}

<div class="text-center mt-3">
{!! Form::submit('変更', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}


@endsection