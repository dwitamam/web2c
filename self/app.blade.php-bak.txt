<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <link rel="shortcut icon" href=" {{asset('favicon.ico')}} ">
</head>

<body>
    @include('inc.navbar')
    
    <div class="container">
        <!-- pesan validasi -->
        @include('inc.messages')
    </div>
    
    <!-- Memanggil content -->
    @yield('content')
    @include('inc.footer')


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>

</html>