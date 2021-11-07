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
            <th>Software Name</th>
            <th>Platform</th>
            <th class="text-center">Action</th>
        </tr>

        @foreach ($software as $soft )
        <tr class="table-secondary">
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $soft['software_code'] }}</td>
            <td><a href="{{ route('Category.show',$soft->category->category_code) }}">{{ $soft->category->category_name}}</a></td>
            <td>{{ $soft['software_name'] }}</td>
            <td>{{ $soft['software_platform'] }}</td>
            <td>
                <a href="">
                    <button type="submit" class="btn">Edit</button>
                </a>
            </td>
        </tr>
            
        @endforeach
        
        

    



    </table>

    <a href="{{ route('Software.create') }}" class="btn btn-secondary">Add New Software</a>

</div>
@endsection