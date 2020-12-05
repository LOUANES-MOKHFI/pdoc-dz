@extends('layouts.app')

@section('title')
   Bibliographie Des Modules
@endsection
@section('header')
<style type="text/css">
a{
  color: blue;
  font-weight: bold;
  font-size: 17px;
  font-family: arial;
  padding: 0 0 0 0;
}
  .error{
        outline: 1px solid #f00;
      }
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
<div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Bibliographie Des Modules</span>
      </div>
</div>
<div class="body">
<div class="container">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Ajouter Un Module</h2>
      </div>
    </div>
  </div>
<div class="site-section">
  <div class="container">
    <div class="text-center">
   <form method="POST" action="{{ url('/bibliographie-des-module/add_reference') }}" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="id" value="{{$module->id}}">
                    <div class="row">
                         <div class="col-md-6 form-group">
                          <label for="Titre">Titre<span style="color: red"> *</span></label>
                          <input type="text" name="titre" class="form-control form-control-lg" value="{{old('titre')}}">
                        </div>
                        <div class="col-md-6 form-group">
                           <label for="auteur">Auteur<span style="color: red"> *</span></label><input id="etablissement" type="text" class="form-control form-control-lg @error('auteur') is-invalid @enderror" name="auteur" value="{{ old('auteur') }}" required autocomplete="auteur">

                                @error('auteur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="editeur">Editeur<span style="color: red"> *</span></label>
                            <input id="editeur" type="text" class="form-control form-control-lg @error('editeur') is-invalid @enderror" name="editeur" required autocomplete="editeur" value="{{ old('editeur') }}">

                                @error('editeur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="annee_edition">Année d'edition<span style="color: red"> *</span></label>
                            <input id="annee_edition" type="text" class="form-control form-control-lg @error('annee_edition') is-invalid @enderror" name="annee_edition" value="{{ old('annee_edition') }}" required autocomplete="annee_edition" autofocus>

                                @error('annee_edition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-12">
                          <input type="submit" name="valider" class="btn btn-primary btn-lg px-5" value="Valider">
                        </div>
                    </div>
            </form>
     
    </div>
  </div>         
</div>
</div>

@endsection
@section('footer')
   
@endsection
