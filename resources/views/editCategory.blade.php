@extends('layout.mainlayout')

@section('main_content')

<div class="container mt-5">
    
    <form action="{{ route('Category.update', $category->id) }}" method="post">
        @csrf

        <input type="hidden" name="_method" value="PATCH">
        <div>
            <label for="category_name" class="form-label">Category Name : </label>
            <input id="category_name" name="category_name" type="text" class="form-control" value="{{ $category->category_name }}" required>

            <label for="category_code" class="form-label">Code : </label>
            <input id="category_code" name="category_code" type="text" class="form-control" value="{{ $category->category_code }}"" required>

            <br>
            <button type="submit" class="btn bg-success">Submit</button>

        </div>

    </form>

</div>
@endsection