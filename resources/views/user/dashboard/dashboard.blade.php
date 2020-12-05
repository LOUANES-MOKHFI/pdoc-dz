<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    PDOC |@yield('title') 
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
      <link rel="icon" href="/designe/images/pdoclogo.jpg" />

  {{Html::style('/designe/plugins/fontawesome-free/css/all.min.css')}}
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  {{Html::style('/designe/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}
  <!-- Tempusdominus Bbootstrap 4 -->
  {{Html::style('/designe/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}
  {{Html::style('/designe/plugins/jqvmap/jqvmap.min.css')}}
  {{Html::style('/designe/dist/css/adminlte.min.css')}}
  {{Html::style('/designe/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}
  {{Html::style('/designe/plugins/daterangepicker/daterangepicker.css')}}
  {{Html::style('/designe/plugins/summernote/summernote-bs4.css')}}
  
@yield('header')
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-light navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/admin')}}" class="nav-link">Accueil</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
           

    
     
      <li class="nav-item">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <b>{{ Auth::user()->name }}</b> <span class="caret"></span>
            </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        <a href="{{ url('/admin/profil') }}" class="nav-link text-left">Mon Profil</a>
        <a href="{{ url('/dashboard') }}" class="nav-link text-left">MON COMPTE</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('user.dashboard.nav')

  <!-- Content Wrapper. Contains page content -->
    <section class="content">
      <div class="container-fluid">
      <div class="colntainer col-12 text-center">
                 @include('layouts.flash_msg')
       </div>  
    @yield('content')

  </div>
</section>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{Date('Y')}} <a href="{{getSetting()->developper_email}}">{{getSetting()->developper_name}}</a>.</strong>
    Tous les Droits sont réservés.
    <div class="float-right d-none d-sm-inline-block">
      <b>{{getSetting()->site_name}}</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

{!!Html::script('/designe/plugins/jquery/jquery.min.js')!!}
{!!Html::script('/designe/plugins/jquery-ui/jquery-ui.min.js')!!}
{!!Html::script('/designe/plugins/bootstrap/js/bootstrap.bundle.min.js')!!}
{!!Html::script('/designe/plugins/chart.js/Chart.min.js')!!}
{!!Html::script('/designe/plugins/sparklines/sparkline.js')!!}
{!!Html::script('/designe/plugins/jqvmap/jquery.vmap.min.js')!!}
{!!Html::script('/designe/plugins/jqvmap/maps/jquery.vmap.usa.js')!!}
{!!Html::script('/designe/plugins/jquery-knob/jquery.knob.min.js')!!}
{!!Html::script('/designe/plugins/moment/moment.min.js')!!}
{!!Html::script('/designe/plugins/daterangepicker/daterangepicker.js')!!}
{!!Html::script('/designe/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')!!}
{!!Html::script('/designe/plugins/summernote/summernote-bs4.min.js')!!}
{!!Html::script('/designe/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')!!}
{!!Html::script('/designe/dist/js/adminlte.js')!!}
{!!Html::script('/designe/dist/js/pages/dashboard.js')!!}
{!!Html::script('/designe/dist/js/demo.js')!!}

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
@yield('footer')
</body>
</html>
