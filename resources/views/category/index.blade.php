@extends('master')

@section('title', 'Category-Index-Page')

@push('admin_style')

@endpush

@section('content')
<div class="row">
    <div class="d-flex justify-content-end my-4">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
    </div>
    <div class="col-8 m-auto">
        <h4 class="">Normal data</h4>
        <table class="table tab-color">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
                {{-- <th scope="col">Action</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    {{-- <td>{{ $category->subcategories->count() }}</td> --}}
                    {{-- <td>{{ $category->subcategories_count }}</td> --}}
                    <td>{{ $category->created_at->diffforhumans()}}</td>

                     <td>
                        <div class="d-flex justify-content-center">
                            {{-- <a href="{{ route('category.show',['category' => $category->id]) }}" class="btn btn-info">Show</a> --}}
                            <a href="{{ route('category.edit',['category' => $category->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'>Del</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
