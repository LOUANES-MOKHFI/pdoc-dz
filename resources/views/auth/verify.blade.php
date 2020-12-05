<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        PDOC |Email verification
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
</html>

