<div class="navbar-back">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a href="#" class="date navbar-brand">Today <span>is</span> <?php echo date('20y/m/d')?></a>
        
        @if (\Auth::check())
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="menu-list nav-link" href="{{ route('communities.create', []) }}"><i class="fas fa-plus"></i>コミュニティ作成</a></li>
                <li class="nav-item"><a class="menu-list nav-link" href="#"><i class="fas fa-search"></i>コミュニティ検索</a></li>
                <li class="nav-item"><a class="menu-list nav-link" href="#"><i class="fas fa-search"></i>ユーザー検索</a></li>
                <li class="nav-item"><a class="menu-list nav-link" href="#"><i class="fas fa-info-circle"></i>お知らせ</a></li>
            </ul>
        </div>
        @else
        
        @endif
    </nav>
</div>
    