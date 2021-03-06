@extends('layout.softwarelayout')

@section('title')
@section('main_content')

<div class="container mt-5 " style="margin-bottom: 100px">
    <h1>Software List</h1>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Category</th>
            <th>Software Name</th>
            <th>Platform</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>

        @foreach ($software as $soft )
        <tr class="table-secondary">
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $soft['software_code'] }}</td>
            <td><a href="{{ route('Category.show',$soft->category->id) }}">{{ $soft->category->category_name}}</a></td>
            <td>{{ $soft['software_name'] }}</td>
            <td>{{ $soft['software_platform'] }}</td>
            <td>{{ $soft['software_description'] }}</td>

            <td>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('Software.edit',$soft->id) }}">
                        <button type="submit" class="btn btn-secondary">Edit</button>
                    </a>
    
                    
                    <form action="{{ route('Software.destroy', $soft->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
    
                    <a href="{{ route('Software.show',$soft->id )}}">
                        <button type="submit" class="btn btn-info">Show</button>
                    </a>
                </div>
                
                
            </td>


        </tr>
            
        @endforeach
        
    </table>

    <a href="{{ route('Software.create') }}" class="btn btn-secondary">Add New Software</a>

</div>
@endsection