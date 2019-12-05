@extends('layouts.admin.index')

@section('content')
    <div class="jumbotron">
        <h1 class="text-center">Books</h1>
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
                        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Add a Book</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('admin.books.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Write a short description</label>
                                <textarea class="form-control" type="text" placeholder="Description" name="description" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="author">Select Author</label>
                                <select class="form-control" name="author_id" id="author">
                                    @foreach ($authors as $author)
                                        <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Select Category</label>
                                <select class="form-control" name="category_id" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
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
                <th scope="col">Author</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$book->name}}</td>
                    <td><span class="badge badge-info">{{$book->getAuthor->name}}</span></td>
                    <td><span class="badge badge-success">{{$book->getCategory->name}}</span></td>
                    <td><a class="btn btn-danger" href="{{route('admin.books.destroy', ['id' => $book->id])}}">Remove</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection