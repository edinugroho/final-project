<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Font Awesome 4 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Copas - Forum Pemrograman Indonesia</title>
</head>
<body>
    {{-- Login --}}
    <div class="login">
        <div class="d-flex justify-content-center">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
        </div>
        <div class="card mx-auto mt-4" style="width: 20rem;">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Nama Pengguna</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pwd">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                    </div>
                    <button type="submit" class="form-control btn btn-success btn-sm" style="font-weight: 600 !important;">Masuk</button>
                </form>
            </div>
        </div>
        <div class="card mx-auto mt-4" style="width: 20rem; background-color: #f9f9f9;">
            <div class="card-body text-center" style="font-size: 14px;">
                Belum punya akun?
                <a href="{{ route('register') }}">Buat akun</a>
            </div>
        </div>
        <p class="text-secondary text-center mt-4 small">Copyright &copy; Copas 2020</p>
    </div>
    {{-- End Login --}}
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>