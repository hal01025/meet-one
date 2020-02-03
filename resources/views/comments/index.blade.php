@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/comments/index.css') }}">
</head>


@section('content')
    <div class="container">
        <h3 class="text-center mb-4">投稿したコメント一覧</h3>
         <p class="text-center mb-5"><button class="btn btn-secondary"><a href="{{ route('comment.create') }}">コメント作成</a></button></p>
        <table class="table table-striped">
            <tr>
                <th class="text-center">投稿日時</th>
                <th class="text-center">コメント</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
            </tr>
            @foreach($comments as $comment)
                <tr>
                    <td class="text-center">{{ $comment->created_at }}</td>
                    <td class="text-center">{{ $comment-> comment }}</td>
                    <td class="text-center"><a href="{{ route('comment.edit', ['id' => $comment->id]) }}" class="btn btn-primary edit-btn">編集</a></td>
                    <td class="text-center">
                        {!! Form::model($comment, ['route' => ['comment.destroy', $comment->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
       
@endsection