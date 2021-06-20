<div class="container">
    <a class="navbar-brand" href="#page-top"><img src="{{asset('plantilla/assets/img/navbar-logo.svg')}}" alt="..." /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            @if (Route::has('login'))
                @auth
                    <!-- <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li> -->
                    <li class="nav-item">
                    @csrf
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary"><a class="nav-link">Log Out</a></button>
                    </form>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endif
                @endauth

            @endif
        </ul>
    </div>
</div>
