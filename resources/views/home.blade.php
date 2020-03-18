<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">

        <title>Laravel</title>

    </head>
    <body>
        <div id="app">
            <home
                :action-url="'{{ $actionUrl }}'"
                :logout-url="'{{ $logoutUrl }}'"
                :total-likes="'{{ $totalLikes }}'"
                :total-dislikes="'{{ $totalDislikes }}'"
                ></home>
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
