<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand">
            <h2>Dipesh <em>Jewelery</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('jewelry')}}">Jewelry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
                </li>

                <li class="nav-item">
                    @if (Route::has('login'))

                    @auth

                    <x-app-layout>

                    </x-app-layout>

                    @else
                <li class="nav-link"><a href="{{ route('login') }}">Log in</a></li>


                @if (Route::has('register'))
                <li class="nav-link"><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth

                @endif

        </div>



        </ul>
    </div>
    </div>
</nav>