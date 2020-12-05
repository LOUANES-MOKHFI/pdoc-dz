@extends('layouts.app')

@section('title')
{{$book->titre}}
@endsection

@section('header')
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

   <style type="text/css">

.view-all>a{
  color: #007bff;
  font-size: 18px
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
    color: red;
    font-family: bold;
}
.images_3_of_1 img {
    border: 1px solid #aeaeae;
    box-shadow: 3px 3px 5px 1px #aeaeae;
}
.active{
}
 .body {
  font-family: "Poppins", sans-serif;
      margin-bottom: 0px;
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
.uppercase{
      text-transform: uppercase;
}
.bg-color{
  min-height: 550px;
}
.node-add-to-cart{
  width: 151px;
}


.product-page #product_cont {
    border-top: 0 none;
}

#product_cont {
    border-top: 2px solid #999999;
}
.responsive-more-than-767px {
    display: block;
}
#product_img {
    padding: 6px 10px;
    box-shadow: 0 1px 7px rgb(136,136,136);
}
#product_img {
    margin: 15px 0 0 0px;
}
#product_img > img {
    height: 400px;
    width: 100%;
}

img {
    vertical-align: middle;
}
img {
    border: 0;
}
#pdf-button {
    text-align: center;
    margin-top: 34px;
}
#pdf-button a {
    padding: 11px 40px 11px 21px;
    background: #c20707;
    color: #fff;
    position: relative;
    border-radius: 5px;
    display: block;
    width: 100%;
}
a {
    color: #666666;
    text-decoration: none;
    transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
}
#pdf-button a i {
    position: absolute;
    right: 12px;
}
#pdf-button a i:before {
    content: "\f1c1";
    font-family: fontawesome;
    padding-left: 8px;
    font-size: 25px;
}
#product_txt {
    padding-right: 0px;
    margin-top: 10px;
    padding-left: 73px;
    padding-bottom: 50px;
}
.col-sm-6 {
    width: 100%;
}
#product_txt {
}
@media (min-width: 768px)
.col-sm-6 {
    width: 50%;
}
@media (min-width: 768px)
.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11 {
    float: right;
}
#product_txt > p {
    height: 50px;
    margin-top: 15px;
}
p {
    margin: 0 0 9px;
}
#tag-specialty a {
    color: #fff;
    float: left
}
a {
    color: #666666;
    text-decoration: none;
    transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -ms-transition: all 0.3s ease-in-out 0s;
}
#product_txt #tag-specialty span {
    background: #ffa422;
    color: #fff;
    margin-left: 5px;
    padding: 8px 10px;
    display: block;
    float: right;
    margin-top: 16px;
    border-radius: 5px;
}
#product_txt h2 {
    font-size: 30px;
    font-weight: bold;
    color: #474747;
    line-height: 1.3;
}

h2, .h2 {
    font-size: 27px;
}
.product_author {
    padding-bottom: 20px;

}
#product_txt .product_author span, .product-body, #tab2, #tab1 {
    line-height: 25px;
   
}
#product_txt .product_author span {
    color: #284A83;

}
.product_author > span {
    font-weight: normal;
    color: #464646!important;
}
.product_author p {
    font-size: 17px;
     color: red;
     font-weight: bold;
}
.product_author span {
    font-size: 17px;
     color: #fff;
     font-weight: bold;
}
#product_no_price {
    margin-top: 42px;
}
@media (min-width: 768px)
.col-sm-3 {
    width: 25%;
}
@media (min-width: 768px)
.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11 {
    float: right;
}
.prod-information {
    padding-left: 35px;
    padding-top: 0px;
    line-height: 25px;
    border-left: 1px solid lightgrey;
}
#prod_prices .book_price {
    font-size: 18px;
    margin-bottom: 7px;
    color: #f8931d;
}
b, strong {
    font-weight: bold;
}


.propos{
  display: none;
}



   </style>

@endsection
@section('content')
<div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Livre </span>
      </div>
</div>

<div class="body">

@if($book->prix == null)

