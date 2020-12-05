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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/admin')}}" class="nav-link">Accueil</a>
      </li>
       @if(Auth::user()->id ==  1)
       <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/statistics')}}" class="nav-link">Statistiques</a>
       </li>
       @endif
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      @if(Auth::user()->id ==  1)
         <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" title="messages">
          <i class="fa fa-book" aria-hidden="true"></i>

          <span class="badge badge-danger navbar-badge">{{count(add_book())}}</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{count(add_book())}} Livre en attente</span>
          @foreach(add_book() as $book)
          <a href="{{'/admin/book_add/'.$book->id}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                 <i class="fa fa-book" aria-hidden="true"></i>
                  {{str_limit($book->titre,40)}}
                </h3>
                <p class="text-sm">{{str_limit($book->auteur,40)}}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$book->created_at}}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          @endforeach
          <a href="{{'/admin/book_add'}}" class="dropdown-item dropdown-footer">Voir tout les demandes</a>
        </div>
      </li>


      <li class="nav-item dropdown  dropdown">
        <div class="dropdown dropdown--scrollable">
        <a class="nav-link" data-toggle="dropdown" href="#" title="messages">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">{{countunreadMessage()}}</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" data-items="10" data-items-scroll="5">
        <span class="dropdown-item dropdown-header">{{countunreadMessage()}} Messages</span>

          @foreach(unreadMessage() as $message)
          <a href="{{'/admin/contact/'.$message->id}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">              
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{$message->name}}
                </h3>
                @if($message->type != null)
                <p class="text-sm" style="color: red">Type : {{$message->type}}</p>
                @else
                <p class="text-sm" style="color: red">Type: Message</p>
                @endif
                <p class="text-sm">{{str_limit($message->message,40)}}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$message->created_at}}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          @endforeach
          <a href="{{'/admin/contact'}}" class="dropdown-item dropdown-footer">Voir tout les message</a>
        </div>
      </div>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" title="demande un document">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{countunreadDemande()}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{countunreadDemande()}} Notifications</span>
           @foreach(unreadDemande() as $demande)
          <div class="dropdown-divider"></div>
          <a href="{{'/demande_article1/'.$demande->id}}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> {{$demande->name}}
            <p>type de demande:<span style="color: red">{{$demande->type_demande}}</span></p>
            <span class="float-right text-muted text-sm">{{$demande->created_at}}</span>
          </a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a href="{{'/demande_article1'}}" class="dropdown-item dropdown-footer">Voir tout les Notifications</a>
        </div>
      </li>
      @endif       

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" title="demande d'inscription">
          <span class="badge badge-warning navbar-badge">
            @if(Auth::user()->id == 1)
              {{count(Demande_Add1())}}
             @else
             {{count(Demande_Add(Auth::user()->universite))}}
           @endif
         </span>
          <i class="ion ion-person-add"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          @if(Auth::user()->id == 1)
              <span class="dropdown-item dropdown-header">{{count(Demande_Add1())}} demande</span>

             @else
             <span class="dropdown-item dropdown-header">{{count(Demande_Add(Auth::user()->universite))}} demande</span>

             
           @endif
   

          @if(Auth::user()->id == 1)
              @foreach(Demande_Add1() as $demande)
              <div class="dropdown-divider"></div>
          <a href="{{'/demande_confirmation/'.$demande->id}}" class="dropdown-item">
            <i class="ion ion-person-add mr-2"></i> {{$demande->name}}&thinsp; &thinsp; &thinsp; &thinsp; &thinsp; 
            (<span style="color: red" class="float-righ">{{$demande->genre}}</span>)
            <span class="float-right text-muted text-sm">{{$demande->created_at}}</span>
          </a>
          @endforeach
          @else
           @foreach(Demande_Add(Auth::user()->universite) as $demande)
          <div class="dropdown-divider"></div>
          <a href="{{'/demande_confirmation/'.$demande->id}}" class="dropdown-item">
            <i class="ion ion-person-add mr-2"></i> {{$demande->name}}&thinsp; &thinsp; &thinsp; &thinsp; &thinsp; 
            (<span style="color: red" class="float-righ">{{$demande->genre}}</span>)
            <span class="float-right text-muted text-sm">{{$demande->created_at}}</span>
          </a>
          @endforeach
          @endif
          <div class="dropdown-divider"></div>
          <a href="{{'/demande_confirmation'}}" class="dropdown-item dropdown-footer">Voir tout les Demandes</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('admin.layouts.nav')

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
<script type="text/javascript">
  $('.dropdown--scrollable .dropdown-menu, .hero .tab-content .dropdown .dropdown-menu').click(function(e) {
      e.stopPropagation();
    });

    $('.dropdown--scrollable .dropdown-menu__content').each(function() {
      $(this).slick({
        infinite: false,
        vertical: true,
        slidesToShow: $(this).data('items'),
        slidesToScroll: $(this).data('items-scroll'),
        dots: false,
        prevArrow: $(this).parent().find('a.up'),
        nextArrow: $(this).parent().find('a.down'),
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        }]
      });

      var carousel = $(this);

      $(this).parents('.dropdown--scrollable').on('click', 'button', function() {
        carousel.slick('refresh');
      })
    });
</script>
@yield('footer')
</body>
</html>
