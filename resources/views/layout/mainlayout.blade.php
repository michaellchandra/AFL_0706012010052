<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    @include('layout.navigation')
    <div class="container">
        <h1>{{ $title }}</h1>
    </div>
    
    <div class="container pt-5" >
        @yield('main_content')

    </div>
    
    <footer>
        <nav class="justify-content-center fixed-bottom bg-warning text-dark text-center">
            <p>Copyright 2021 | Computer Software Seller</p>

        </nav>
    </footer>


</body>
</html>