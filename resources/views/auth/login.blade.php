@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/auth/login.css') }}">
</head>

@section('content')
    <div class="text-center">
        <h3 class="mt-3 mb-4 login-title">ログイン</h3>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <p class="text-center pt-2">{!! Form::submit('Log in', ['class' => 'btn btn-secondary']) !!}</p>
            {!! Form::close() !!}

            <p class="mt-2">新規登録の方は {!! link_to_route('signup.get', '新規登録ページへ!') !!}</p>
        </div>
    </div>
@endsection