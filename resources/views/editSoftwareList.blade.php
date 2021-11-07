@extends('layout.mainlayout')

<div class="container mt-5">
        
    <form action="{{ route('Software.update', $software->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div>
            <label for="software_name" class="form-label">Software Name : </label>
            <input id="software_name" name="software_name" type="text" class="form-control" value="{{ $software->software_name }}" required>

            <label for="software_code" class="form-label">Code : </label>
            <input id="software_code" name="software_code" type="text" class="form-control" value="{{ $software->software_code }}" required>

            <label for="software_platform" class="form-label">Platform : </label>
            <input type="text" name="software_platform" class="form-control" value="{{ $software->software_platform }}" required>

            <label for="software_description" class="form-label">Description : </label>
            <input type="text" name="software_description" class="form-control" value="{{ $software->software_description }}" required>
            

            <select name="category_id" id="category_id">
                @foreach ($category as $cat )
                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                @endforeach
            </select>

            <br>
            <button type="submit" class="btn bg-success">Submit</button>

        </div>

    </form>

</div>