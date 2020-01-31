<footer>
    <div class="footer-wrapper">
        <nav class = "footer-wrapper navbar navbar-expand-md navbar-dark">
            <div>
                <a href="#" class="navbar-brand">Meet-one.</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>   
                
            <div class = "footer-list collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav footer-list">
                    <li><a href="{{ route('footer-info1',[]) }}">アプリ概要</a></li>
                    <li><a href="{{ route('footer-info2',[]) }}">アプリの使い方</a></li>
                    <li><a href="{{ route('footer-info3',[]) }}">おわりに</a></li>
                </ul>
            </div>
        </nav>
    </div>
</footer>