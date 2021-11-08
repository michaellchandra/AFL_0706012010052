@extends('layout.softwarelayout')

@section('main_content')

<div class="container mt-5">
    <h1>Create Category</h1>
    <br>
    <form action="{{ route('Category.store')  }}" method="post">
        @csrf 
        <div>
            <label for="category_name" class="form-label">Category Name : </label>
            <input id="category_name" name="category_name" type="text" class="form-control">
            <br>
            <label for="category_code" class="form-label">Code : </label>
            <input id="category_code" name="category_code" type="text" class="form-control">
            
            <br>
            <button type="submit" class="btn btn-success">Submit</button>

        </div>

    </form>

</div>

@endsection