<div class="wrap">              
    <div class="services_grid col-12">
    <div class="content_bottom">
      <div class="image group marketing">
        <div class="row">
      <div class="grid images_3_of_1 col-md-4">
        <img  src="{{asset('/images/'.$book->image)}}" title="" width="200" height="300" class="imagecache imagecache-new_in_massira imagecache-default imagecache-new_in_massira_default" alt="{{$book->titre}}">  
      </div>
    
        <div class="col-md-8">
            <div class="alert alert-info">
                Informations de livre</div>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span></div>
            <table class="table">
                <tbody>
                  <tr class="alert alert-danger">
                        <td>Titre</td>
                        <td>{{$book->titre}}</td>

                    </tr>
                     <tr class="alert alert-success">
                        <td>Domaine(s) </td>
                        <td>{{$book->sujet}}</td>
                    </tr>
                    <tr >
                        <td>Auteur(s) </td>
                        <td>{{$book->auteur}}</td>
                    </tr>
                    <tr class="alert alert-danger">
                        <td>Editeur(S)</td>
                        <td>{{$book->editeur}}</td>
                    </tr>
                    <tr class="alert alert-success">
                        <td>parution</td>
                        <td>{{$book->parution}}</td>
                    </tr>
                     <tr>
                      @if(Auth::check())

                        <td>Source De livre </td>
                        <td>
                           @if($book->adress_bib == null)
                           <a onclick="document.getElementById('vide').style.display='block'" >Lien de livre
                            </a>
                           @else

                            <a href="{{url($book->adress_bib)}}">Lien de livre</a>
                          @endif
                        </td>
                        @else
                         <td>Source De livre </td>
                        <td><a  onclick="document.getElementById('id01').style.display='block'" href="#">Lien de livre</a></td>
                        @endif
                    </tr>
                    <tr class="alert alert-danger">
                        <td>EAN13/ISBN </td>
                        <td>{{$book->isbn}}</td>
                    </tr>

                </tbody>
            </table>

        <div class="grid">
            <div class="views-field views-field-addtocartlink">
                <div class="field-content">
                  <div class="">
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
                    @endif
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>

        </div>
        <hr>

        <div align="left">
          <h2 class="uppercase">livre de méme domaine</h2>
        </div>
        <div class="row">
       @foreach(Books_domaine($book->sujet) as $book)
      <div class="views-row views-row-1 views-row-odd views-row-first  col-lg-3 col-md-6 mb-4">
            <div class="item">
              <div class="item-inner-item">
               <div class="views-field views-field-field-image-cache-fid">
                  <div class="field-content img">
                    @if(carbon\Carbon::now()->diffInDays($book->created_at) < 30)
                    <img class="newest-edition" src="/designe/images/nouveau.png">
                    @endif
                    <div class="tg-frontcover">
                      <a href="{{'/show_book/'.$book->titre.'/'.$book->sujet}}" data-id="{{ $book->id}}" class="view">
                        <img  src="{{asset('/images/'.$book->image)}}" title="" width="156" height="240" class="imagecache imagecache-new_in_massira imagecache-default imagecache-new_in_massira_default" alt="{{$book->titre}}">
                       </a>
                    </div>
                  </div>
                  </div>
                   <div class="tg-backcover row container" style="margin-bottom: -10px">
                    <p class="bold">Titre : {{str_limit($book->titre,10)}}</p>
                    </div>
                  
              <div class="tg-backcover row container" style="margin-bottom: -10px">
                <p class="bold">Auteur(s) : {{str_limit($book->auteur,10)}}</p>
              </div>
              <div class="tg-backcover row container" style="margin-bottom: -10px">
                <p class="">Editeur(s) : {{str_limit($book->editeur,10)}}</p>
              </div>
             <div class="tg-backcover row container" style="margin-bottom: -10px">
                <p class="">EAN13 : {{str_limit($book->isbn,10)}}</p>
              </div> 
              <div class="tg-backcover row container" style="margin-bottom: -10px">
                <p class="">Langue : {{$book->langue}}</p>
              </div>
               <div class="tg-backcover row container" style="margin-bottom: -10px">
                <p class="">prix : <span style="color: red;font-weight: bold">@if($book->prix == null) Gratuit @else {{$book->prix}}$ @endif</span></p>
              </div> 
               <div class="tg-backcover row container" style="margin-bottom: -10px">
                <div class="col-md-4">
                  <p class=""><i class="fa fa-download" aria-hidden="true"></i> {{$book->download_counter}}</p>
                </div>
                 <div class="col-md-4">
                  <p class=""><i class="fa fa-eye" aria-hidden="true"></i> {{$book->view}}</p>
                </div>
               
              </div> 
              <div class="views-field views-field-addtocartlink" style="margin-top: 7px"> 
                <div class="field-content">
                  <div class="">
                  @if($book->prix == null)
                    @if(Auth::check())
                     @if($book->adress_bib == null && $book->livre_pdf == null)
                      <a onclick="document.getElementById('vide').style.display='block'"  class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" data-id="{{ $book->id}}">Télècharger
                   </a>
                    @elseif($book->livre_pdf == NULL)
                    <a class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{url($book->adress_bib)}}" target="_blank" data-id="{{ $book->id}}">Télècharger</a>
                     @else
                     <a class="download form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{ asset('/livre/'.$book->livre_pdf )}}" target="_blank" data-id="{{ $book->id}}">Télècharger</a>
                     @endif
                    @else
                     <a class="form-submit node-add-to-cart btn elevation-8dp text-center" onclick="document.getElementById('not_auth').style.display='block'" style="background-color: #f23a2e;width:150px;color: white" href="#">Télècharger</a>
                    @endif
                    @endif
               
                     <a href="{{route('book.addToCarte',['id' => $book->id])}}" class="form-submit btn btn-success  node-add-to-cart btn elevation-8dp text-center" role="button" style="margin-top: 5px"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ajouter au panier</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach


        </div>
         @else

