@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <h1>Create a Post</h1>

        <hr>

        <form method="POST" action = "{{ url('posts')}}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                <small id="emailHelp" class="form-text text-muted">Minimum of 3 character.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            
        @include ('layouts.errors')

        </form>

    </div>

@endsection