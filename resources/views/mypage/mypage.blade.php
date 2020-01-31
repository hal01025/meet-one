        <div class = "main-container">  
          @if (Auth::check())
            <div class="nav-wrapper">
              <h3 class="greetings">ようこそ！</h3>
              <p class="user-name">{{ Auth::user()->name}} <span>さん</span></p>
                <h3 class = "nav-name">フレンドリスト</h3>
                
                <ul class = "friend-list">
                  <p class="follow">・フォロー</p>
                  <p class="#">あなたの現在のフォロー数は{{ Auth::user()->following_counts() }}です。</p>
                  @foreach ($followings as $following)
                    <li class="follow-list"><a href="{{ route('followinglists.show', ['id' => $following->id ]) }}" class="friend-name">{{ $following->name }}<span> さん</span></a></li>
                  @endforeach
                  <p class="follow">・フォロワー</p>
                  <p class="#">あなたの現在のフォロワー数は{{ Auth::user()->follower_counts() }}です。</p>
                  @foreach ($followers as $follower)
                    <li class="follow-list"><a href="{{ route('followerlists.show', ['id' => $follower->id ]) }}" class="friend-name">{{ $follower->name }}<span> さん</span></a></li>
                  @endforeach
                </ul>
              </div>

        
          
            <div class = "article-container">
              <div class = "article-wrapper">
                <div class="title-wrapper">
                  <h3 class="article-name">新着コミュニティ一覧</h3>
                </div>
                <div class = "form-wrapper">  
                  <div class="img-wrapper">
                     <!--<img src="{{ secure_asset('images/keyboard-690066_1920.jpg')}}", class="community-image">-->
                  </div>
                </div>
                      
                 @foreach ($communities as $community)
                   <div class="community-wrapper">
                      <div class="community-name-container">
                        <p class="community-name">コミュニティ名: <a href="{{ route('communities.show', ['id' => $community->id]) }}">{{ $community->name }}</a></p>
                      </div>
                      <div class="com-info">
                        <div>
                          <div class="c-box">
                            <p class="create-date">コミュニティ作成日時: {{ $community->created_at }}</p>
                            <p class="com-description">コミュニティ概要:<br> {{ $community->description }}</p>
                          </div>
                          <div class = "com-fix">
                            <ul>
                            @if (Auth::user()->is_joining($community->id))
                              <li class="button pt-3">
                                  {!! Form::open(['route' => ['user.unjoin', $community->id], 'method' => 'delete']) !!}
                                  {!! Form::submit('退会') !!}
                                  {!! Form::close() !!}
                              </li>
                            @else
                              <li class="button pt-3">
                                  {!! Form::open(['route' => ['user.join', $community->id], 'method' => 'post']) !!}
                                  {!! Form::submit('参加') !!}
                                  {!! Form::close() !!}
                            </ul>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  <div class="container pagination-box">
                      <p class="pagination-box">{{ $communities->links('pagination::bootstrap-4') }}</p>
                  </div>
                </div>
              </div>
              
        

            @else
                <h2 class="ml-3 mr-3">Meet-one.を始めてみましょう!</h2>
                    {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            @endif
          </div>
        