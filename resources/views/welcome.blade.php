@extends('layouts.app')

@section('content')


@if (!Auth::check())
<p class="mb-2 ml-3 mr-3">～初めての方へ～</p>
<p class="mb-3 ml-3 mr-3">このアプリを初めて利用する方は、下記のボタンをクリックしてユーザー名・メールアドレス・パスワードを入力して新規登録を行ってください。</p>
<p class="mb-2 ml-3 mr-3">～既にアカウントをお持ちの方へ～</p>
<p class="mb-5 ml-3 mr-3">ログインの際は、上記のログインボタンをクリックしてメールアドレス・パスワードを入力してログインを行ってください。</p>
<p class="mb-2 ml-3 mr-3">～このアプリのコンセプト～</p>
<p class="mb-5 ml-3 mr-3">このアプリでは自由にコメントすることができます。また、特定のコミュニティに所属することができ、趣味の合う人へ自分の存在をアピールして、交流の幅を広げる手助けになればと思い、このアプリを作成しました。</p>


<h2 class="text-center mb-3">Meet-one.を始めてみましょう!</h2>
<h3 class="text-center"><a href="{{ route('signup.get') }}" class="btn btn-secondary">新規登録</a></h3>

@endif

@include('mypage.mypage')

@endsection