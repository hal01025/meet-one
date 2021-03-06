<header>
    <div class="header-container">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="header-wrapper">
          <a href="#" class="navbar-brand"><img class="header-logo" src="{{ secure_asset('images/hedgehog-2418210_1280.png') }}">Meet-one.</a>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="header-list navbar-collapse collapse" id ="nav-bar">
          <ul class="navbar-nav">
            @if (Auth::check())
            <li class="nav-item"><a href="{{ route('top',[]) }}" class="nav-link menu-list"><i class="fas fa-home"></i>マイページ</a></li>
            <li class="nav-item"><a href="{{ route('logout.get',[]) }}" class="nav-link menu-list"><i class="fas fa-sign-in-alt"></i>ログアウト</a></li>
            <li class="nav-item"><a href="{{ route('followinglists.index',[]) }}" class="nav-link menu-list"><i class="fas fa-user-friends"></i>フォロー</a></li>
            <li class="nav-item"><a href="{{ route('followerlists.index',[]) }}" class="nav-link menu-list"><i class="fas fa-user-friends"></i>フォロワー</a></li>
            <li class="nav-item"><a class="menu-list nav-link" href="{{ route('comment.index',[]) }}"><i class="fas fa-comments"></i>コメント</a></li>
            
            @else
            <li class="nav-item"><a href="{{ route('top',[]) }}" class="nav-link menu-list"><i class="fas fa-play"></i>トップページ</a></li>
            <li class="nav-item"><a href="{{ route('login',[]) }}" class="nav-link menu-list"><i class="fas fa-pen"></i>ログイン</a></li>
            @endif

          </ul>
        </div>
      </nav>
    </div>
</header>