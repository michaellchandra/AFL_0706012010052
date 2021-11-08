@extends('layout.mainlayout')

@section('main_content')

<div class="container mt-5">
    
    <form action="{{ route('Category.update', $category->id) }}" method="post">
        @csrf

        <input type="hidden" name="_method" value="PATCH">
        <div class="container mt-5">
            <h1>Edit Category</h1>
            <label for="category_name" class="form-label">Category Name : </label>
            <input id="category_name" name="category_name" type="text" class="form-control" value="{{ $category->category_name }}" required>
            <br>
            <label for="category_code" class="form-label">Code : </label>
            <input id="category_code" name="category_code" type="text" class="form-control" value="{{ $category->category_code }}"" required>
            <br>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>

        </div>

    </form>

</div>
@endsection