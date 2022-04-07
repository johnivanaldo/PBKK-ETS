@extends('layouts.home-white')
@section('title')
Home
@endsection
@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="/list/{{$user->id}}/update" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName1">Username</label>
            <input name="nama" type="text" class="form-control" id="exampleInputName1" aria-describedby="usernameHelp" placeholder="Enter username"
            value="{{$user->nama}}">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
          value="{{$user->email}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
          value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
      </form>
</div>

@endsection