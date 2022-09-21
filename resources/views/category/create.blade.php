@extends('master')

@section('content')
    <div class="row">
        <div class="col-6 m-auto">

            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" placeholder="please provide category name" name="category_name">
                    @error('category_name')
                    <strong>{{$message}}</strong>

                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="is_active">
                    <label class="form-check-label" for="flexCheckDefault">
                     Active/Inactive
                    </label>
                  </div>
                <button type="submit" class="btn btn-danger">submit</button>
            </form>
        </div>
    </div>
@endsection
