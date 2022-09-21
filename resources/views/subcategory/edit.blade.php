@extends('master')
subcategory edit page
@section('content')


    <div class="row">
        <div class="d-flex justify-content-start my-2">
            <a href="{{route('subcategory.index')}}" class="btn btn-info">subcategories</a>
        </div>
        <div class="col-8 m-auto my-3">
            <div class="card p-5">
                <form action="{{ route('subcategory.update',['subcategory'=>$subcategory->id])}}" method="POST">@method('put')
                    @csrf
                    <div class="mb-3">
                        <select class="form-select" name="category_id">
                            <option>Open this select menu</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}" @if ($category->id==$subcategory->category->id)@selected(true)

                            @endif>{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="subcategory name" class="form-label">sub category name</label>
                        <input type="text" name="subcategory_name" value="{{$subcategory->name}}" class="form-control" id="">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="is_active" @if ($subcategory->is_active)@checked(true)

                        @endif type="checkbox" id="is-active">
                        <label class="form-check-label" for="is-active">
                            active/inactive
                        </label>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
