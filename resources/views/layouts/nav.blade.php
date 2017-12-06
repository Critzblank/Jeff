

<div class="blog-masthead">

    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="/Jeff/public">Home</a>
            <a class="nav-link" href="/Jeff/public/calendar">Calendar</a>
            <!--<a class="nav-link" href="posts/create">Create</a> -->
            <a class="nav-link" href="#">About</a>

            @guest
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li>
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                           {{ Auth::user()->name }} <span class="caret"></span> -->



                            <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                    </li>
                    @endguest
        </nav>





    </div>

</div>

