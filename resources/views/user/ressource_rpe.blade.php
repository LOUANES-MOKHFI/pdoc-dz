@extends('layouts.app')

@section('title')
    Ressources en period d'essai
@endsection
@section('header')
{!! Html::style('/designe/css/ressource.css')!!}
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<style type="text/css">
  <style type="text/css">
.p{
    font-size: 12px;
    font-weight:bold;
    float: right;
  }
 
a{
  color: blue;
  font-weight: bold;
  font-size: 17px;
  font-family: arial;
  padding: 0 0 0 0;
}

.btn-info{
  height: 45px;
}

.blog-desc h4{
    font-size: 20px;
}
.blog-desc p{
    font-size: 15px;
}
.blog-desc p a{
    margin: 0px 0px 0px 0px;
}

.btn-info{
  background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
   border-radius: 30px
}
.pb-50 {
    padding-bottom: 20px;
}
.pt-70 {
    padding-top: 30px;
}

.mb-15 {
    margin-bottom: 10px;
}


.mb-15 {
    margin-bottom: 15px;
}
.subscribe2-wrapper .subscribe-form input {
    background: none;
    border: 1px solid #fff;
    border-radius: 30px;
    color: #fff;
    display: inline-block;
    font-size: 15px;
    font-weight: 300;
    height: 57px;
    margin-right: 17px;
    padding-left: 35px;
    width: 70%;
}
.subscribe2-wrapper .subscribe-form button {
    background: #ffff;
    border: none;
    border-radius: 30px;
    color: #4b5d73;
    display: inline-block;
    font-size: 16px;
    font-weight: 400;
    line-height: 2;
    transition: all 0.3s ease 0s;
    width: 150px;
}
.subscribe2-wrapper .subscribe-form button i {
    font-size: 16px;
    padding-left: 1px;
}

.caret{
  color: red;
  float: right;
}
  section#companies .company-letters {
    border-bottom: 2px solid #e3e3e3;
    background: #f6f6f6;
    text-align: center;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

section#companies .company-letters a {
    font-weight: 700;
    display: inline-block;
    padding: 15px 10px;
    color: #333;
}

.icon-container {
    border-radius: 7px
}

.stars i {
    margin-right: 2px;
    color: red;
    font-size: 13px
}

.rating-number {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 2px
}

.number-ratings {
    font-size: 12px
}

.listing-title {
    margin-bottom: -7px
}

.progress {
    height: 16px
}

.tags span {
    margin-right: 9px;
    border: 1px solid green;
    padding-right: 9px;
    padding-left: 9px;
    padding-top: 2px;
    padding-bottom: 4px;
    border-radius: 7px;
    background-color: green;
    color: #fff
}

/* SEARCH HEADER */
.search-header .vendor-logo {
    display: table;

}
.search-header .vendor-logo > h1 {
    color: #5c84c3;
    display: table-cell;
    font-style: italic;
    vertical-align: bottom;
     text-transform: uppercase;
    font-size: 30px;
}
.search-header .vendor-text {
    color: #5c84c3;
    font-size: 14px;
    font-weight: bold;
}
.search-header #custom-search-input {
    margin:0;
    margin-top: 10px;
    padding: 0;
}
.search-header #custom-search-input .search-query {
    padding-right: 4px;
    padding-right: 4px \9;
    padding-left: 15px;
    padding-left: 15px \20;
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    border: 3px solid #5686da;
    height: 50px;
    margin-bottom: 0;
    -webkit-border-radius: 11px;
    -moz-border-radius: 11px;
    border-radius: 11px;
}
.search-header #custom-search-input button {
    border: 0;
    background: none;
    /** belows styles are working good */
    padding: 2px 5px;
    margin-top: 2px;
    position: relative;
    left: -28px;
    /* IE7-8 doesn't have border-radius, so don't indent the padding */
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color:#D9230F;
}

.search-header .search-query:focus + button {
    z-index: 3;   
}
.propos{
  display: none;
}
.p{
    font-size: 12px;
    font-weight:bold;
    float: right;
  }
  .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 20%; /* Could be more or less, depending on screen size */

}
</style>
@endsection
@section('content')


  <div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Ressources en périodes d'éssais </span>
      </div>
