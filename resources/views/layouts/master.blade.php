<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/Jeff/public/css/blog.css" rel="stylesheet">

    <script src="/Jeff/public/js/whatever.js"></script>
</head>

<body>

    <header>

        @include ('layouts.nav')

            <div class="blog-header">
                <div class="container">
                    <h1 class="blog-title">To-Do List</h1>
                    <p class="lead blog-description">For forgetful people</p>
                </div>
            </div>

    </header>

    <main role="main" class="container">

        <div class="row">

            @yield ('content')
            {{--@include ('layouts.sidebar')--}}

        </div>

    </main>




{{--@include ('layouts.footer')--}}

</body>

</html>


