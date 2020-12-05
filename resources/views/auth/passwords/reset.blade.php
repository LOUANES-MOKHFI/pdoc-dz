<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        PDOC |Reintialiser le mot de passe
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


</head>
<body>
<div class="container" style="margin-top: 170px">
<div class=""><br></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 align="center">
                {{getsetting()->site_name}}
            </h3>
            <div class="card">
                <div class="card-header">{{ __('Reintialiser le mot de passe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de pass') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer Mot de pass') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
