@extends('layouts.app')

@section('title')
    Resultat(s) de recherche
@endsection
@section('header')
{!! Html::style('/designe/css/ressource.css')!!}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">
 



  .body{
    margin-top:20px;
    background:#f8f8f8
}
.avatar--md .avatar__content img{
    width:40px;
    height:40px;
}
thead{
    background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
 
}
.tr td{
  font-size: 18px;
  font-weight: bold;
}
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
.img:hover {
  transform: rotateY(30deg);
}
.add-to-cart a {
  display: block;
  width: 150px;
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

.search-form button svg {
  width: 24px;
  height: 24px;
}
.p{
    font-size: 12px;
    font-weight:bold;

  }

</style>

@endsection
@section('content')
<div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Recherche Génerale </span>
      </div>
</div>
<div class="body">
  
@if($select == 'LIVRES')
 <div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="row">
              <div class="col-md-6">
                <h5> {{$select}}</h5>
              </div>
              <div class="col-md-6">
                <p style="font-size: 16px;font-weight: bold" class="text-right">{{$count_books}} resource(s) trouvée(s)<p>
              </div>
           </div>
            <div class="mb-3 Card_custom-card--border_5wJKy card">
                @if($count_books == 0)
                   <div class="">
                    <div class="alert alert-info text-center">
                      <h4>Mot Clé : {{$word}}</h4> 
                      <p style="font-size: 25px" >Aucun resultat trouvée</p>
                    </div>
                  </div>
                
                  @else
                <div class="table-responsive-xl row container">
                   
                                    @foreach($books as $key => $book)
      <div class="views-row views-row-1 views-row-odd views-row-first  col-lg-3 col-md-6 mb-4" data-aos="zoom-out-down">
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
               
                     <a href="{{route('book.addToCarte',['id' => $book->id])}}" class="form-submit btn btn-success  node-add-to-cart btn elevation-8dp text-center" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Ajouter au panier</a>
                     @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endforeach   
                
                </div>
                @endif 
                <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                          @if($word == null)
                            {{ $books->appends(['select' => $select])->links() }}
                          @endif
                        </ul>
                    </nav>
                </div>

            </div>
            <div >
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
</div>
        </div>

    </div>

</div>
@endif
@if($select == 'DOCUMENTS')
 <div class="container">
    <div class="row">
        <div class="col-lg-12">
                              <div class="row">
            <div class="col-md-6">
              <h5> {{$select}}</h5>
            </div>
            <div class="col-md-6">
              <p style="font-size: 16px;font-weight: bold" class="text-right">{{$count_document}} resource(s) trouvée(s)<p>
            </div>
         </div>

            <div class="mb-3 Card_custom-card--border_5wJKy card">
                <div class="table-responsive-xl">
                   @if($count_document == 0)
                   <div class="">
                    <div class="alert alert-info text-center">
                      <h4>Mot Clé : {{$word}}</h4> 
                      <p style="font-size: 25px" >Aucun resultat trouvée</p>
                    </div>
                  </div>
                
                  @else
          <table class="table table-striped">
             <thead>
              <tr class="tr">
                <td>Titre</td>
                <td>Type de document</td>
                <td>Auteur(s) </td>
                <td>Domaine</td>
              <!--td>Enseignant</td-->
              </tr>
             </thead>
             @foreach($document as $document1)
                    <tr>
                        <td>
                          @if($document1->fichier != Null)<a href="{{ asset('/document/'.$document1->fichier )}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                           @elseif($document1->lien != Null)
                           <a href="{{url($document1->lien)}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                             @elseif($document1->url != Null)
                           <a href="{{url($document1->url)}}" target="_blank" class=" elevation-8dp">{{$document1->titre_doc}}</a>
                           @else
                           <a href="{{url('/document/'.$document1->id )}}" class=" elevation-8dp">Résume de: {{$document1->titre_doc}}</a>
                           @endif
                         </td>
                        <td>{{$document1->type_doc}}</td>
                        <td>{{$document1->auteur_doc}}</td>
                        <td>{{$document1->domaine_document}}</td>
                        <!--td>{{$document1->name_enseignant}}</td-->
                    </tr>
                @endforeach
            
          </table>
          @endif
                </div>
                <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                           @if($word == null)
                          {{ $document->appends(['select' => $select])->links() }}
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div >
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
</div>
        </div>
    </div>
</div>
@endif
@if($select == 'RESSOURCES DOC')
 <div class="container">
    <div class="row">
        <div class="col-lg-12">
         <div class="row">
            <div class="col-md-6">
              <h5> {{$select}}</h5>
            </div>
            <div class="col-md-6">
              <p style="font-size: 16px;font-weight: bold" class="text-right">{{$count_ressourcedoc}} resource(s) trouvée(s)<p>
            </div>
         </div>

            <div class="mb-3 Card_custom-card--border_5wJKy card">
                <div class="table-responsive-xl">
                   @if($count_ressourcedoc == 0)
                   <div class="">
                    <div class="alert alert-info text-center">
                      <h4>Mot Clé : {{$word}}</h4> 
                      <p style="font-size: 25px" >Aucun resultat trouvée</p>
                    </div>
                  </div>
                
                  @else
                     @foreach($ressourcedoc as $ressource)
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
                                Domaine : <span style="color: red;font-weight: bold">{{$ressource->domaine_ressource}}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings">
                                Discipline : <span style="color: red;font-weight: bold">{{$ressource->descipline}}</span>
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
                                     <h3 class="p"><span style="color: #00000">{{(DATE_FORMAT($ressource->created_at,'Y-m-d'))}}</span></h3>
                                </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
              @endforeach 

                        
                    @endif
                </div>
                <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                           @if($word == null)
                          {{ $ressourcedoc->appends(['select' => $select])->links() }}
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div >
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
</div>
        </div>
    </div>
</div>
@endif
@if($select == 'ARCHIVES OUVERTS')
<div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="row">
              <div class="col-md-6">
                <h5> {{$select}}</h5>
              </div>
              <div class="col-md-6">
                <p style="font-size: 16px;font-weight: bold" class="text-right">{{$count_ressourceao}} resource(s) trouvée(s)<p>
              </div>
            </div>

            <div class="mb-3 Card_custom-card--border_5wJKy card">
                <div class="table-responsive-xl">
                   @if($count_ressourceao == 0)
                   <div class="">
                    <div class="alert alert-info text-center">
                      <h4>Mot Clé : {{$word}}</h4> 
                      <p style="font-size: 25px" >Aucun resultat trouvée</p>
                    </div>
                  </div>
                
                  @else
                         @foreach($ressourceao as $ressource)
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
                                Ressource : <span style="color: red;font-weight: bold">{{$ressource->nationalite_ressource}}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row align-items-center ratings">
                                Discipline : <span style="color: red;font-weight: bold">{{$ressource->descipline}}</span>
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
                                     <h3 class="p"><span style="color: #00000">{{(DATE_FORMAT($ressource->created_at,'Y-m-d'))}}</span></h3>
                                </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
              @endforeach 
                    @endif
                </div>
                <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                         @if($word == null)
                          {{ $ressourceao->appends(['select' => $select])->links() }}
                        @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div >
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
</div>
        </div>
    </div>
</div>
@endif
@if($select == 'BDDs EN TEST')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-6">
              <h5> {{$select}}</h5>
            </div>
            <div class="col-md-6">
              <p style="font-size: 16px;font-weight: bold" class="text-right">{{$count_ressourcepe}} resource(s) trouvée(s)<p>
            </div>
         </div>
            <div class="mb-3 Card_custom-card--border_5wJKy card">
                <div class="table-responsive-xl">
                  @if($count_ressourcepe == 0)
                   <div class="">
                    <div class="alert alert-info text-center">
                      <h4>Mot Clé : {{$word}}</h4> 
                      <p style="font-size: 25px" >Aucun resultat trouvée</p>
                    </div>
                  </div>
                
                  @else
                     @foreach($ressourcepe as $ressource)
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
                        <div>
                          @if(($ressource->du == 'Ouvert' && $ressource->du == 'Ouvert' ) || ($ressource->du == null && $ressource->du == null))
                            <p style="color: red;font-weight: bold;margin-bottom: 0px">Accée ouvert</p>
                           @else
                            <p style="margin-bottom: 0px;font-weight: bold;">Accée ouvert Du <span style="color: red">{{$ressource->du}}</span> jusqu'au <span style="color: red">{{$ressource->au}}</span></p>
                            @endif
                          </div>
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
                                     <h3 class="p"><span style="color: #00000">{{(DATE_FORMAT($ressource->created_at,'Y-m-d'))}}</span></h3>
                                </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
              @endforeach 
                    @endif
                </div>
                <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                          @if($word == null) 
                            {{ $ressourcepe->appends(['select' => $select])->links() }}
                        @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div >
<a id="to-top" class="btn btn-lg btn-dark" href="#top" style="float: right">
    <span class="sr-only">Toggle to Top Navigation</span>
  <i class="fa fa-chevron-up"></i>
</a>
</div>
        </div>
    </div>
</div>
@endif





      @include('layouts.layout_auth')
   

        @include('layouts.layout_ressource')

   @include('layouts.layout_login')
       @include('layouts.layout_vide')
</div>

@endsection
@section('footer')
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