</div>
<div class="body">
<div class="container">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                          <div class="card-header" id="propos">
                            <h5 class="mb-0" >
                             A Propos des BASES DES DONNEES EN TEST
                             <span class="mx-3 icon-keyboard_arrow_down" style="float: right"></span>
                            </h5>
                          </div>
                         
                            <div class="card-body propos">
                              <p class="mb-0" align="justify">
Les différentes bases de données  payantes et disponibles en période de test  afin d’y accéder et exploiter  après avoir reçu l’autorisation de l’éditeur. Cette période diffère d’un éditeur à un autre: 01 mois,  02 mois ou 03 mois ju’squà 06 mois .<br>
&thinsp;&thinsp;&thinsp;L’objectif est de savoir le taux d’exploitation d’une base de données par la communauté des usagers à travers des données statistiques fournies par l’éditeur à des fins d’acquisition.</p><p>
                            </p></div>
                     
                        </div>
                </div>
              </div>
            </div>
          </div>
</div>
<div class="container" style="margin-bottom: 20px"> 
    <div class="row search-header">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="vendor-logo">
                <h1>Ressources</h1>
            </div>
            <div class="vendor-text">
                Ressources en test
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div id="custom-search-input">
              <form action="{{url('/search_ressource_pe')}}" method="get">
                  {{ csrf_field()}}
                <div class="input-group col-md-12">

                 
                    <input type="text" class="search-query form-control" placeholder="Nom de la ressource" name="ressource" required />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="button">
                            <span class=" fa fa-search"></span>
                        </button>
                    </span>
                 
                </div>
                   </form>
            </div>
        </div>
    </div>
</div>
 <section class="ptb80" id="companies">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="company-letters">
  @foreach(lettre() as $lettre)
<a style="color:blue;" href="{{url('/ressource-pe/'.$lettre)}}">{{$lettre}}</a>
@endforeach

</div>
</div>
</div>
</div>
</section>
 @if(count($ressourcePE) == null)
      
      <div class="container" style="margin-top: 20px">
        <div class="row alert alert-info text-center">
            <p>Aucun  ressources en period d'essai</p>
        </div>
      </div>

    @else


    <div class="row ">
      
      <div class="col-lg-3 col-md-3" style="margin-top: 15px">
        <div class="widget1">
          <h4 class="widget_title container"><span>Affiner par type</span></h4>
          <div class="menu-group-type-container">
            <ul id="menu-group-type" class="menu container">
              <li id="menu-item-1667" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1667">
                <a href="{{url('/ressource_rp/all_type')}}">Tout les Ressources</a></li>
             @foreach(all_typepe() as $ressource)
              <li id="menu-item-1668" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1668"><a href="{{url('/ressource_rp/'.$ressource->type_ressource)}}">{{$ressource->type_ressource}}</a></li>
            @endforeach
            </ul>
        </div>
      </div>
      </div>

 <div class="col-lg-9 col-md-9">

        
