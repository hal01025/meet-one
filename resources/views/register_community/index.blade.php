@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/register_community/index.css') }}">
</head>

@section('content')

<div class="container">
    <h4 class="text-center mt-2 mb-5 community-list">登録コミュニティ一覧</h4>
    
    <table class="table table-striped mb-3">
        <tr>
            <th class="text-center">コミュニティ名</th>
            <th class="text-center">コミュニティ概要</th>
        </tr>
        @foreach($register_communities as $register_community)
        <tr>
            <td class="text-center"><a href="{{ route('communities.show', ['id' => $register_community->id])}}">{{$register_community->name}}</a></td>
            <td class="text-center">{{$register_community->description}}</td>
        </tr>
        @endforeach
    </table>
    <li class="pagination">{{ $register_communities->links('pagination::bootstrap-4') }}</li>
</div>

@endsection