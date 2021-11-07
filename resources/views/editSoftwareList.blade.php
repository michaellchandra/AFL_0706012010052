@extends('layout.mainlayout')

<div class="container mt-5">
        
    <form action="/editCategory" method="post">
        @csrf
        <div>
            <label for="inputCategoryName" class="form-label">Software Name : </label>
            <input id="name" name="name" type="text" class="form-control">

            <label for="inputCategoryCode" class="form-label">Code : </label>
            <input id="code" name="code" type="text" class="form-control">

            <br>
            <button type="submit" class="btn bg-success">Submit</button>

        </div>

    </form>

</div>