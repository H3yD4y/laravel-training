@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container" style="margin-bottom: 10px">
        <a href="{{route('users.create')}}" class="btn btn-success">Create User</a>
    </div>
    <div class="card">
        <div class="m-auto" style="width:90%">
<table class="table">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th> 
        <th scope="col">Action</th> 
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>
            <a href="{{route('users.edit', ['id' => $user->id])}}" class="btn btn-primary">Edit</a>
            <form method="POST" action="{{route('users.destroy',['id'=> $user->id])}}"style="display:inline;">
                @csrf
                <button type="submit"class="btn btn-danger">Delete</button>
        </form>     
        </td>
    </tr>
    @endforeach
    
</tbody>
</table>
        </div>
    </div>
</div>
@endsection