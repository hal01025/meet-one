@extends('layouts.app')

@section('content')

<p class="text-center">this is a friendlists.show</p>
<p class="text-center">フォロワー情報</p>
<p class="text-center">{{ $follower->name }}</p>

@endsection