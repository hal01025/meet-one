@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followers/index.css') }}">
</head>

@section('content')
<div class="container">
    <h4 class="text-center mb-5 follower-list">フォロワーリスト</h4>
    <table class="table table-striped">
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ユーザー名</th>
        </tr>
        @foreach ($followers as $follower)
        <tr>
            <td class="text-center">{{ $follower->id }}</td>
            <td class="text-center"><a href="{{ route('followerlists.show', ['id' => $follower->id ]) }}">{{ $follower->name }}</a></td>
        </tr>    
        @endforeach
    </table>
</div>
@endsection