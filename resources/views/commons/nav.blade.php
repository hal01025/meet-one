<div class="navbar-back">
    <nav class="navbar navbar-expand-md navbar-light">
        <a href="#" class="date navbar-brand">Today <span>is</span> <?php echo date('20y/m/d')?></a>
        
        @if (\Auth::check())
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('communities.index', []) }}" class="nav-link menu-list"><i class="fas fa-rss"></i>コミュニティ一覧</a></li>
                <li class="nav-item"><a href="{{ route('register_community.index', ['id' => Auth::user()->id ]) }}" class="nav-link menu-list"><i class="fas fa-rss"></i>所属コミュニティ一覧</a></li>
                <li class="nav-item"><a class="menu-list nav-link" href="{{ route('communities.create', []) }}"><i class="fas fa-plus"></i>コミュニティ作成</a></li>
            </ul>
        </div>
        @else
        
        @endif
    </nav>
</div>
    