<div class="col-sm-12 main-content">
  <div id="product_cont" class="responsive-more-than-767px">
    <div class="row">
      <div class="col-sm-3 has-image">
        <div id="product_img">
          <img src="{{ asset('/images/'.$book->image )}}" alt="">   
        </div>
        <div id="pdf-button">
          <a target="_blank" href="{{ asset('/livre/'.$book->livre_pdf )}}" download=""><i class="fa fa-file-pdf-o"></i>
          Télècharger le sommaire</a>
        </div>
      </div>
  
    <div id="product_txt" class="col-sm-6">
      <p id="tag-specialty">
      <a href="{{url('books/'.$book->sujet)}}">
        <span>{{$book->sujet}}</span>
      </a>
     </p>
     <br>
      <h2>{{$book->titre}}</h2>

    <div class="product_author">
      <span>Auteur(s): <span class="span">{{$book->auteur}}</span></span><br>
      <span>Editeur(s): <span class="span">{{$book->editeur}}</span></span><br>
      <span>Langue: <span class="span">{{$book->langue}}</span></span><br>
     
    </div>
      <div class="book_add_to_cart">
        <div class="add-to-cart">
        </div>
      </div>   
    </div>
  <div id="product_no_price" class="product_bold col-sm-3">
    <div class="prod-information">
      <div id="prod_prices"><div class="book_price"> <strong><span class="price-label">PRIX: </span>{{$book->prix}}</strong></div></div>     <div id="product_no_page" class="product_bold">
        NOMBRE DE PAGES:  {{$book->nbr_page}}     </div>
      <div id="product_copyright" class="product_bold">
        PAYS D'EDITION:   {{$book->pays_edition}}  </div>
      <div id="product_binding_type" class="product_bold">
        DATE D'EDITION:   {{$book->parution}}  </div>
      <div id="product_edition" class="product_bold">
        FORMAT: {{$book->format}} </div>
      <div id="product_color" class="product_bold">
        ISBN10: {{$book->isbn10}}  </div>
      <div id="product_dim" class="product_bold">
        ISBN13:   {{$book->isbn13}}  </div>
      <div id="product_weight" class="product_bold">
       EAN:  {{$book->isbn}}  </div>
    </div>
    </div>
  </div>
</div>
</div>
        <div class="container" style="margin-top: 30px">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                          <div class="card-header" id="propos">
                            <h5 class="mb-0 uppercase" >
                             résume
                             <span class="mx-3 icon-keyboard_arrow_down" style="float: right"></span>
                            </h5>
                          </div>
                         
                            <div class="card-body propos">
                              <p class="mb-0" align="justify">{{Crypt::decrypt($book->resume)}}</p><p>
                            </p></div>
                     
                        </div>
                </div>
              </div>
            </div>
           </div>
        </div>

        <hr>
          <div class="container card" >
        <div align="left">
          <h2 class="uppercase">livre de méme domaine</h2>
        </div>
        <div class="row">
       @foreach(Books_domaine($book->sujet) as $book)
      <div class="views-row views-row-1 views-row-odd views-row-first  col-lg-3 col-md-6 mb-4">
            <div class="item">
              <div class="item-inner-item">
               <div class="views-field views-field-field-image-cache-fid">
                  <div class="field-content img">
                    @if(carbon\Carbon::now()->diffInDays($book->created_at) < 30)
                    <img class="newest-edition" src="/designe/images/nouveau.png">
                    @endif
                    <div class="tg-frontcover">
                      <a data-id="{{ $book->id}}" class="view" href="{{'/show_book/'.$book->titre.'/'.$book->sujet}}">
                        <img  src="{{asset('/images/'.$book->image)}}" title="" width="156" height="240" class="imagecache imagecache-new_in_massira imagecache-default imagecache-new_in_massira_default" alt="{{$book->titre}}">
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
                <div class="col-md-4">
                  <p class=""><i class="fa fa-download" aria-hidden="true"></i> {{$book->download_counter}}</p>
                </div>
                 <div class="col-md-4">
                  <p class=""><i class="fa fa-eye" aria-hidden="true"></i> {{$book->view}}</p>
                </div>
               
              </div> 
              <div class="views-field views-field-addtocartlink" style="margin-top: 7px"> 
                <div class="field-content">
                  <div class="">
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
                    @endif
               
                     <a href="{{route('book.addToCarte',['id' => $book->id])}}" class="form-submit btn btn-success  node-add-to-cart btn elevation-8dp text-center" role="button" style="margin-top: 5px"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ajouter au panier</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach

        </div>
        </div>
        @endif
      </div>
        </div>
              @include('layouts.layout_login')

               @include('layouts.layout_vide')

      @include('layouts.layout_auth')

    <div class="clear"></div>
 </div>

 </div>
 @endsection

 @section('footer')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">

$("#propos").click(function(){
  $(".propos").toggle();
});
</script>
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