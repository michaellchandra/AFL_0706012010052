<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-primary" >
    @include('layout.navigation')
    @section('title')
    
    <div class="jumbotron h-100  text-center text-light" style="margin-top: 280px">
        <h1 style="font-size: 140px">WELCOME</h1>
        <p style="font-size: 20px">Computer Software Seller</p>
    </div>
    <div >

    </div>
    @section('main_content')
    
    @endsection
    
    <footer>
        <div class="justify-content-center fixed-bottom text-center p-3 text-light" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright :
            <a class="text-light" href="https://macefs.com/">Michael Chandra</a>
          </div>
    </footer>
    
</body>
</html>