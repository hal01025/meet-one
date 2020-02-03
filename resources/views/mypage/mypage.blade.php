    
      @if (Auth::check())
      <div class="all-container">
        <div class="my-profile-container">
          <h2 class="my-profile text-center mb-3">My-profile</h2>
        </div>
      @else
      @endif
        <div class = "main-container">  
          @if (Auth::check())
            <div class="nav-wrapper">
              <h3 class="greetings">ようこそ！{{ Auth::user()->name}} <span>さん</span></h3>
                <h3 class = "nav-name">フォロー/フォロワー数</h3>
                <p class="follow text-center">あなたの現在のフォロー数は{{ Auth::user()->following_counts() }}です。</p>
                <p class="follow text-center">あなたの現在のフォロワー数は{{ Auth::user()->follower_counts() }}です。</p>
              <h4 class="text-center comment-imp mt-3 mb-3">コメント(新着順)</h4>      
            <table class="table table-striped">
                @foreach ($comments as $comment)
              <tr>
                <td class="comment mt-2 mb-3 comment-imp"><span>{{ $comment->created_at }}</span></br>{{ $comment->comment }}</td>
              </tr>
                @endforeach
            </table>
            </div>

        
          
            <div class = "article-container">
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
                        {!! Form::submit('参加', ['class' => 'btn btn-secondary']) !!}
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