@extends('master')

<h3>subcategory index</h3>
@section('content')
    <div class="row mt-5">
        <div class="d-flex justify-content-end my-2">
<a href="{{route('subcategory.create')}}" class="btn btn-success">subcategory create</a>
        </div>
        <div class="col-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">category name</th>
                        <th scope="col">subcategory name</th>
                        <th scope="col">created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <th scope="row">{{ $subcategory->id }}</th>
                            <td>{{ $subcategory->category->name }}</td>
                            <td>{{ $subcategory->name }}</td>
                            <td>{{ $subcategory->created_at->diffforhumans() }}</td>
                            <td><a href="{{route('subcategory.edit',['subcategory'=>$subcategory->id])}}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('subcategory.destroy',['subcategory'=>$subcategory->id])}}" method="post">
                                @method('DELETE')
                               @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
