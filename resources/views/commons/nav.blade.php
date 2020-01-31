<div class="navbar-back">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a href="#" class="date navbar-brand">Today <span>is</span> <?php echo date('20y/m/d')?></a>
        
        @if (\Auth::check())
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('register_community.index', ['id' => Auth::user()->id ]) }}" class="nav-link menu-list"><i class="fas fa-comments"></i>登録コミュニティ一覧</a></li>
                <li class="nav-item"><a href="{{ route('followerlists.index',[]) }}" class="nav-link menu-list"><i class="fas fa-user-friends"></i>フォロワー</a></li>
                <li class="nav-item"><a href="{{ route('followinglists.index',[]) }}" class="nav-link menu-list"><i class="fas fa-user-friends"></i>フォロー</a></li>
                <li class="nav-item"><a class="menu-list nav-link" href="{{ route('info.get',[]) }}"><i class="fas fa-info-circle"></i>お知らせ</a></li>
            </ul>
        </div>
        @else
        
        @endif
    </nav>
</div>
    