@extends('layout.mainlayout')


@section('main_content')
    <div class="container text-light bg-primary">
        <div class="container p-5 justify-content-center">
            <h1>Detail Software</h1>
            <br>
            
            <p>Nama Software : {{ $software['software_name'] }}</p>
            <p>Code Software : {{ $software['software_code'] }}</p>
            <p>Platform : {{ $software['software_platform'] }}</p>
            <h4>Category : <b>{{ $software->category->category_name }}</b></h4>
        </div>
    </div>

@endsection