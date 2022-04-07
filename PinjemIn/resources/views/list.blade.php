@extends('layouts.home-white')
@section('title')
Home
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>List User</h1>
        </div>
        <div class="col-6">
            <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
    Add User
  </button>
  
  
  </div>
        </div>
        <table class="table table-hover">
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
            @foreach ($data_user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="/list/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/list/{{$user->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            @endforeach
            
        </table>
    </div>
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/list-create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputName1" aria-describedby="usernameHelp" placeholder="Enter username">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
</div>

@endsection