@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/communities/index.css') }}">
</head>

@section('content')
<div class="container">
    <div class="community-container">
        <h3 class="text-center mt-3 mb-3 community-title">コミュニティ一覧</h3>
            <table class="table table-striped">
                <tr>
                    <th class="text-center">コミュニティ名</th>
                    <th class="text-center">コミュニティ概要</th>
                    <th class="text-center">参加/退会</th>
                </tr>
                @foreach ($communities as $community)
                    <tr>
                        <td class="text-center"><a class="community-name" href="{{ route('communities.show', ['id' => $community->id ]) }}">{{ $community->name }}</a></td>
                        <td class="text-center">{{ $community->description }}</td>
                        @if (Auth::user()->is_joining($community->id))
                        <td class="text-center">
                        {!! Form::open(['route' => ['user.unjoin', $community->id], 'method' => 'delete']) !!}
                        {!! Form::submit('退会', ['class' => 'btn btn-secondary']) !!}
                        {!! Form::close() !!}
                        </td>
                        @else
                        <td class="text-center">
                        {!! Form::open(['route' => ['user.join', $community->id], 'method' => 'post']) !!}
                        {!! Form::submit('参加', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        <div class="pagination-box">    
        <li class="pagination">{{ $communities->links('pagination::bootstrap-4')}}</li>
        </div>
    </div>
</div>
@endsection