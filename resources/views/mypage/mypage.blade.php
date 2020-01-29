        <div class = "main-container">  
          @if (Auth::check())
            <div class="nav-wrapper">
              <h3 class="greetings">ようこそ！</h3>
              <p class="user-name">{{ Auth::user()->name}} <span>さん</span></p>
                <h3 class = "nav-name">フレンドリスト</h3>
                <p class = "nav-para">あなたの登録したフレンドは{{1}}名です</p>
                
                <ul class = "friend-list">
                  @foreach ($friends as $friend)
                    <li><a href="#" class="friend-name">{{ $friend->name }}<span> さん</span></a></li>
                  @endforeach
                </ul>
              </div>

        
          
            <div class = "article-container">
              <div class = "article-wrapper">
                <!--<img src = "images/keyboard-690066_1920.jpg" class = "article-image">-->
                <h3 class="article-name">コミュニティ一覧</h3>
                <div class = "form-wrapper">  
                  <div class="search-box">
                    <form class="search-form" action="form.php" method="post">
                      <p class="search-label">コミュニティ検索: </p>
                      <input type="text" name="community" class="form" id="seach-box">
                            
                      <input type = "submit" value = "検索">
                    </form>
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
                            <p class="com-description">コミュニティ概要: {{ $community->description }}</p>
                          </div>
                          <div class = "com-fix">
                            <ul>
                              <li><a href="#"><span class="fab fa-gratipay"></span>いいね</a></li>
                              <li><a href="#"><span class="fas fa-pen"></span>編集</a></li>
                              <li><a href="#"><span class="fas fa-trash-alt"></span>削除</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  </div>
                </div>
              
        

            @else
                <h2 class="ml-3 mr-3">Meet-one.を始めてみましょう!</h2>
                    {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            @endif
          </div>
        