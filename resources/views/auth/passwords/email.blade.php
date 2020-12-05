<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        PDOC |Mot de pass oubliée
    </title>
        <script src="{{ asset('js/app.js') }}" defer></script>

<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="/designe/fonts/icomoon/style.css">
<link rel="stylesheet" href="/designe/css/bootstrap.min.css">
<link rel="stylesheet" href="/designe/css/jquery-ui.css">
<link rel="stylesheet" href="/designe/css/owl.carousel.min.css">
<link rel="stylesheet" href="/designe/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/designe/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/designe/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="/designe/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="/designe/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="/designe/css/aos.css">
<link href="designe/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/designe/css/style.css">
        <script src="{{ asset('js/app.js') }}" defer></script>



<style type="text/css">
     .body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
      background:#F0F8FF;
}
</style>
</head>
<div class="body">
    <div style="height: 150px">
        
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="fadeIn first">
        <a href="{{url('/home')}}">
      <h4>Plate-Form Documentaire Algérienne</h4>
      </a>
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reintialiser le mot de pass') }}</div>

                <div class="card-body box">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reintialiser le mot de pass') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>

