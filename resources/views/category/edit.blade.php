@extends('master')
category edit page
@section('content')
    <div class="row">
        <div class="d-flex justify-content-start my-2">
            <a href="{{route('category.index')}}" class="btn btn-info">categories</a>
        </div>
        <div class="col-6 m-auto">
            <form action="{{route('category.update',['category'=>$categories->id])}}" method="post">@method('put')
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" placeholder="please provide category name" name="category_name" value="{{ $categories->name}}">
                    @error('category_name')
                    <strong>{{$message}}</strong>

                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="is_active" @if ($categories->is_active)checked

                    @endif>
                    <label class="form-check-label" for="flexCheckDefault">
                     Active/Inactive
                    </label>
                  </div>
                <button type="submit" class="btn btn-danger">update</button>
            </form>
        </div>
    </div>
@endsection
