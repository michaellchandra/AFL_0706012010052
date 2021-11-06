@extends('layout.softwarelayout')

@section('title')
@section('main_content')

<div class="container">
    <h1>List Course</h1>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Category</th>
            <th>Software Name</th>
            <th>Platform</th>
        </tr>

    @foreach ($software as $sw )
        <tr>
            <td>{{ $loop -> index+1 }}</td>
            <td><a href=""></a></td>
        </tr>
    @endforeach



    </table>

    <a href="" class="btn btn-secondary">Add New Software</a>

</div>
@endsection