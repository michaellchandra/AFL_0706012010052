@extends('layout.mainlayout')

@section('title','category')

@section('main_content')

<div class="container">
    <div class="row justify-content-center">
        <h1>Detail Software Category {{ $category['code'] }}</h1>
        <p>Nama Kategori : {{ $category['name'] }}</p>

        <h4>List Software</h4>
        <table class="table">
            <th>
                <tr>
                    <td scope="col">No</td>
                    <td scope="col">Software</td>
                    <td scope="col">Code</td>
                    <td scope="col">Platform</td>
                    <td scope="col">Description</td>
                </tr>
            </th>
        </table>

    </div>

</div>

@endsection