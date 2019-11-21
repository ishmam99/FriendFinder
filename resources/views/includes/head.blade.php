<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="This is social network html5 template available in themeforest......" />
            <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
            <meta name="robots" content="index, follow" />
            @yield('title')
    
        <!-- Stylesheets
        ================================================= -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
            <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
            <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}" />
            <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />
            <link rel="stylesheet" href="{{ asset('css/emoji.css')}}" />
        
        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
        
        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/fav.png')}}"/>
        <style>
        .image-upload > input
    {
        display: none;
    }
    
    .image-upload img
    {
        width: 80px;
        cursor: pointer;
    }
        </style>
        </head>