<div class="container py-4 border-bottom border-secondary">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
            <h4 class="ml-2 d-inline font-italic">: Forum Pemrograman Indonesia</h4>
        </a>
        @auth
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="padding: 0 !important;">
                        <a class="dropdown-item border-bottom py-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 20px">
                        @if (Auth::user()->reputasi != 0)
                            Poin : {{ Auth::user()->reputasi }}
                        @endif
                    </a>
                </li>
            </ul>
        </div>
        @endauth
        @guest
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login" style="font-size: 20px">Login</a>
                </li>
            </ul>
        </div>
        @endguest
        {{-- <a href="login" class="btn btn-outline-success px-4 ml-auto">Masuk</a> --}}
    </nav>
</div>