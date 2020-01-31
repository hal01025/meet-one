@extends('layouts.app')

@section('content')

<h3 class="text-center">コミュニティ一覧</h3>
@foreach ($communities as $community)
    <div class="container text-center">
        <p>コミュニティ名: {{ $community->name }}</p>
        <p>コミュニティ概要: {{ $community->description }}</p>
    </div>
@endforeach
{{ $communities->links('pagination::bootstrap-4')}}

@endsection