<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="h3 nav-title" href="{{ url('/') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('property/list') }}">Property</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#contact">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        @auth
                        {{ Auth::user()->name }}
                        @endauth
                        <img class="avater" src="https://marketmusclescdn.nyc3.digitaloceanspaces.com/wp-content/uploads/sites/674/2022/05/18153831/usericon.png" alt="">

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(Auth::check())
                        <a class="dropdown-item" href="@route('user.cart')">Cart List</a>
                        <a class="dropdown-item" href="@route('user.logout')">Logout</a>
                        @else
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
