@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>
        {{ $post->body }}

        <hr>

        <div class="comments">

            <ul class="list-group">
            @foreach ($post->comments as $comment)

                <li class="list-group-item">

                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>

                    {{ $comment->body }}

                </li>

            @endforeach
            </ul>

        </div>

        <hr>

        <div>

            <div class="card-block">

                <form method="POST" action="/Jeff/public/posts/{{ $post->id }}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Post Comment</button>

                    </div>
                </form>

                @include ('layouts.errors')

            </div>

        </div>

    </div>

    <a href="{{$post->id}}/edit">Click here</a>

@endsection