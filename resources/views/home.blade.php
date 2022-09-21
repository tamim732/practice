@extends('master')

@section('content')
    <h1>{{ $page_name }}</h1>
    <p>{{ $name }}</p>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">NID</th>
            <th scope="col">Create Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )

            <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->nidcard->card_number ?? ""}}</td>
                <td>{{$user->created_at}}</td>
              </tr>
            @endforeach


        </tbody>
      </table>
@endsection
