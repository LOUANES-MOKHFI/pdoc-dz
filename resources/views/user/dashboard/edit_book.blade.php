@extends('user.dashboard.dashboard')

@section('title')
     Modifier un livre
@endsection

@section('header')
   <style type="text/css">
   	.text-center{
  float: center;
}
.body {
  font-family: "Poppins", sans-serif;
  background:#F0F8FF;

}
  .error{
        outline: 1px solid #f00;
      }

.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

.card .card-header {
    border-bottom-color: #f9f9f9;
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    padding: 10px 25px;
    display: flex;
    align-items: center;
}

.card .card-header, .card .card-body, .card .card-footer {
    background-color: transparent;
    padding: 20px 25px;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}


.rounded-circle {
    border-radius: 50% !important;
}

.table .order-list li+li {
    margin-left: -14px;
    background: transparent;
}
.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px;
}

.progress-bar {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: column;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    -webkit-transition: width .6s ease;
    transition: width .6s ease;
}

.uppercase{
  text-transform: uppercase;
}

input {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 10px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #512DA8;
    outline-width: 0
}

::placeholder {
    color: #EEEEEE;
    opacity: 1
}

:-ms-input-placeholder {
    color: #EEEEEE
}

::-ms-input-placeholder {
    color: #EEEEEE
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn-blue {
    background-color: #512DA8;
    width: 100%;
    color: #fff;
    border-radius: 6px
}

.btn-blue:hover {
    background-color: #311B92;
    color: #fff;
    cursor: pointer
}

.card-0 {
    color: #311B92;
    border-radius: 20px;
    min-height: 352px;
    margin-top: 80px;
    padding: 30px
}

.carousel-indicators {
    position: absolute;
    bottom: -100px;
    display: -webkit-box !important
}


.content {
    color: #000;
    font-size: 14px
}

.social {
    margin-top: 150px
}

@media screen and (max-width: 991px) {
    .card1 {
        border-bottom-left-radius: 0px;
        border-top-right-radius: 20px
    }

    .card2 {
        border-bottom-left-radius: 20px;
        border-top-right-radius: 0px
    }
}
h6{
  font-weight: bold;
}
#ar{display: none}

.optionbox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-20%, -20%)
}

.optionbox select {
    background: #E91E63;
    color: #fff;
    padding: 10px;
    width: 250px;
    height: 50px;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 48px rgb(93, 15, 9);
    -webkit-appearance: button;
    outline: none
}

.optionbox:before {
    content: '\f358';
    font-family: "Font Awesome 5 free";
    position: absolute;
    top: 0;
    right: 0;
    height: 50px;
    width: 50px;
    background: #E91E63;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    pointer-events: none
}

.optionbox:hover:before {
    background: #c72059
}
   </style>
@endsection

@section('content')


<div class="body">
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <section class="content">

    
     <div class="card-body">
<div class="col-md-12 col-12 col-sm-12">
   
    <div class="card">
      
      <div class="card-header row">
       
        <div class="col-md-12 col-sm-12">
          <h3 class="uppercase"><span>{{$book->titre}}</span></h3>
        </div>
    
      @include('layouts.flash_msg')
      @if($book->nbr_page == null)
  
    <form method="POST" action="{{ url('user/update_b_g/'.$book->id) }}" enctype='multipart/form-data'>
                         @csrf
   

                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="titre">Titre de livre</label>
                            <input id="titre" type="text" class="form-control form-control-lg" name="titre" value="{{$book->titre}}" required autocomplete="titre" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="auteur">Auteur</label>
                            <input id="auteur" type="auteur" class="form-control form-control-lg" name="auteur" value="{{$book->auteur}}" required autocomplete="auteur">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="editeur">Editeur</label>
                            <input id="editeur" type="editeur" class="form-control form-control-lg" name="editeur" value="{{$book->editeur}}" required autocomplete="editeur">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                            <select class="form-control form-control-lg" name="langue" required autocomplete="langue">
                               <option value="{{$book->langue}}">{{$book->langue}}</option>
                               <option value="arabe">Arabe</option>
                               <option value="anglais">Anglais</option>
                               <option value="français">Français</option>
                            </select>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="adress_bib">Source de Livre</label>
                            <input id="adress_bib" type="adress_bib" class="form-control form-control-lg" name="adress_bib" required autocomplete="adress_bib" value="{{$book->adress_bib}}">
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="isbn">EAN13</label>
                            <input id="isbn" type="isbn" class="form-control form-control-lg" name="isbn" required autocomplete="isbn" value="{{$book->isbn}}">
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="sujet">Domaine(s)</label>
                            <input id="sujet" type="sujet" class="form-control form-control-lg" name="sujet" required autocomplete="sujet" value="{{$book->sujet}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="parution">Parution</label>
                            <input id="parution" type="parution" class="form-control form-control-lg" name="parution" autocomplete="parution" value="{{ $book->parution }}">
                        </div>
                            <input id="prix" type="hidden" class="form-control form-control-lg" name="prix" required autocomplete="prix" value="{{$book->prix}}">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="image">Image</label>
                            <img  src="{{asset('/images/'.$book->image)}}" class="zoom img-fluid "  alt="">
                            <input id="langue" type="file" class="form-control form-control-lg" name="image" autocomplete="langue">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="livre_pdf">Livre PDF</label>
                            <h5>
                              @if($book->livre_pdf != null)
                              <a href="{{ asset('/livre/'.$book->livre_pdf )}}" target="_blank" class=" elevation-8dp">voir le livre</a> 
                              @endif
                           <input type="file" name="livre_pdf" class="form-control form-control-lg"
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </div>
                     </div>
                     </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning fa fa-btn fa-edit btn-lg px-5">
                                    {{ __('Modifier') }}
                                </button>
                        </div>
                        <div class="col-md-6">
                            <a href="{{'/user/book/'.$book->id.'/delete'}}" class="btn btn-danger fa fa-btn btn-lg px-5"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>
                        </div>
                    </div>
            @else
    <form method="POST" action="{{ url('/user/update_b_p/'.$book->id) }}"  enctype='multipart/form-data'>
     @csrf
 <div class="row mt-3">
      <div class="col-md-6">
        <label class="mb-0">
                <h6 class="mb-0 text-sm">Titre de livre</h6>
                            </label> <input type="text" name="titre" placeholder="Titre" value="{{$book->titre}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Auteur</h6>
                            </label> <input type="text" name="auteur" placeholder="Auteur" value="{{$book->auteur}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Editeur</h6>
                            </label> <input type="text" name="editeur" placeholder="Editeur" value="{{$book->editeur}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Langue</h6>
                            </label>
                            <select class="form-control form-control-lg" name="langue" required autocomplete="langue">
                               <option value="{{$book->langue}}">--Langue--</option>
                               <option value="arabe">Arabe</option>
                               <option value="anglais">Anglais</option>
                               <option value="français">Français</option>
                            </select> </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Pays d’edition</h6>
                            </label> <input type="text" name="pays_edition" placeholder="Pays " value="{{$book->pays_edition}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Date d’edition </h6>
                            </label>
                            <input type="text" name="date_edition" placeholder="Date d'edition" value="{{$book->parution}}" required></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Nombre des pages</h6>
                            </label> <input type="text" name="nbr_page" placeholder="nombre de page" value="{{$book->nbr_page}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Format</h6>
                            </label>
                            <input type="text" name="format" placeholder="Format" value="{{$book->format}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">ISBN 10</h6>
                            </label> <input type="text" name="isbn10" placeholder="ISBN10" value="{{$book->isbn10}}"> </div>
                        <div class="col-md-4"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">ISBN 13</h6>
                            </label>
                            <input type="text" name="isbn13" placeholder="ISBN13" value="{{$book->isbn13}}">
                        </div>
                        <div class="col-md-4"><label class="mb-0">
                                <h6 class="mb-0 text-sm">EAN</h6>
                            </label>
                            <input type="text" name="isbn" placeholder="EAN" value="{{$book->isbn}}">
                        </div>
                    </div>
                     <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Mots clés</h6>
                            </label> <input type="text" name="mot_cle" placeholder="Mots clés" value="{{$book->mot_cle}}" required> </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Domaine</h6>
                            </label>
                            <input type="text" name="sujet" placeholder="Domaine" value="{{$book->sujet}}" required>
                        </div>
                    </div>
                      <div class="row mt-3">
                        <div class="col-md-12">
                           @if(session()->has('resume'))
                            <div class="alert alert-warning" id="msg">
                            {{ session()->get('resume') }}
                            </div>
                            @endif
                            <label class="mb-0">
                                <h6 class="mb-0 text-sm">Résumé</h6>
                            </label> 
                            <textarea class="form-control" type="text" name="resume" placeholder="Résumé" required>{{Crypt::decrypt($book->resume)}} </textarea>
                          </div>
                    </div>
                      <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Sommaire</h6>
                            </label>
                            <input type="file" name="sommaire" class="form-control form-control-lg" id="pdf"   
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" >
                           </div>
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Image de livre</h6>
                            </label>
                            <input type="file" name="image" class="form-control form-control-lg" id="pdf"   
                            >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">Fichier de livre</h6>
                            </label>
                            <input type="file" name="livre_pdf" class="form-control form-control-lg" id="pdf"   
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </div>
                         <div class="col-md-3"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">prix de feuilletage</h6>
                            </label>
                            <input type="text" name="prix_f" class="form-control form-control-lg" id="prix" required placeholder="20.00$" value="{{$book->prix_f}}">
                        </div>
                         <div class="col-md-3"> <label class="mb-0">
                                <h6 class="mb-0 text-sm">prix de téléchargement</h6>
                            </label>
                            <input type="text" name="prix" class="form-control form-control-lg" id="prix" required placeholder="20.00$" value="{{$book->prix}}">
                        </div>
                    </div>
                    <div class="row px-3 mb-3"> </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                         <button class="btn btn-blue text-center mb-1 py-2">Modifier</button> </div>
                         <div class="col-md-6">
                             <a href="{{'/user/book/'.$book->id.'/delete'}}" class="btn btn-danger fa fa-btn btn-lg px-5"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>
                        </div>
                    </div>
                </div>
    </form>
            @endif
        
      </div>
      <div class="card-body">
        <div class="table-responsive">
        
        </div>
      </div>
    </div>
  
  </div>
 </div>
 </div>
   </div>

 

@endsection

@section('footer')

@endsection
