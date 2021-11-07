@extends('layout.mainlayout')


@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Detail Software</h1>
            <p>Nama Software : {{ $software['software_name'] }}</p>
            <p>Code Software : {{ $software['software_code'] }}</p>
            <p>Platform : {{ $software['software_platform'] }}</p>
            <p>Category : {{ $software->category->category_name }}</p>
        </div>

    </div>

@endsection