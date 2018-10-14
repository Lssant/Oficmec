<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oficina Mecânica</title>
    <meta name="csrf-token" content=" {{ csrf_token() }}" >
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
    <!-- <script src="main.js"></script> -->
    <style>
        body {
            padding: 10px;
        }
        .navbar{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        @component('componente_navbar', ["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    
    @hasSection ('javascript')
        @yield('javascript')        
    @endif
</body>
</html>