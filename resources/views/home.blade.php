<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Woonfeiten</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">

        <!-- Import Bootstrap/Vue files -->
        <link href="{{ URL::to('css/app.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ URL::to('js/app.js') }}"></script>
        <style>
            body {
                background-color: #2ab27b;
            }

            .title {
                margin-top: 300px;
                font-size: 4em;
                font-family: 'Patrick Hand SC', cursive;
                color: white;
            }

            .sub {
                font-size: 2em;
                font-family: 'Patrick Hand SC', cursive;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container text-center">
           <h1 class="title"><strong>Woonfeiten</strong></h1>
           <h4 class="sub">Hier vind u alle informatie over de woningmarkt!</h4>
        </div>
    </body>
</html>
