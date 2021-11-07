@extends('layout.softwarelayout')

@section('main_content')

<div class="container mt-5">
    
    <form action="{{ route('Category.store')  }}" method="post">
        @csrf 
        <div>
            <label for="category_name" class="form-label">Category Name : </label>
            <input id="category_name" name="category_name" type="text" class="form-control">

            <label for="inputCategoryCode" class="form-label">Code : </label>
            <input id="code" name="code" type="text" class="form-control">

            <br>
            <button type="submit" class="btn bg-success">Submit</button>

        </div>

    </form>

</div>