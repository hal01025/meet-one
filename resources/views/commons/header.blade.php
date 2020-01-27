<header>
    <div class="header-container">
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="header-wrapper">
          <a href="#" class="navbar-brand"><img class="header-logo" src="images/hedgehog-2418210_1280.png">Meet-one.</a>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="header-list navbar-collapse collapse" id ="nav-bar">
          <ul class="navbar-nav">
            @if (Auth::check())
            <li class="nav-item">{!! link_to_route('top', 'マイページ', [], ['class' => 'menu-list nav-link',]) !!}</li>
            <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'menu-list nav-link',]) !!}</li>
            <li class="nav-item">{!! link_to_route('communities.index', 'コミュニティ一覧', [], ['class' => 'menu-list nav-link',]) !!}</li>
            <li class="nav-item">{!! link_to_route('communities.index', 'フレンド一覧', [], ['class' => 'menu-list nav-link',]) !!}</li>
            @else
            <li class="nav-item">{!! link_to_route('top', 'トップページ', [], ['class' => 'menu-list nav-link',]) !!}</li>
            <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'menu-list nav-link',]) !!}</li>
            @endif

          </ul>
        </div>
      </nav>
    </div>
</header>