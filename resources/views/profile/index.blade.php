@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/profile/index.css') }}">
</head>

@section('content')

<div class="text-center">
    <h4 class="text-center mb-4">～プロフィール画像変更～</h4>
    <form action"{{ action('ProfileController@store') }}", method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image" class="form-control">
    <input type="submit" class="btn btn-primary mt-3" value="アップロード">
    </form>
</div>

@endsection