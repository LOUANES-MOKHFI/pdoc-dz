@extends('layouts.app')

@section('title')
    Espaces-elearning
@endsection
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />

{!! Html::style('/designe/plugins/fontawesome-free/css/all.min.css"') !!}
<style type="text/css">

.sidebar{
  background-color: #bed6e1;
  height: auto;
}
.navigation h4 a{
  color:#0A83BC;
}
  .views-row .item .item-inner-item {
    overflow: hidden;
}
.views-row .views-field-field-image-cache-fid .field-content {
    position: relative;
}
.views-field-field-image-cache-fid .field-content .newest-edition {
    position: absolute;
    margin-bottom: 40px;
    left: 0px;
    z-index: 5;
    height: 120px;
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
.bold{
  font-weight: bold;
}
a {
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

h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

/********************* shopping Demo-1 **********************/
.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}

.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-15px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:#828282}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}

@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}

.fa-folder{
  color: yellow;
}
ul li .a{
  color: #343a40;
  font-size: 14px;
  }
  
.dropdown-menu {
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
</style>

@endsection
@section('content')

<div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Espaces-elearning</span>
      </div>
</div>

<div class="sidebar">
  <div class="sidebar_right_top">
     <div class="services">
      <h3>NAVIGATION</h3>
        <div class="container navigation">
          <h4><a href="{{url('espace-elearning-about')}}"> A propos</a></h4>
          <h4><i class="fas fa-university"></i><a href="{{url('etablissement')}}"> Etablissement</a></h4>
          <h4><i class="fas fa-folder"></i><a href="{{url('espaces-elearning')}}"> Modules</a></h4>
          <h5><i class="fas fa-folder"></i><a href="{{url('espaces-elearning/cours')}}"> Cours</a></h5>
          <h5><i class="fas fa-folder"></i><a href="{{url('espaces-elearning/tds')}}"> Tds</a></h5>
          <h5><i class="fas fa-folder"></i><a href="{{url('espaces-elearning/examens')}}"> Examens</a></h5>
        </div>
    </div>
  </div>
</div> 
<div class="wrap">               
  <div class="services_grid">
    <div class="container" style="margin-bottom: 20px">
      <h3 class="h3">Ajoute Un examen dans le module <span style="color: red">{{$module->nom_module}}</span></h3>
      <div class="row container" >
            <form method="POST" action="{{ url('/add-examens') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="nom_examen">Nom d'examens<span style="color: red"> *</span></label>
                            <input id="nom_examen" type="text" class="form-control form-control-lg @error('nom_examen') is-invalid @enderror" name="nom_examen" value="{{ old('nom_examen') }}" required autocomplete="nom_examen">
                                @error('nom_examen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="annee">Année<span style="color: red"> *</span></label>
                           <input type="text" name="annee" class="form-control form-control-lg" value="{{old('annee')}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="tds">Td<span style="color: red"> *</span></label>
                              <input type="file" name="fichier" class="form-control form-control-lg">
                        </div>
                            <input type="hidden" name="id_module" value="{{$module->id}}">
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-lg px-5">
                                    {{ __('Valider') }}
                                </button>
                        </div>
                    </div>
            </form>
      </div>
    </div>
  </div>
    <div class="clear"></div>
 </div>
 
@endsection
@section('footer')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection