@extends('layout.mainlayout')

@section('title','category')

@section('main_content')

<div class="container p-5 bg-primary text-light">
    <div class="row justify-content-center ">
        <h1>Detail Software Category {{ $category['category_code'] }}</h1>
        <p>Nama Kategori : {{ $category['category_name'] }}</p>
        <br>
        <br>
        <h4>List Software</h4>
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Code</th>
                    <th scope="col">Software Name</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>

            <tbody>
                @php $index = 1 @endphp
                @foreach ($category->software as $soft )
                @csrf
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $soft['software_code'] }}</td>
                        <td>{{ $soft['software_name'] }}</td>
                        <td>{{ $soft['software_platform'] }}</td>
                        <td>{{ $soft['software_description'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection