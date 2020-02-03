<style>
    .main-wrapper {
        background-image: url({{ secure_asset('images/friendship-2366955_1920.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center top;
        border-radius: 5px;
    }
    
    @media (min-width: 1300px) {
        .main-wrapper{
            width: 1300px;
            margin: 0 auto;
    }
</style>

<main>
    
    <div class="main-wrapper">
    @if (Auth::check())
        <h2>Welcome!</h2>
    @else
        <h2>Let's Join Communities!</h2>
    @endif
    </div>
</main>