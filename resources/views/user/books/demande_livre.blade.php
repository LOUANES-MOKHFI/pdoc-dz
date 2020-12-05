@extends('layouts.app')

@section('title')
    Demander un Livre
@endsection
@section('header')
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
  height: 100vh;
  background:#F0F8FF;
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
      <span class="current">Demander un Livre</span>
    </div>
</div>
<div class="body">
  <div class="container" style="margin-bottom: 15px">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                          <div class="card-header" id="propos">
                            <h5 class="mb-0" >
                             A Propos de DEMANDER UN LIVRE
                             <span class="mx-3 icon-keyboard_arrow_down" style="float: right"></span>
                            </h5>
                          </div>
                         
                            <div class="card-body propos">
                            <p class="mb-0" align="justify">Souvent, le chercheur se retrouve obliger d’acheter quelques ouvrages afin de finaliser sa recherché quel que soit sa forme.  Ce service  n’est pas gratuit : lorsque la demande est envoyée, la réponse lui sera rendue avec  un devis.
                              <br>
                              &thinsp;&thinsp;&thinsp;Rappelons que le livre pourrait être en format numérique ou imprimée.</p> 
                            </div>
                     
                        </div>
                </div>
              </div>
            </div>
           </div>
        </div>
  <div class="container">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Demander un Livre</h2>
      </div>
    </div>
  </div>
<div class="site-section">
        <div class="container">
        	<div class="text-center">
        		
        	</div>
            <div class="row justify-content-center">
<form method="POST" action="{{ url('demande_livre') }}" style="margin-bottom: 20px">
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
                            <label for="username">Nom et Prénom<span style="color: red"> *</span></label>
                            <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email<span style="color: red"> *</span></label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="universite">Etablissement<span style="color: red"> *</span></label>
                             <select name="universite" class="form-control form-control-lg @error('universite') is-invalid @enderror" required>
                             <option>--Votre Etablissement--</option>
                             @foreach(all_etablissement() as $etablissement)
                              <option value="{{$etablissement->nom_etablissement}}">{{$etablissement->nom_etablissement}}</option>
                            @endforeach
                          </select>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="grade">Grade<span style="color: red"> *</span></label>
                            <select class="form-control form-control-lg" name="grade" required>
                              <option>--  selectionner le grade--</option>
                              <option value="Enseignat">Enseignant</option>
                              <option value="Enseignat chercheur">Enseignant chercheur</option>
                              <option value="Doctorant">Doctorant</option>
                              <option value="Magister">Magister</option>
                              <option value="Autre">Autre</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="username">Titre de livre<span style="color: red"> *</span></label>
                            <input id="name" type="text" class="form-control form-control-lg" name="titre_article" value="{{ old('titre_article') }}" required autocomplete="titre" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Auteur de livre<span style="color: red"> *</span></label>
                            <input id="email" type="text" class="form-control form-control-lg" name="auteur" value="{{ old('auteur') }}" required autocomplete="auteur">
                        </div>
                         <div class="col-md-12 form-group">
                          <div class="row">
                            <div class="col-md-4 form-group">
                              <label for="doi">EAN13/ISBN</label>
                              <input id="doi" type="text" class="form-control form-control-lg information" name="doi" autocomplete="doi" value="{{old('doi')}}">
                            </div>
                            <div class="col-md-4 form-group">
                              <label for="editeur">Edietur</label>
                              <input id="editeur" type="text" class="form-control form-control-lg information" name="editeur" autocomplete="editeur" value="{{old('editeur')}}">
                            </div>
                            <div class="col-md-4 form-group">
                              <label for="annee_edition">Parrution</label>
                              <input id="annee_edition" type="text" class="form-control form-control-lg information" name="annee_edition" autocomplete="annee_edition" value="{{old('annee_edition')}}">
                            </div>
                          </div>
                        </div>
                        <input type="hidden" name="type_demande" value="livre">

                     </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Demander') }}
                                </button>
                        </div>
                    </div>
            </form>
        </div>          
    </div>
</div>
</div>
@endsection
@section('footer')
<script type="text/javascript">

$("#propos").click(function(){
  $(".propos").toggle();
});
</script>
<script type="text/javascript">

@endsection