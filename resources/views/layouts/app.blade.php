<!DOCTYPE html>
<html lang = "ja">
    
    <html>
        <head>
            <meta charset="utf-8">
            <title>meet-one</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
            <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
            <link rel="stylesheet" href ="{{ secure_asset('css/stylesheet_footer.css') }}">
            <link rel="stylesheet" href ="{{ secure_asset('css/stylesheet_main.css') }}">
            <link rel="stylesheet" href ="{{ secure_asset('css/stylesheet_nav.css') }}">
            <link rel="stylesheet" href ="{{ secure_asset('css/stylesheet_header.css') }}">
            <link rel="stylesheet" href ="{{ secure_asset('css/stylesheet_mypage.css') }}">
        </head>
        
        <style>
            .content-wrapper {
                background-color:rgba(100,100,100,0.2);
                border-radius:5px;
            }
        </style>
        
        <body>
            @include("commons.header")
            
            <div class="spacing">
            </div>
            
            @include("commons.error_messages")
            
            <div class="container">
                @include("commons.main")
                @include("commons.nav")
            
                <div class="content-wrapper mt-3 mb-3 pt-3 pb-3">    
                    @yield("content")
                </div>
            </div>
            
            @include("commons.footer")
            
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
                <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        </body>
    </html>