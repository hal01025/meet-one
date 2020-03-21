    
      @if (Auth::check())
      <div class="all-container">
        <div class="my-profile-container mb-5">
          <h2 class="my-profile text-center pb-4 mb-5">～My-profile～</h2>
          <div class="profile-container row">
            <div class="image-container text-center col-sm-5">
              @if (Storage::disk('s3')->exists('myprof/'.Auth::id().'.jpg'))
              <img src="{{ secure_asset($post) }}" class="profile-image">
              @else
              <img src="{{ secure_asset('images/comic-2026751_1280.png') }}" class="profile-image">
              @endif
              <a href="{{ route('profile.index') }}" class="btn btn-secondary profile-edit mt-2 mb-5">プロフィール画像変更</a>
            </div>
            <div class="self-introduction col-sm-6 offset-sm-1">
              <h3 class="mb-4">Information</h2>
              <p class="ml-3 mb-3">ユーザー名: {{ Auth::user()->name }}<span>さん</span></p>
              <p class="ml-3 mb-3">年齢: {{ Auth::user()->age }} 歳</p>
              <p class="ml-3 mb-3">性別: {{ Auth::user()->gender }}</p>
              <p class="ml-3 mb-3">趣味: {{ Auth::user()->hobby }}</p>
              <p class="ml-3 mb-3">自己紹介: {{ Auth::user()->intro }}</p>
              
              <div class="text-center mt-3">
                <a href="{{ route('info.index') }}" class="mt-5 btn btn-primary profile-edit">プロフィール編集</a>
              </div>
            </div>
          </div>  
        </div>
      @else
      @endif
        <div class = "main-container row">  
          @if (Auth::check())
            <div class="nav-wrapper col-sm-5">
              <h3 class="greetings">ようこそ！{{ Auth::user()->name }} <span>さん</span></h3>
                <h3 class = "nav-name">フォロー/フォロワー数</h3>
                <p class="follow">あなたの現在のフォロー数は{{ Auth::user()->following_counts() }}です。</p>
                <p class="follow">あなたの現在のフォロワー数は{{ Auth::user()->follower_counts() }}です。</p>
              <h4 class="comment-imp mt-3 mb-3">コメント(新着順)</h4>      
            <table class="table table-striped">
                @foreach ($comments as $comment)
              <tr>
                <td class="comment mt-2 mb-3 comment-imp"><span>{{ $comment->created_at }}</span></br>{{ $comment->comment }}</td>
              </tr>
                @endforeach
            </table>
            </div>

        
          
            <div class = "article-container col-sm-6 offset-sm-1">
              <div class = "article-wrapper">
                <div class="title-wrapper">
                  <h3 class="article-name mb-3">新着コミュニティ一覧</h3>
                </div>
                <table class="table table-striped">
                   <tr>
                     <th class="text-center">名前</th>
                     <th class="text-center">コミュニティ概要</th>
                     <th class="text-center">参加/退会</th>
                   </tr>
                   @foreach ($communities as $community)
                   <tr>
                     <td class="text-center"><a href="{{ route('communities.show', ['id' => $community->id]) }}">{{ $community->name }}</a></td>
                     <td class="text-center">{{ $community->description }}</td>
                    @if (Auth::user()->is_joining($community->id))
                      <td class="text-center">
                          {!! Form::open(['route' => ['user.unjoin', $community->id], 'method' => 'delete']) !!}
                          {!! Form::submit('退会', ['class' => 'btn btn-secondary']) !!}
                          {!! Form::close() !!}
                      </td>
                    </tr>
                    @else
                      <td class="text-center">
                        {!! Form::open(['route' => ['user.join', $community->id], 'method' => 'post']) !!}
                        {!! Form::submit('参加', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                      </td>
                      </tr>
                    @endif
                
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          @endif
        </div>      