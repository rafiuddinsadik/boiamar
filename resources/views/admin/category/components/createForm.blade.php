<form method="POST" action="{{route('categories.store')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">Enter Name</label>
        <input class="form-control" type="text" placeholder="Name" name="name">
    </div>
    <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
</form>