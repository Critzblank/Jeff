@extends ('layouts.master')

@section ('content')


    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-14 blog-main">

                @if(count($posts))
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Task Name</th>
                                <th>Task Body</th>
                                <th>Date</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($posts as $post)

                                <tr>
                                    <td><a href='posts/{{ $post->id }}'>{{ $post->title }}</a></td>
                                    <td>{{ $post->body }}</td>
                                    <td>{{ $post->created_at->toFormattedDateString() }}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                        <a href="posts/create" class="btn btn-info" role="button">Create a new Task</a>
                    </div>
                @endif

            </div>
        </div>


        </div>
    </main>


@endsection

@section ('footer')

    <script src="/js/file.js"></script>

@endsection





