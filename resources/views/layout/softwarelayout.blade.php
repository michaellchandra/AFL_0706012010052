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

    @yield('title')
    @yield('main_content')

    <footer>
        <div class="justify-content-center fixed-bottom text-center p-3 text-white" style="background-color: rgb(126, 126, 126);">
            © 2021 Copyright:
            <a class="text-white" href="https://macefs.com/">Michael Chandra</a>
          </div>
    </footer>
    
</body>
</html>