@extends('layout.softwarelayout')

@section('title')

@section('main_content')

<div class="container">
    <h1>Software List</h1>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Category</th>
            <th class="text-center">Action</th>
        </tr>

        @foreach ($category as $cat )
        <tr class="table-secondary">
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $cat['code'] }}</td>
            <td></td>
            <td>
                <a href="">
                    <button type="submit" class="btn">Edit</button>
                </a>
            </td>
        </tr>
            
        @endforeach
        
        

    



    </table>

    <a href="/addSoftware" class="btn btn-secondary">Add New Software</a>

</div>

@endsection