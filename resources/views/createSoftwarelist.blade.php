@extends('layout.softwarelayout')

@section('main_content')

<div class="container mt-5">
    
    <form action="{{ route('Software.store') }}" method="post">
        @csrf
        <div>
            <label for="software_name" class="form-label">Software Name : </label>
            <input id="software_name" name="software_name" type="text" class="form-control">

            <label for="software_code" class="form-label">Code : </label>
            <input id="software_code" name="software_code" type="text" class="form-control">

            <select name="category_id" id="category_id">
                @foreach ($category as $cat )
                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                @endforeach
            </select>
        
            <br>
            <label for="software_platform" class="form-label">Platform : </label>
            <select name="software_platform" id="software_platform">
                <option value="PC - Windows">PC - Windows</option>
                <option value="PC - MacOS">PC - MacOS</option>
                <option value="Mobile - Android">Mobile - Android</option>
                <option value="Mobile - iOS">Mobile - iOS</option>
            </select>

            <br>

            <label for="software_description" class="form-label">Description : </label>
            <input type="text" name="software_description" class="form-control">
            
            <br>
            <button type="submit" class="btn bg-success">Submit</button>


        </div>


    </form>

</div>

@endsection