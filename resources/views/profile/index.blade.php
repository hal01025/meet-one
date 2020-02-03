@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/profile/index.css') }}">
</head>

@section('content')

<div class="text-center">
    <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image">
    <input type="submit">
    </form>
</div>

@endsection