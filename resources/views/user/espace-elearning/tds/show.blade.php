@extends('layouts.app')

@section('title')
    Afficher un Module
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
        <span class="current">Espaces-elearning </span>
      </div>
</div>

<div class="sidebar">
  <div class="sidebar_right_top">
     <div class="services">
      <h3>NAVIGATION</h3>
        <div class="container navigation">
          <h4><a href="{{url('espace-elearning-about')}}"> A propos</a></h4>
          <h4><i class="fas fa-university"></i><a href="{{url('etablissement')}}">Etablissement</a></h4>
          <h4><i class="fas fa-folder"></i><a href="{{url('bibliographie-des-modules')}}"> Modules</a></h4>
          <h5><i class="fas fa-folder"></i><a href="{{url('bibliographie-des-module/cours')}}"> Cours</a></h5>
          <h5><i class="fas fa-folder"></i><a href="{{url('bibliographie-des-module/tds')}}"> Tds</a></h5>
          <h5><i class="fas fa-folder"></i><a href="{{url('bibliographie-des-module/examens')}}">Examens</a></h5>
        </div>
    </div>
  </div>
</div> 
<div class="wrap">               
    <div class="services_grid">
<div class="container" style="margin-bottom: 20px">
  @include('layouts.flash_msg')
    <h3 class="h3">Affiche le Module {{$module->nom_module}}</h3>
<div class=" row" style="margin-bottom: 40px">
      <form class=" card-sm col-7" action="{{url('search-module')}}" method="get">
        {{ csrf_field()}}
          <div class=" row no-gutters align-items-center">
             <div class="col">
                <input class="form-control form-control-lg form-control-borderless" type="text" placeholder="Rechercher Des Modules" name="nom_module" id="nom_module">
             <div id="all_module_selected"></div>
               {{ csrf_field() }}
             </div>                 
            <div class="col-auto">
              <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
            </div>
          </div>
     </form>
     @if(Auth::user()->genre == 'enseignant')
     <div class="col-2"></div>
             <div class="col-3">
                <a href="{{url('/bibliographie-des-module/add-module')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Ajouter un module</a>
             </div>
     @endif
</div>
    <div class="row" >
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                     <img class="pic-1" src="/designe/images/folder.jpg">
                     <img class="pic-2" src="/designe/images/folder-open.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href=""></a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                     <img class="pic-1" src="/designe/images/folder.jpg">
                     <img class="pic-2" src="/designe/images/folder-open.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href=""></a></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                     <img class="pic-1" src="/designe/images/folder.jpg">
                     <img class="pic-2" src="/designe/images/folder-open.jpg">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href=""></a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    <div class="clear"></div>
 </div>
 
@endsection
@section('footer')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

 $('#nom_module').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('module.search') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#all_module_selected').fadeIn();  
                    $('#all_module_selected').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#nom_module').val($(this).text());  
        $('#all_module_selected').fadeOut();  
    });  

});
</script>

@endsection