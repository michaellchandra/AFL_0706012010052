@extends('layout.softwarelayout')

@section('main_content')

<div class="container mt-5">
    
    <form action="/addData" method="post">
        @csrf
        <div>
            <label for="inputSoftwareName" class="form-label">Software Name : </label>
            <input id="name" name="name" type="text" class="form-control">

            <label for="inputSoftwareCode" class="form-label">Code : </label>
            <input id="code" name="code" type="text" class="form-control">

            <label for="inputSoftwarePlatform" class="form-label">Platform : </label>
            <select name="platform" class="form-control">
                <option value="PC - Windows">PC - Windows</option>
                <option value="PC - MacOS">PC - MacOS</option>
                <option value="Mobile - Android">Mobile - Android</option>
            </select>
            <br>
            <button type="submit" class="btn bg-success">Submit</button>


        </div>


    </form>

</div>

@endsection