<section class="row-section">
    <div class="container">
      <div class="row">
        <h5 class="text-center" style="margin-top: 10px">{{count($ressourcePE)}} Ressource(s) trouvée(s)</h5>
      </div>
      <div class="col-md-12 row-block">
          <ul id="sortable">
             @foreach($ressourcePE as $ressource)
              <li><div class="media row">
              <div class=" col-md-2">
                  <img class="rounded-circle" src="{{asset('/images/'.$ressource->logo)}}" width="150" height="150">
              </div>
              <div class="media-body col-md-7">
             @if(($ressource->du == 'Ouvert' && $ressource->du == 'Ouvert' ) || ($ressource->du == null && $ressource->du == null))
                <p style="color: red;font-weight: bold;margin-bottom: 0px">ACCES OUVERT</p>
                @else
                <p style="margin-bottom: 0px;font-weight: bold;">Accée ouvert Du <span style="color: red">{{$ressource->du}}</span> jusqu'au <span style="color: red">{{$ressource->au}}</span></p>
                @endif
                 <h5>{{$ressource->nom_ressource}}</h5>
                   <p class="h5"><span style="color:blue;font-weight: bold">{{$ressource->organisme_producteur}}</span></p>
                   <p class="h5">Discipline : <span style="color: red;font-weight: bold">{{$ressource->descipline}}</span></p>
                   <hr>
                  <p>{{str_limit($ressource->description,250)}}</p>
                  <h3 class="p">Date d'insertion : <span style="color: #00000">{{$ressource->created_at}}</span></h3>
              </div>
              <div class="media-right align-self-center col-md-2">
                    @if($ressource->type_acces == 'accès reserve')
                    @if(Auth::check())
                    <a class="btn btn-info" href="{{url($ressource->url_ressource)}}">Visiter la ressource</a>
                    @else
                    <a class="btn btn-info" href="#" onclick="document.getElementById('ressource').style.display='block'" style="width:auto;">Visiter la ressource</a>
                    @endif

                    @elseif($ressource->type_acces == 'accès ouvert')
                     <a class="btn btn-info" href="{{url($ressource->url_ressource)}}">Visiter la ressource</a>
                    @endif


              </div>
          </div></li>
             @endforeach 
          </ul>
      </div>
                   {{$ressourcePE->links()}}

</div>   
 @include('layouts.layout_login')
        @include('layouts.layout_ressource')

</section>
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
      </div>

</div>

   @endif

  </div>

@endsection
@section('footer')
<script type="text/javascript">

$("#propos").click(function(){
  $(".propos").toggle();
});
</script>

<script type="text/javascript">

$(document).ready(function()
{
  
  // Closes the sidebar menu on menu-close button click event
  $("#menu-close").click(function(e)              //declare the element event ...'(e)' = event (shorthand)
  {
                                // - will not work otherwise")
    $("#sidebar-wrapper").toggleClass("active");      //instead on click event toggle active CSS element
    e.preventDefault();                   //prevent the default action ("Do not remove as the code
    
    /*!
    ======================= Notes ===============================
    * see: .sidebar-wrapper.active in: style.css
    ==================== END Notes ==============================
    */
  });                             //Close 'function()'

  // Open the Sidebar-wrapper on Hover
  $("#menu-toggle").hover(function(e)             //declare the element event ...'(e)' = event (shorthand)
  {
    $("#sidebar-wrapper").toggleClass("active",true);   //instead on click event toggle active CSS element
    e.preventDefault();                   //prevent the default action ("Do not remove as the code
  });

  $("#menu-toggle").bind('click',function(e)          //declare the element event ...'(e)' = event (shorthand)
  {
    $("#sidebar-wrapper").toggleClass("active",true);   //instead on click event toggle active CSS element
    e.preventDefault();                   //prevent the default action ("Do not remove as the code
  });                             //Close 'function()'

  $('#sidebar-wrapper').mouseleave(function(e)        //declare the jQuery: mouseleave() event 
                                // - see: ('//api.jquery.com/mouseleave/' for details)
  {
    /*! .toggleClass( className, state ) */
    $('#sidebar-wrapper').toggleClass('active',false);    /* toggleClass: Add or remove one or more classes from each element
                                in the set of matched elements, depending on either the class's
                                presence or the value of the state argument */
    e.stopPropagation();                  //Prevents the event from bubbling up the DOM tree
                                // - see: ('//api.jquery.com/event.stopPropagation/' for details)
                                
    e.preventDefault();                   // Prevent the default action of the event will not be triggered
                                // - see: ('//api.jquery.com/event.preventDefault/' for details)
  });
});


$(document).ready(function()
{
    /* smooth scrolling for scroll to top */
  $('#to-top').bind('click', function()
  {
    $('body,html').animate({
      scrollTop: 0}, 
      2500);
  });

  //Easing Scroll replace Anchor name in URL and Offset Position
  $(function(){
    $('a[href*=#]:not([href=#])').click(function()
    {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top -420
          }, 3500, 'easeOutBounce');
          return false;
        }
      }
    });
  });
});

</script>
@endsection