@extends('layouts.app')

@section('title')
    Accueil
@endsection
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
{!! Html::style('/designe/plugins/fontawesome-free/css/all.min.css"') !!}
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style type="text/css">
  .btn-Primary{
    color: #fff !important;
    border-width: 10px !important;
    border-radius: 26px;
    font-size: 13px;
    font-family: "Nunito Sans",Helvetica,Arial,sans-serif ;
    text-transform: uppercase !important;
        background-color: #007bff;
}

.section-title{
  color: white;font-size: 35px
}
.feature-1{
  background-color: white;
  border-radius: 10px;}


  .views-row .item .item-inner-item {
    overflow: hidden;
}
.views-row .views-field-field-image-cache-fid .field-content {
    position: relative;
}
.views-field-field-image-cache-fid .field-content .newest-edition {
    position: absolute;
    margin-bottom: 45px;
    left: 0px;
    z-index: 5;
    height: 95px;
}
img {
    vertical-align: middle;
}
img {
    border: 0;
}
.tg-frontcove a img {
    transition-delay: 0s;
    transition-duration: 300ms;
    transition-property: all;
    transition-timing-function: ease-in-out;
}
.tg-backcover p{
  font-size: 16px;
  margin-bottom: 0px
}
.tg-backcover .bold{
  font-weight: bold;
  font-size: 14px;
}
a{
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.img:hover {
  transform: rotateY(30deg);
}


.text-center h1 {
    font-family: 'Candal', sans-serif;
    font-size: 35px;
    text-transform: uppercase;
    padding-bottom: 8px;
}
.bg-color{
  min-height: 550px;
}


.div .mb-5{
  margin: 0px 0px 0px 0px;
}
 .btn-primary1{
  background-image: linear-gradient(to top, #00c6fb 50%, #005bea 200%);
   border-radius: 30px;
   color: #fff !important;
    border-width: 10px !important;
    font-family: "Nunito Sans",Helvetica,Arial,sans-serif ;
    text-transform: uppercase !important;
    font-weight: bold;
}
#site{
    background-image: linear-gradient(to top, #00c6fb 0%, #005bea 200%);

}
.arabe{
  font-weight: bold;
  font-size: 17px;
}
.frn{
 font-weight: bold;
}
header{
 
}
.site-section{
padding: 2em 0;
}
.body{overflow-x:hidden;

 

  background-color:#343a40;
  background:url('/designe/images/home.jpeg') no-repeat center center fixed;
  -webkit-background-size:cover;
  -moz-background-size:cover;-o-background-size:cover;
  background-size:cover;;
  padding-top:10rem;
}
.slegon{
 margin-bottom: 20px;
  color: #007bff;
}
@media (max-width: 480px){
    header.masthead {
    padding-top: 12rem;
    padding-bottom: 12rem;
}
  #menu-toggle{
    display:block;
  }
  .myhead{
    font-size:20px;
  }
  .mylead{
    font-size:16px;
  }
}
.mybtn{
background: #20c997 !important;
border-color: #20c997 !important;
}


/*--button css--*/
.mybtn-secondary{
color: #000;
background: transparent !important;
border-color: #000;
font-size:14px;
}
.mybtn-secondary:hover{
color:#fff;
border-color: #6c757d; 
background-color: #6c757d !important;
font-size:14px;
}
button.btn.btn-default {
position: absolute;
top: 0px;
height: 48px;
width: 50px;
border-radius: 0;
right: 5px;
background: transparent;
outline: none;
}
.fa-2x{
font-size:22px;
color: #238fb6;
}
.add-to-cart a {
  display: block;
  width: 150px;
}
 .bg-overlay{
          background: rgba(0,0,0, .7);
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right:0;
          z-index: 0;
        }

.uppercase{
    text-transform: uppercase;
}

.offer {
    background: #fff;
    border: 1px solid red;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    margin: 15px 0;
    overflow: hidden;
}

.offer-danger {
    border-color: #d9534f;
}
.offer-radius {
    border-radius: 7px;
}

.offer-danger .shape {
    border-color: transparent #d9534f transparent transparent;
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-danger .shape {
    border-color: transparent #d9534f transparent transparent;
    border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}

.shape-text {
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    right: -40px;
    top: 2px;
    white-space: nowrap;
    -ms-transform: rotate(30deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
}


.shape {

    border-style: solid;
    border-width: 0 70px 40px 0;
    float: right;
    height: 0px;
    width: 0px;
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}
.offer-content {
    padding: 0 20px 10px;
}

@media (min-width: 768px)
.lead {
    font-size: 21px;
}
.lead {
    margin-bottom: 20px;
    font-size: 17px;
    font-weight: bold;
    line-height: 1.4;
}


.article {
    /* background-color: #48cfadbf; */
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
.lientitre:link {
    color: #0663D7;
    text-decoration: none;
}





.bg-soft-base {
  background-color: #e1f5f7;
}
.bg-soft-warning {
    background-color: #fff4e1;
}
.bg-soft-success {
    background-color: #d1f6f2;
}
.bg-soft-danger {
    background-color: #fedce0;
}
.bg-soft-info {
    background-color: #d7efff;
}


.search-form {
  width: 80%;
  margin: 0 auto;
  margin-top: 1rem;
}

.search-form input {
  height: 100%;
  background: transparent;
  border: 0;
  display: block;
  width: 100%;
  padding: 1rem;
  height: 100%;
  font-size: 1rem;
}

.search-form select {
  background: transparent;
  border: 0;
  margin-top: 7px;
  height: 100%;
  font-size: 1rem;
}


.search-form select:focus {
  border: 0;
}

.search-form button {
  height: 100%;
  width: 100%;
  font-size: 1rem;
}


</style>

@endsection
@section('content')

<div class="body" style="margin-top: 40px">
  
<header class="masthead text-white text-center">
         <!--div class="overlay"></dsiv-->
         <div class="container">
            <div class="row">
               <div class="col-md-10 col-lg-12 col-xl-12 text-center  fadeInUp" style="margin-bottom: 40px">
                 <div class="mylogo"></div>
                 @if(session()->has('success'))
            <div class="alert alert-success" id="msg">
            {{ session()->get('success') }}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-warning" id="msg">
            {{ session()->get('error') }}
            </div>
            @endif
             <h1 data-aos="fade-right" class="slegon"><b></b></h1>
         <div class="container">
<div class="row">
    <div class="col-lg-12 card-margin">
        <div class="card search-form">
            <div class="card-body p-0">
                <form id="search-form" action="{{'search-all'}}" method="post">
                   {{ csrf_field()}}
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                   <select class="form-control" name="select">
                                        <option value="RESSOURCES DOC">RESSOURCES DOC</option>
                                        <option value="BDDs EN TEST">BDDs EN TEST</option>
                                        <option value="ARCHIVES OUVERTS">ARCHIVES OUVERTES</option>
                                        <option value="LIVRES">LIVRES</option>
                                        <option value="DOCUMENTS">DOCUMENTS PARTAGES</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                    <input type="text" placeholder="Recherche..." class="form-control" id="search" name="search">
                                </div>
                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                     <button class="btn btn-default"><i class="fa fa-search fa-2x"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
                
                    
               </div>
            </div>
         </div>
      </header>
</div>
 <!--marquee style="color:#FF0000;font-size:15px;" scrollamount="8" scrolldelay="10" direction="left" onmouseover="this.stop()" onmouseout="this.start()">

<a href="#" target="_blank" style="color:red"> <strong>
Annonce: Les Publications des livres dans notre platfe-form pdoc est existe

 </strong></a>
 
      </marquee-->
  <div class="site-section" id="site">
      <div class="container div">
        <div class="row mb-5 justify-content-center text-center" style="margin-top: 0px">
          <div class="col-lg-12">
            <p class="section-title mb-5">
              <b>VOTRE PORTAIL D’ACCES AUX RESSOURCES ELECTRONIQUES NATIONALES ET INTERNATIONALES EN LIGNE</b>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-left">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="fa fa-newspaper-o text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>DEMANDER UN ARTICLE
                </h2>
                <p><a href="{{url('demande_article')}}" class="btn btn-primary1">DEMANDER<br>أطلب</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-left">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="fa fa-book text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>DEMANDER UN LIVRE</h2>
                <p><a href="{{url('demande_livre')}}" class="btn btn-primary1">DEMANDER<br>أطلب</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-right">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="fa fa-book text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>BIBLIOGRAPHIE DES MODULES</h2>
                @if(Auth::check())
                  <a style="margin-bottom: 15px" href="{{url('bibliographie-des-modules')}}" class="btn btn-primary1">Accéder<br>
               <span class="arabe">أدخل </span>
              </a>
                    @else
                    <a onclick="document.getElementById('about_bib').style.display='block'" style="margin-bottom: 15px" class="btn btn-primary1">Accéder<br>
               <span class="arabe">أدخل </span>
              </a>
                   @endif
              </div>
            </div>
          </div>
         
           <div class="col-lg-3 col-md-6 mb-4 mb-lg-0" data-aos="fade-right">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="fa fa-book text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>ESPACE E-LEARNING</h2>
                <p ></p>
                <p>
                 @if(Auth::check())
                   <a style="margin-top: 12px" href="{{url('espaces-elearning')}}" class="btn btn-primary1 frn">accéder <br>
                   <span class="arabe">أدخل</span>
                   </a>
                    @else
                     <a  onclick="document.getElementById('about').style.display='block'" style="margin-top: 10px" class="btn btn-primary1">accéder <br>
                   <span class="arabe">أدخل</span>
                   </a>

                   @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      @if(!empty(last_news()))
      <section class="pt-5 pb-5 bg-light" style="">
        <div class="container  pt-5 pb-5">
          <div class="row d-flex justify-content-between">
             <div class=" col-md-4" data-aos="fade-right">
           <img src="{{asset('/images/'.last_news()->image)}}" width="420" height="200">
             </div>
            <div class="col-md-8">
              <h3 class="display-4 font-weight-bold aos-init" align="right" data-aos="fade-up">{{last_news()->titre}}</h3>
              <p class="lead mt-4 aos-init" data-aos="fade-up" align="right">{{last_news()->description}}
              </p>
              <div class="row row-grid">
                
              </div>
            </div>
              
          </div>
        </div>
      </section>
      @endif


<section class="pt-5 pb-5 bg-light" style="">
        <div class="container  pt-5 pb-5">
          <div class="row d-flex justify-content-between">
            <div class="col-md-8">
              <h3 class="display-4 font-weight-bold aos-init" data-aos="fade-up">PUBLIER VOTRE LIVRE</h3>
              <p class="lead mt-4 aos-init" data-aos="fade-up" align="left">Vous avez terminé la mise en forme de votre livre ? Vous êtes prêt à le publier ? Pour publier votre livre clicker sur le button <mark>PUBLIER</mark></p>
              <div class="row row-grid">
                 @if(Auth::check())
                  <a style="margin-bottom: 10px;width: 150px"  href="{{'add-book-author'}}" class="btn btn-primary1 frn" data-aos="fade-up">PUBLIER<br>
               <span class="arabe">أنشر</span>
              </a>
                    @else
                    <a onclick="document.getElementById('about_add_book').style.display='block'" style="margin-bottom: 10px;width: 150px" class="btn btn-primary1 frn" data-aos="fade-up">PUBLIER<br>
               <span class="arabe">أنشر</span>
              </a>
                   @endif
              </div>
            </div>
               <div class="offer offer-radius offer-danger col-md-4" data-aos="fade-right">
            <div class="shape">
                <div class="shape-text">

                    New
                </div>
            </div>
            <div class="offer-content">
                <h3 class="lead uppercase">
                    Nouvelles Ressources 
                </h3>

                <div class="aside" style="box-shadow:none; margin: -10px;  text-align:justify;">
                    @foreach(new_add_ressource() as $ressource)
                    <article class="article">
                    <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <h5>
                    @if($ressource->type_acces == 'accès reserve')
                    @if(Auth::check())
                    <a class="lientitre" href="{{url($ressource->url_ressource)}}">{{$ressource->nom_ressource}}</a>
                    @else
                    <a class="lientitre" href="#" onclick="document.getElementById('ressource').style.display='block'" style="width:auto;">{{$ressource->nom_ressource}}</a>
                    @endif

                    @elseif($ressource->type_acces == 'accès ouvert')
                     <a class="lientitre" href="{{url($ressource->url_ressource)}}">{{$ressource->nom_ressource}}</a>
                    @endif
                                   </h5>
                                </div>
                    </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
          </div>
        </div>
      </section>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center" data-aos="fade-left">
          <div class="col-lg-4">
            <h2 class="section-title-underline">
              <span>NOUVEAUX LIVRES<br>
              عناوين الكتب الجديدة</span>
            </h2>
          </div>
        </div>
        <div  class="row justify-content-center" style="margin-left: 30px">
           @foreach(Books()  as  $book)
        <div class="views-row views-row-1 views-row-odd views-row-first  col-lg-3 col-md-6 mb-3">
            <div class="item">
              <div class="item-inner-item">
               <div class="views-field views-field-field-image-cache-fid">
                  <div class="field-content img">
                    @if(carbon\Carbon::now()->diffInDays($book->created_at) < 30)
                    <img class="newest-edition" src="/designe/images/nouveau.png">
                    @endif
                    <div class="tg-frontcover">
                      <a href="{{'/show_book/'.$book->titre.'/'.$book->sujet}}" data-id="{{ $book->id}}" class="view">
                        <img  src="{{asset('/images/'.$book->image)}}" title="" width="156" height="240" class="imagecache imagecache-new_in_massira imagecache-default imagecache-new_in_massira_default" alt="{{$book->titre}}" >
                       </a>

                    </div>

                  </div>
                  </div>
                    <div class="tg-backcover row container">
                    <p class="bold">Titre : {{str_limit($book->titre,10)}}</p>
                    </div>
                  
              <div class="tg-backcover row container">
                <p class="bold">Auteur(s) : {{str_limit($book->auteur,10)}}</p>
              </div>
              <div class="tg-backcover row container">
                <p class="">Editeur(s) : {{str_limit($book->editeur,10)}}</p>
              </div>
             <div class="tg-backcover row container">
                <p class="">EAN13 : {{str_limit($book->isbn,10)}}</p>
              </div> 
              <div class="tg-backcover row container">
                <p class="">Langue : {{$book->langue}}</p>
              </div>
               <div class="tg-backcover row container">
                <p class="">prix : <span style="color: red;font-weight: bold">@if($book->prix == null) Gratuit @else {{$book->prix}}$ @endif</span></p>
              </div> 
               <div class="tg-backcover row container">
                <div class="col-md-6">
                  <p class=""><i class="fa fa-download" aria-hidden="true"></i> {{$book->download_counter}}</p>
                </div>
                 <div class="col-md-6">
                  <p class=""><i class="fa fa-eye" aria-hidden="true"></i> {{$book->view}}</p>
                </div>
               
              </div> 
              <div class="views-field views-field-addtocartlink">
                <div class="field-content">
                  <div class="add-to-cart">
                    @if($book->prix == null)
                    @if(Auth::check())
                     @if($book->adress_bib == null && $book->livre_pdf == null)
                      <a onclick="document.getElementById('vide').style.display='block'"  class="form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white">Télècharger
                   </a>
                    @elseif($book->livre_pdf == NULL)
                    <a class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{url($book->adress_bib)}}" target="_blank" data-id="{{ $book->id}}">Télècharger</a>
                     @else
                     <a class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{ asset('/livre/'.$book->livre_pdf )}}" target="_blank" data-id="{{ $book->id}}">Télècharger</a>
                     @endif
                    @else
                    <a class="form-submit node-add-to-cart btn elevation-8dp text-center" onclick="document.getElementById('not_auth').style.display='block'" style="background-color: #f23a2e;width:150px;color: white" href="#">Télècharger</a>
                    @endif
                   @else
                   <a href="{{route('book.addToCarte',['id' => $book->id])}}" class="form-submit btn btn-success  node-add-to-cart btn elevation-8dp text-center" role="button" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ajouter au panier</a>
                    @endif
                  

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach
      

        </div>
        <div class="col-12 text-center">
          <a href="{{url('books')}}">Voir Plus de livres</a>
        </div>

      </div>
    </div>
       @include('layouts.layout_vide')
       @include('layouts.layout_login')
       @include('layouts.layout_ressource')
      @include('layouts.layout_auth')

   @include('layouts.layout_about')
   @include('layouts.layout_about_bib')
   @include('layouts.layout_about_add_book')


@endsection
@section('footer')
<script type="text/javascript">
$('.download').click(function(){
 $.ajax({
   url: "/update_download_count",
   type:"get",
   data: {
     id:   $(this).attr('data-id')
   },
   success: function (data) {
     console.log(data);
   },
   error: function (request, status, error) {
     console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
   }
 });
});
</script>
<script type="text/javascript">
$('.view').click(function(){
 $.ajax({
   url: "/update_view_count",
   type:"get",
   data: {
     id:   $(this).attr('data-id')
   },
   success: function (data) {
     console.log(data);
   },
   error: function (request, status, error) {
     console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
   }
 });
});
</script>
@endsection