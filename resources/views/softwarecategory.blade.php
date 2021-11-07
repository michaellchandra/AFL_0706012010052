@extends('layout.softwarelayout')


@section('main_content')

<div class="container">
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
                <a href="{{ route('Category.edit', $cat->id) }}">
                    <button type="submit" class="btn">Edit</button>
                </a>
                <form action="{{ route('Category.destroy', $cat->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>

                <a href="{{ route('Category.show',$cat->id )}}">
                    <button type="submit" class="btn">Show</button>
                </a>


            </td>
        </tr>
            
        @endforeach
        

    </table>

    <a href="{{ route('Category.create') }}" class="btn btn-secondary">Add New Category</a>

</div>
@endsection