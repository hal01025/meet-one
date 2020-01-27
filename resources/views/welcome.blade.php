@extends('layouts.app')

@section('content')

<div class="center jumbotron">
        <div class="text-center">
            @if (Auth::check())
            <h2>{{ Auth::user()->name}}</h2>
            <div class = "main-container">
              <div class = "nav-wrapper">
                <h3 class = "nav-name">コミュニティリスト</h3>
                <p class = "nav-para2">このコミュニティ<br>の登録者数は1名です</p>
                <div class = "form-wrapper">  
                  <p class = "nav-para">コミュニティ検索: </p>
                  <div class = "search-box">
                    <form class="search-form" action="form.php" method="post">
                      <input type = "text" name = "community" class = "form">
                      <input type = "submit" value = "検索">
                    </form>
                  </div>
                </div>
                <ul class = "nav-list">
                  <li><a href = "">キーワード1</a></li>
                  <li><a href = "">キーワード2</a></li>
                  <li><a href = "">キーワード3</a></li>
                  <li><a href = "">キーワード4</a></li>
                  <li><a href = "">キーワード5</a></li>
                  <li><a href = "">キーワード6</a></li>
                </ul>
              </div>

        
                <article>
                  <div class = "article-container">
                    <div class = "article-wrapper">
                      <!--<img src = "images/keyboard-690066_1920.jpg" class = "article-image">-->
                      <div class = "community-name-container">
                        <p class = "community-name">PHP/Laravel</p>
                      </div>
                      <div class = "comment-thread">
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class = "c-th">
                            <p class = "comment-date">2020/1/17</p>
                            <p class = comment>コメント1</p>
                          </div>
                          <div class = "comment-fix">
                            <ul>
                              <li><a href="mailto:"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="mailto:"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="mailto:"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
            @else
                <h1>Welcome to the Meet-one.</h1>
                    {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            @endif
            
        </div>
    </div>
@endsection