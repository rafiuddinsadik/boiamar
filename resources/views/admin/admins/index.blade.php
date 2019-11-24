@extends('layouts.admin.index')

@section('content')
    <div class="jumbotron">
        <h1 class="text-center">Admins</h1>
        <!-- Button trigger modal -->
        <div class="text-center">
            <button type="button" class="btn btn-success text-center" data-toggle="modal" data-target="#exampleModalCenter">
                Add
            </button>
        </div>

        <!-- Modal -->
        @include('admin.admins.components.createForm')
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="#" class="badge badge-success">Active</a></td>
                    <td><a class="btn btn-danger" href="{{route('admin.users.destroy', ['id' => $user->id])}}">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection