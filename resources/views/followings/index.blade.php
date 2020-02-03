@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/followings/index.css') }}">
</head>

@section('content')
<div class="container">    
    <h4 class="text-center mb-5 following-list">フォローリスト</h4>
        <table class="table table-striped">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">ユーザー名</th>
            </tr>
        @foreach ($followings as $following)
            <tr>
                <td class="text-center">{{ $following->id }}</td>
                <td class="text-center"><a href="{{ route('followinglists.show', ['id' => $following->id ]) }}">{{ $following->name }}</a></p>
            </tr>    
        @endforeach
        </table>
</div>
@endsection