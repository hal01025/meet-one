@extends('layouts.app')

@section('content')
<h4 class="text-center mt-3 mb-3"><img src="{{ secure_asset('images/') }}" id="communities-create-logo">コミュニティ詳細ページ</h3>
<p class="text-center">コミュニティID: {!! $community->id !!}</p>
<h4 class="text-center">コミュニティ名: {!! $community->name !!}</h4>
<p class="text-center">{!! $community->description !!}</p>

@endsection