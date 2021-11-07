@extends('layout.mainlayout')

@section('title','category')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <h1>Detail Software Category {{ $category['code'] }}</h1>
        <p>Nama Kategori : {{ $category['name'] }}</p>

        <h4>List Software</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Software</th>
                    <th scope="col">Code</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>

            <tbody>
                @php $index = 1 @endphp
                @foreach ($category->software as $soft )
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        @php $index++ @endphp
                        <td>{{ $soft[] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection