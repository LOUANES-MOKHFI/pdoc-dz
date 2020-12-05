@extends('layouts.app')

@section('title')
  Ajouter un Livre
@endsection
@section('header')
 

<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css">

<style type="text/css">
  h2.mb-0{
  background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
    font-weight: bold;
  }
  .btn-primary{
  background-image: linear-gradient(to top, #00c6fb 0%, #005bea 250%);
   border-radius: 30px
}
.body {
  font-family: "Poppins", sans-serif;

  background:#F0F8FF;

}
</style>

@endsection
@section('content')
<div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
    <div class="container div">
      <a href="{{url('home')}}">Accueil</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current">Ajouter un Livre</span>
    </div>
</div>
 <div class="body">
  <div class="container">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Ajouter un Livre </h2>
      </div>
    </div>
  </div>
<div class="site-section">
        <div class="container">
          <div class="text-center">
            
          </div>
            <div class="row justify-content-center">
<form method="POST" action="{{ url('store-book') }}" enctype='multipart/form-data'>
  @if(session()->has('success'))
      <div class="alert alert-success" id="msg">
      {{ session()->get('success') }}
      </div>
@elseif(session()->has('error'))
      <div class="alert alert-warning" id="msg">
      {{ session()->get('error') }}
      </div>
@endif
                        @csrf
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="titre">Titre de livre</label>
                            <input id="titre" type="text" class="form-control form-control-lg" name="titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="auteur">Auteur</label>
                            <input id="auteur" type="auteur" class="form-control form-control-lg" name="auteur" value="{{ old('auteur') }}" required autocomplete="auteur">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="editeur">Editeur</label>
                            <input id="editeur" type="editeur" class="form-control form-control-lg" name="editeur" value="{{ old('editeur') }}" autocomplete="editeur">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                           <select class="form-control form-control-lg" name="langue" required autocomplete="langue">
                               <option value="">--Langue--</option>
                               <option value="arabe">Arabe</option>
                               <option value="anglais">Anglais</option>
                               <option value="français">Français</option>
                            </select>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="adress_bib">Source de Livre</label>
                            <input id="lien" type="txet" class="form-control form-control-lg" name="adress_bib" autocomplete="adress_bib" value="{{ old('adress_bib')}}" placeholder="www.Drive.pdf.com/book-name"  required>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="isbn">EAN13/ISBN</label>
                            <input id="isbn" type="isbn" class="form-control form-control-lg" name="isbn" autocomplete="isbn" value="{{ old('isbn') }}">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="parution">Parution</label>
                            <input id="parution" type="parution" class="form-control form-control-lg" name="parution" autocomplete="parution" value="{{ old('parution') }}">
                        </div>
                        
                          <div class="col-md-6 form-group">
                            <label for="sujet">Domaine(s)</label>
                            <input id="sujet" type="sujet" class="form-control form-control-lg" name="sujet" required autocomplete="sujet" value="{{ old('sujet') }}">
                        </div>
                         
                            <input id="prix" type="hidden" class="form-control form-control-lg" name="prix" autocomplete="prix" value="{{ old('prix') }}">

                          <div class="col-md-6 form-group">
                            <label for="image">Image</label>
                            <input id="langue" type="file" class="form-control form-control-lg" name="image" required autocomplete="langue">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="livre_pdf">Livre PDF</label>
                           <input type="file" name="livre_pdf" class="form-control form-control-lg" id="pdf"  required 
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </div>
                     </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary btn-lg px-5" onclick="validate1(0)">
                                    {{ __('Ajouter') }}
                          </button>
                        </div>
                    </div>
            </form>
        </div>          
    </div>
</div>

@endsection
@section('footer')

@endsection