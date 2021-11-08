@extends('layout.softwarelayout')


@section('main_content')

<div class="container mt-5">
    <h1>Software Category</h1>

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
            <td>{{ $cat['category_code'] }}</td>
            <td>{{ $cat['category_name'] }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('Category.edit', $cat->id) }}">
                        <button type="submit" class="btn btn-secondary">Edit</button>
                    </a>
                
                    <form action="{{ route('Category.destroy', $cat->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
    
                    <a href="{{ route('Category.show',$cat->id )}}">
                        <button type="submit" class="btn btn-info">Show</button>
                    </a>
                </div>

                


            </td>
        </tr>
            
        @endforeach
        

    </table>

    <a href="{{ route('Category.create') }}" class="btn btn-secondary">Add New Category</a>

</div>
@endsection