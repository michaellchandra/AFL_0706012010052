@extends('layout.mainlayout')


@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Detail Software</h1>
            <p>Nama Software : {{ $software['name'] }}</p>
            <p>Code Software : {{ $software['code'] }}</p>
            <p>Platform : {{ $software['platform'] }}</p>
            <p>Category : {{ $software['category'] }}</p>
        </div>

    </div>