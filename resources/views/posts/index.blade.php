@extends ('layouts.master')

@section ('content')


    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-14 blog-main">

                @if(count($posts))
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped sortable">
                            <thead>
                            <tr>
                                <th>Task Name</th>
                                <th>Task Body</th>
                                <th>Date</th>
                                <th>Completed</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($posts as $post)

                                <tr>
                                    <td><a href='posts/{{ $post->id }}/edit'>{{ $post->title }}</a></td>
                                    <td>{{ $post->body }}</td>
                                    <td>{{ $post->created_at->toFormattedDateString() }}</td>
                                    <td>
                                        @if ($post->completed == true)
                                            <button type="button" class="btn btn-success">  Completed<i class="fa fa-check" aria-hidden="true"></i></button>
                                        @else
                                            <button type="button" class="btn btn-danger">  Incomplete<i class="fa fa-frown-o" aria-hidden="true"></i></button>
                                        @endif
                                    </td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>

                    </div>
                @endif

                @guest
                        Welcome to your new Task Manager
                @else
                        <a href="posts/create" class="btn btn-primary" role="button">Create a new Task</a>
                    @endguest

            </div>
        </div>


        </div>
    </main>


@endsection

@section ('footer')

    <script src="/js/file.js"></script>

@endsection





