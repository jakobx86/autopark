<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoparks</title>    
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <ul>
            <li><a href="">Автопарки</a></li>
            <li><a href="">Машины</a> </li>
        </ul>
    </header>
    
     <div class="wraper">
     @yield('content')
        <!-- <div class="section-wraper">
            <div class="sectoin-link">
                <a href="">
                    <h1>Автопарки</h1>
                </a>
            </div>
            <div class="sectoin-link">
                <a href="">
                    <h1>Машины</h1>
                </a>
            </div>
        </div>         -->
    </div> 
    <script type="text/javascript" src="{{ URL::asset('js/jQuery.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <!-- <script src="js/jQuery.js"></script>
    <script src="js/main.js"></script> -->
</body>
</html>
