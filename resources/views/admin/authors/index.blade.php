@extends('layouts.admin.index')

@section('content')
    <div class="jumbotron">
        <h1 class="text-center">Authors</h1>
        <!-- Button trigger modal -->
        <div class="text-center">
            <button type="button" class="btn btn-success text-center" data-toggle="modal" data-target="#exampleModalCenter">
                Add
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Add a Author</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('admin.authors.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Write a short description</label>
                                <textarea class="form-control" type="text" placeholder="Description" name="description" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
                        </form>
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
            @foreach($authors as $author)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$author->name}}</td>
                    <td><a class="btn btn-danger" href="{{route('admin.authors.destroy', ['id' => $author->id])}}">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection