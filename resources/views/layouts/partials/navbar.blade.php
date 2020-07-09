<div class="container py-4 border-bottom border-secondary">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
            <h4 class="ml-2 d-inline font-italic">: Forum Pemrograman Indonesia</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px">
                        Username
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="padding: 0 !important;">
                        <a class="dropdown-item border-bottom py-2" href="/login">Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 20px">Poin : 200</a>
                </li>
            </ul>
        </div>
        {{-- <a href="login" class="btn btn-outline-success px-4 ml-auto">Masuk</a> --}}
    </nav>
</div>