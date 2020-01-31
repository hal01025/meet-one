@extends('layouts.app')

@section('content')

<p class="text-center">フォロー詳細ページ</p>
<p class="text-center">フォロー情報</p>
<p class="text-center">{{ $following->name }}</p>

@endsection