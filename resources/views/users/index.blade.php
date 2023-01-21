@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="m-auto" style="width:70%">
<table class="table">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created At</th> 
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
    </tr>
    @endforeach
    
</tbody>
</table>
        </div>
    </div>
</div>
@endsection