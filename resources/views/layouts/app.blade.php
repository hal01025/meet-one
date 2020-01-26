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
            <link rel="stylesheet" href ="css/stylesheet_footer.css">
            <link rel="stylesheet" href ="css/stylesheet_main.css">
            <link rel="stylesheet" href ="css/stylesheet_nav.css">
            <link rel="stylesheet" href ="css/stylesheet_header.css">
        </head>
        

        
        <body>
            @include("commons.header")
            @include("commons.error_messages")
            
            <div class="container">
                @include("commons.main")
                @include("commons.nav")
            </div>
            
            <div class="container">    
                @yield("content")
            </div>
            
            @include("commons.footer")
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
                <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        </body>
    </html>