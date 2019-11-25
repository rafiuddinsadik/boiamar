@extends('layouts.admin.index')

@section('content')
    <div class="jumbotron">
        <h1 class="text-center">Category</h1>
        <!-- Button trigger modal -->
        <div class="text-center">
            <button type="button" class="btn btn-success text-center" data-toggle="modal" data-target="#exampleModalCenter">
                Add
            </button>

        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Add a Category</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('admin.category.components.createForm')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td><a class="btn btn-danger" href="{{route('categories.destroy', ['id' => $category->id])}}">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection