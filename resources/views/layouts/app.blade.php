<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Souvent, les étudiants, les enseignants et les chercheurs se retrouvent embarrassés par l’énorme  flux d’informations de différents  sources et supports  de recherche scientifique dans la réalisation de leur travaux de recherché : Recherche de base, Mémoire de Licence ou de Master, Thèse de Doctorat, Article scientifique, Livre, Manuscrit……etc" charset="utf-8">
    <link rel="icon" href="/designe/images/pdoclogo.jpg" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        PDOC |@yield('title')
    </title>
        <script src="{{ asset('js/app.js') }}" defer></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  {!!Html::style('/designe/plugins/fontawesome-free/css/all.min.css')!!}
   {!!Html::style('/css/style.css')!!}

<link rel="stylesheet" href="/designe/fonts/icomoon/style.css">
<link rel="stylesheet" href="/designe/css/bootstrap.min.css">
<link rel="stylesheet" href="/designe/css/jquery-ui.css">
<link rel="stylesheet" href="/designe/css/owl.carousel.min.css">
<link rel="stylesheet" href="/designe/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/designe/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/designe/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="/designe/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="/designe/fonts/flaticon/font/flaticon.css">
<link href="/designe/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/designe/css/style.css">
<link rel="stylesheet" href="/designe/plugins/sweetalert2/sweetalert2.min.css">
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>

  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>

        <script src="{{ asset('js/app.js') }}" defer></script>

<style type="text/css">
  body{
    margin: 0;
  }
  .navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: absolute;
  width: 100%;
  z-index: 1; }
  .div a,.div span{
    font-size: 18px;
  }
  .mr-3{
    font-size: 95%;
  }
 .topnav{
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none}
  .topnav a {
  border-bottom: 3px solid transparent;
}

.topnav li:hover {
  border-bottom: 3px solid red;
}

.topnav li {
  border-top: 1px solid red;
}
.navbar1{
    border-top: 3px solid #28a745;
}
.navbar2{
    border-top: 3px solid white;
}
.navbar{
  border-top:3px solid red;

}
 .navbar li .nav-link{
  margin-left: 0px;
  color: white;
  font-weight: bold;
  font: bold 13px/13px Arial,Helvetica,sans-serif;
 }
.drop {
   text-align: left;
    border-color: #00316B;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-top-style: none;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
      display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.drop {
    list-style: none;
    padding: 0;
    margin: 0;
    overflow: hidden;
    background: #e1edfa;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    display: none;

}

a{
  color: blue;
  font-weight: bold;
  font-size: 17px;
  font-family: arial;
  padding: 0 0 0 0;
}

.header-right {
    float: right;
    max-width: 390px;
    text-align: right;
}
.site-logo{
  float: left;
}
.c {
  display: block;
}
.header-right a.resours {
    border-radius: 4px;
    margin-bottom: 3px;
    border-color: blue;
    border-style: solid;
    border-width: 1px;
}
.header-right a.resours {
    background: #007bff;
    color: #fff;
    float: right;
    text-align: left;
    min-height: 28px;
    padding: 8px 35px 6px 10px;
    font: bold 0.8em/1.15em Arial,Helvetica,sans-serif;
    text-decoration: none;
}.fa-caret-right{
 text-align: right;
}
.ff a {
  display: block;
}

li {
  display: inline-block;
  position: relative;
  padding-bottom: 3px;
  margin-right: 10px;
}
li:last-child {
  margin-right: 0;
}

li:after {
  content: '';
  display: block;
  margin: auto;
  height: 3px;
  width: 0px;
  background: transparent;
  transition: width .5s ease, background-color .5s ease;
}
#green:hover:after {
  width: 100%;
  background: green;
}
#red:hover:after {
  width: 100%;
  background: red;
}
#white:hover:after {
  width: 100%;
  background: white;
}
.navbar-nav{
  float: left;

}
.home h1{
  font-weight: bold;font-family: arial;font-style: oblique;font-size:23px;
}
 #arabe{
  font-weight: bold;
   font-size: 17px;

}
.counter-section i {
     display: block;
     margin: 0 0 10px
 }

 .counter-section span.counter {
     font-size: 25px;
     color: white;
     line-height: 20px;
     display: block;
     font-family: "Oswald", sans-serif;
     letter-spacing: 2px
 }


 .counter-style2 .counter-title {
     letter-spacing: 0.55px;
     float: left
 }

 .counter-style2 span.counter {
     letter-spacing: 0.55px;
     float: left;
     margin-right: 10px
 }

 .counter-style2 i {
     float: right;
     line-height: 26px;
     margin: 0 10px 0 0
 }

 .counter-subheadline span {
     float: right
 }

 .medium-icon {
     font-size: 40px !important;
     margin-bottom: 15px !important
 }
.dropdown:hover .dropdown-content {display: block;}

</style>
  @yield('header')

</head> 
<body>

  @if( ($_SERVER['REQUEST_URI'] == '/email/verify') && ($_SERVER['REQUEST_URI'] == 'password/reset') )

  @else

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
    <div class="site-mobile-menu-body"></div>
</div>
</div>

<div class="py-2">
    <div class="container">
        <div class="row align-items-center">
           <div class="site-logo col-lg-6 row">
            <a href="{{url('home')}}" class="d-block col-5">
             <img  src="{{asset('/images/'.getsetting()->logo)}}" class=""  alt="logo" width="200" height="120">
            </a>
            <div class="col-7 home" style="margin-top: 0px">
            <a href="{{url('home')}}" >
            <h1>PLATE-FORME</h1>
            <h1>DOCUMENTAIRE</h1>
            <h1>ALGERIENNE</h1>
            <h1>المنصة الوثائقية الجزائرية</h1>
          </a>
            </div>

          </div>
          <div class="col-lg-6" style="float: left">
               <div class="header-right ">
      <div class="language-area">
      @guest
       <a href="{{ route('login') }}" class="button small singup btn"><span class="icon-unlock-alt"></span>&thinsp;&thinsp;{{__('SE CONNECTER') }}</a>
        @if (Route::has('register'))
        <a href="#" onclick="document.getElementById('type_register').style.display='block'" class="button small singup btn"><span class="icon-users"></span>&thinsp;&thinsp;{{ __("S'INSCRIRE") }}</a>
        @endif
      </div>
        @else
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Déconnexion') }}
        </a>
        <a href="{{ url('profil') }}" class="nav-link text-left">MON PROFIL</a>
         <a href="{{ url('/dashboard') }}" class="nav-link text-left">MON COMPTE</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>

        </div>

         @endguest
         
            <div id="c1876" class="csc-default ">
              <ul class="social-area"><li>
                </li>
              </ul>
            </div>
            <div id="" class="csc-default ">
              <div class="rescours-area">
                <a href="{{url('/FAQ') }}"><img src="/designe/images/bluequestion_azu_12469.png" width="40" height="40" alt="Logo qui sommes-nous" title="Foire Aux Questions"></a>
                <a style="margin-left: 20px" href="{{url('/about')}}" title="Qui-sommes nous?" class="button small singup btn">A PROPOS</a>
              </div>
            </div>
           </div>
          </div>
        </div>
    </div>


</div>
@if(Auth::check())
 @if(Auth::user()->abonnee == 0)
<!--div class="alert alert-success" style="height: 45px;margin-bottom: 0px;margin-top:0px ">
 <div class="text-center" style="font-size: 18px">
  COMPTE GRATUIT SOLIDARITE COVID 19, voulez-vous payer votre abonement? <a href="{{url('/paiement-user')}}">Abonnez vous!</a>
 </div>
</div-->
  @endif
  @endif
<div class="navbar1"></div>
<div class="navbar2"></div>

 <nav class="navbar navbar-expand-md" style="background-color: #007bff;" >
        <div class="container">
            <button class="navbar-toggler dropdown-toggle" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>Menu
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                <li  class="nav-item dropdown" id="green">
                  <a class="nav-link" href="{{ url('news') }}" class="nav-link text-left">ACTUALITES</a>
                  <a class="nav-link" id="arabe" href="{{ url('news') }}" class="nav-link text-left">الأحداث</a>
                </li>
                <li class="nav-item dropdown" id="red">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                   RESSOURCES DOC  <i class="fas fa-caret-down"></i></a>
                   <a class="nav-link" href="#" id="navbarDropdownMenuLink arabe" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span id="arabe">المصادر الإلكترونية</span>  <i class="fas fa-caret-down"></i>
                    
                   </a>
                   <div class="drop dropdown-content" aria-labelledby="navbarDropdownMenuLink" style="width: 350px">
                    <a  class="dropdown-item" href="{{'/ressource_doc/about'}}">A propos</a>
                    <a class="dropdown-item" href="{{ url('/ressource_doc/multidisciplinares') }}">MULTIDISCIPLINAIRES</a>
                    <!--a class="dropdown-item" href="{{ url('/ressource_doc/pluridisciplinaire') }}"> PLURIDISCIPLINAIRES</a-->
                     <a class="dropdown-item" href="{{ url('/ressource_doc/st') }}">SCIENCES ET TECHNIQUES</a>
                     <a class="dropdown-item" href="{{ url('/ressource_doc/shs') }}">SCIENCES HUMAINES ET SOCIALES</a>
                    <a class="dropdown-item" href="{{ url('/ressource_doc/slv') }}">SCIENCES DE LA VIE ET DE LA TERRE</a>
                     
                  </div>
                </li>
                 <li class="nav-item dropdown" id="white">
                  <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >RESSOURCES A.O  <i class="fas fa-caret-down"></i></a>
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span id="arabe">الأرشيف المفتوح</span>  <i class="fas fa-caret-down"></i></a>
                   <div class="drop dropdown-content" aria-labelledby="navbarDropdownMenuLink"  style="width: 180px">
                    <a  class="dropdown-item" href="{{'/ressource_ao/about'}}">A propos</a>
                    <a class="dropdown-item" href="{{url('/ressource_ao/algeriennes')}}">ALGERIENNES</a>
                    <a class="dropdown-item" href="{{url('/ressource_ao/etrangeres') }}">ETRANGERES</a>
                  </div>
                </li> 
                <li class="nav-item dropdown" id="white">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                   LIVRES  <i class="fas fa-caret-down"></i></a>
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <span id="arabe">الكتب</span>  <i class="fas fa-caret-down"></i>
                 </a>
                
                <div class="drop dropdown-content" aria-labelledby="navbarDropdownMenuLink" style="width: 180px">
                  <a  class="dropdown-item" href="{{'/books-about'}}">A propos</a>
                  <a class="dropdown-item" href="{{ url('books') }}">Liste des livres</a>
                   @if(Auth::check())
                  <a class="dropdown-item" href="{{ url('/add-book') }}">Ajouter un livre</a>
                  @else
                      <a class="dropdown-item" href="{{ route('login') }}">Ajouter un livre</a>
                  @endif
                  </div>
                   
                </li>
                <li class="nav-item" id="red">
                  <a class="nav-link " href="{{url('ressources_rpe')}}">BDDs EN TEST</a>
                  <a class="nav-link" id="arabe" href="{{url('ressources_rpe')}}">فترة التجربة</a>
                </li>
                <li class="nav-item dropdown" id="white">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                   PARTAGER MES DOCUMENTS  <i class="fas fa-caret-down"></i></a>
                  <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <span id="arabe">  أشارك ابحاثي</span>  <i class="fas fa-caret-down"></i>  </a>
                   @if(Auth::check())
                
                <div class="drop dropdown-content" aria-labelledby="navbarDropdownMenuLink" style="width: 310px">
                  <a  class="dropdown-item" href="{{'/document/about'}}">A propos</a>
                    <a class="dropdown-item" href="{{ url('/add-document') }}">DEPOSER MES 
                    DOCUMENTS</a>
                    <a class="dropdown-item" href="{{ url('/search-document') }}">CONSULTER DES 
                    DOCUMENTS</a>
                  </div>
                    @else
                    <div class="drop dropdown-content" aria-labelledby="navbarDropdownMenuLink" style="width: 310px">
                    <a  class="dropdown-item" href="{{'/document/about'}}">A propos</a>
                    <a class="dropdown-item" href="{{ route('login') }}">DEPOSER MES 
                    DOCUMENTS</a>
                    <a class="dropdown-item" href="{{ route('login') }}">CONSULTER DES 
                    DOCUMENTS</a>
                    </div>
                    @endif
                </li>
                <li class="nav-item dropdown" id="green">
                   <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                     CATALOGUES DES BIBLIOTHEQUES <i class="fas fa-caret-down"></i></a>
                   <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                      <span id="arabe">فهارس المكتبات </span>  <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="drop dropdown-content" aria-labelledby="navbarDropdownMenuLink" style="width: 310px">
                      <a  class="dropdown-item" href="{{'/catalogue-bibliotheque/about'}}">A propos</a>
                      <a class="dropdown-item" href="{{url('/catalogue-bibliotheque-algerienne')}}">CATALOGUES ALGERIENS</a>
                      <a class="dropdown-item" href="{{url('/catalogue-bibliotheque-etrangere')}}">CATALOGUES ETRANGERS</a>
                       @if(Auth::check())
                       <a class="dropdown-item" href="{{url('/add-catalogue-bibliotheque')}}">AJOUTER VOTRE CATALOGUE</a>
                       @else
                       <a class="dropdown-item" href="{{ route('login') }}">AJOUTER VOTRE CATALOGUE</a>
                      @endif

                    </div>
                </li>
                </ul>
            </div>
        </div>
</nav>
    @endif

   @yield('content')

   
@if( $_SERVER['REQUEST_URI'] == '/email/verify' && $_SERVER['REQUEST_URI'] == '/password/reset' )

  @else

    <div class="footer" style="margin-bottom: -10px">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
             <h3 class="footer-heading"><span> <i class="fa fa-user medium-icon"></i> Total visiteurs</span></h3>
              <div class="ff">
                 <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;"> <span class="timer counter alt-font appear" data-to="600" data-speed="7000">{{count_all_visitor()}}</span></div> <!-- end counter -->
                  <p></p>
              </div>
          </div>
          
          
          <div class="col-lg-5">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <div class="ff">
                  <a href="#"><span class="icon-phone2 mr-2"> TEL/FAX</span> {{getSetting()->site_phone}}</a>
                 <a href="#"><span class="icon-envelope mr-2"></span>{{getSetting()->site_email}}</a>
                 <a href="{{'/reclamation'}}">Formulaire de Réclamation</a>

              </div>
          </div>
          <div class="col-lg-4" id="contact">
           <h4>Contacter Nous</h4>
              {!! Form::open(['url'=>'/contact', 'method'=>'POST', 'class="row"'])!!}
                    <div class="col-6 py-1">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Nom et Prenom" name="name" required />
                    </div>
                     <div class="col-6 py-1">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Objet" name="subject" required/>
                    </div>
                    <div class="col-12 py-1">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="E-mail" name="email" required/>
                    </div>
                    <div class="col-12 py-1">
                        <textarea class="form-control fh5co_contacts_message" placeholder="Message" name="message" required></textarea>
                    </div>
                   <div class="col-12 py-3 text-center"><input type="submit" name="envoyer" class="btn btn-warning" value="Envoyer le Message"></div>
              {!! Form::close() !!}
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyright">
              <p>Copyright &copy; {{ date('Y')}} Tous les droits sont réservés </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
          @include('layouts.type_register')

</body>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/designe/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/designe/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="/designe/js/jquery-3.3.1.min.js"></script>
  <script src="/designe/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/designe/js/jquery-ui.js"></script>
  <script src="/designe/js/popper.min.js"></script>
  <script src="/designe/js/bootstrap.min.js"></script>
  <script src="/designe/js/owl.carousel.min.js"></script>
  <script src="/designe/js/jquery.stellar.min.js"></script>
  <script src="/designe/js/jquery.countdown.min.js"></script>
  <script src="/designe/js/bootstrap-datepicker.min.js"></script>
  <script src="/designe/js/jquery.easing.1.3.js"></script>
  <script src="/designe/js/aos.js"></script>
  <script src="/designe/js/jquery.fancybox.min.js"></script>
  <script src="/designe/js/jquery.sticky.js"></script>
  <script src="/designe/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="/designe/js/main.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  @yield('footer')
    <script type="text/javascript">
    $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
  </script>

</html>
