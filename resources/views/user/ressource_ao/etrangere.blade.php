@extends('layouts.app')

@section('title')
    Ressources Etrangéres
@endsection
@section('header')

<style type="text/css">
.p{
    font-size: 12px;
    font-weight:bold;
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


.body {
    background: #eee
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

  </style>

</style>
@endsection
@section('content')


  <div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Ressources Etrangéres </span>
      </div>
</div>
<div class="body">
   <div class="container" style="margin-bottom: 20px"> 
    <div class="row search-header">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="vendor-logo">
                <h1>Archives Ouvertes</h1>
            </div>
            <div class="vendor-text">
                Production Scientifique Des Universités Etrangéres
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div id="custom-search-input">
              <form action="{{url('/search_ressource_etr')}}" method="get">
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
<a  style="color:blue;" href="{{url('/ressource-ao/'.$lettre.'/Etrangères')}}">{{$lettre}}</a>
@endforeach

</div>
</div>
</div>
</div>
</section>
   <div class="row">
      @if(count($ressourceAO) == null)
      <div class="container" style="margin-top: 20px">
        <div class="row alert alert-info text-center">
            <p>Aucune Ressource Etrangéres</p>
        </div>
      </div>
    @else
<div class="container mt-5 mb-5">
        <div class="col-md-12">
           @foreach($ressourceAO as $ressource)
            <div class="bg-white p-3 rounded mt-2">
                <div class="row">
                   @if($ressource->logo == null)
                      @else
                    <div class="col-md-3">
                        <div class="d-flex flex-column justify-content-center align-items-center icon-container text-white mb-2"><img class="rounded-circle" src="{{asset('/images/'.$ressource->logo)}}">
                        </div>
                       
                    </div>
                     @endif
                     @if($ressource->logo == null)
                     <div class="col-md-9 border-right">
                      @else
                    <div class="col-md-6 border-right">
                      @endif
                        <div class="listing-title">
                            <h5>{{$ressource->nom_ressource}}</h5>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings">
                                <span style="color:blue;font-weight: bold">{{$ressource->organisme_producteur}}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings">
                                Discipline : <span style="color: red;font-weight: bold">{{$ressource->descipline}}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings">
                                Pays : <span style="color: red;font-weight: bold">{{$ressource->pays}}</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>&nbsp;{{$ressource->description}}<br></p>
                        </div>
                    </div>
                    <div class="d-flex col-md-3">
                        <div class="d-flex flex-column justify-content-start user-profile w-100">
                            <div class="progresses">
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
                           <span>Date d'insertion : </span>
                                <div class=" mt-1">
                                     <h3 class="p"><span style="color: #00000">{{$ressource->created_at}}</span></h3>
                                </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
              @endforeach 
        </div> 
         <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                            {{$ressourceAO->links()}}
                                                    </ul>
                    </nav>
                </div>

     
</div>

  @endif
        @include('layouts.layout_ressource')

  @include('layouts.layout_login')

</div>
<div style="margin-bottom: 50px">
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
</div>
       

@endsection
@section('footer')
<script type="text/javascript">
$("#descipline").click(function(){
  $(".descipline").toggle();
});
$("#type").click(function(){
  $(".type").toggle();
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