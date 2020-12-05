@extends('layouts.app')

@section('title')
    Partager Mes Documents
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
a, button, input[type=button], input[type=submit], label {
    cursor: pointer;
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
#document,#description,#lien{
  display: none;
}
</style>

@endsection
@section('content')
<div class="custom-breadcrumns" style="margin-top: 70px">
      <div class="container div">
        <a href="{{url('home')}}">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Déposer Mes Documents </span>
      </div>
</div>
<div class="body">
 <div class="container" style="margin-bottom: 70px">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Déposer Un Document</h2>
      </div>
    </div>
  </div>
<div class="" >
        <div class="container">
          <div class="text-center">
            
          </div>
            <div class="row justify-content-center">
<form method="POST" action="{{ url('add_document') }}" enctype='multipart/form-data' style="margin-bottom: 20px">
  @include('layouts.flash_msg')
                        @csrf
                    <div class="row">
                           <div class="col-md-6 form-group">
                            <label for="etablissement">Etablissement<span style="color: red"> *</span></label>
                            <input id="etablissement" type="text" class="form-control form-control-lg" name="etablissement" value="{{ old('etablissement') }}"  autocomplete="etablissement" autofocus required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="faculte">Faculté<span style="color: red"> *</span></label>
                            <input id="faculte" type="text" class="form-control form-control-lg" name="faculte" value="{{ old('faculte') }}"  autocomplete="faculte" autofocus>
                        </div>
                        @if(Auth::user()->genre == 'enseignant')
                            <input id="grade_enseignant" type="hidden" class="form-control form-control-lg" name="grade_enseignant" value="{{ Auth::user()->grade }}"  autocomplete="grade_enseignant" autofocus>
                        @elseif(Auth::user()->genre == 'etudiant')
                            <input id="specialite" type="hidden" class="form-control form-control-lg" name="grade_enseignant" value="{{ Auth::user()->specialite}}"  autocomplete="specialite" autofocus>
                        @elseif(Auth::user()->genre == 'autre')
                            <input id="specialite" type="hidden" class="form-control form-control-lg" name="grade_enseignant" value="{{ Auth::user()->grade}}"  autocomplete="specialite" autofocus>
                        @elseif(Auth::user()->genre == 'bibliothécaire')
                         <input id="specialite" type="hidden" class="form-control form-control-lg" name="grade_enseignant" value="{{ Auth::user()->genre}}"  autocomplete="specialite" autofocus>
                        @endif
                         <div class="col-md-6 form-group">
                            <label for="titre_article">Domaine de document<span style="color: red"> *</span></label>
                            <input id="domaine_document" type="text" class="form-control form-control-lg" name="domaine_document" value="{{ old('domaine_document') }}" required autocomplete="domaine_document" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="titre_document">Titre de document<span style="color: red"> *</span></label>
                            <input id="titre_doc" type="text" class="form-control form-control-lg" name="titre_doc" value="{{ old('titre_doc') }}"  autocomplete="titre_doc" autofocus required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="auteur_doc">Auteur</label>
                            <input id="auteur_doc" type="text" class="form-control form-control-lg" name="auteur_doc" value="{{ old('auteur_doc') }}" autocomplete="auteur_doc" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="fichier">Année d'edition</label>
                             <input type="text" name="annee_edition" class="form-control form-control-lg" value="{{old('annee_edition')}}">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url">URL de document</label>
                            <input id="url" type="text" class="form-control form-control-lg" name="url" value="{{ old('url') }}" autocomplete="url" autofocus>
                        </div>  
                         <div class="col-md-6 form-group">
                            <label for="type_doc">Type de docuement<span style="color: red"> *</span></label>
                            <select class="form-control form-control-lg" name="type_doc" id="type_doc" id="type_doc" required>
                              <option value="">--Type de document--</option>
                              <option value="Livre">Livre</option>
                              <option value="Chapitre de Livre">Chapitre de livre</option>
                              <option value="Resume de Livre">Résume de livre</option>
                              <option value="Memoire de Licence">Memoire de licence</option>
                              <option value="Memoire de Master 2">Memoire de master</option>
                              <option value="These de Doctorat">Thése de doctorat</option>
                              <option value="Article de Revue">Article de revue</option>
                              <option value="Brochure">Brochure</option>
                              <option value="Postére">Postére</option>
                              <option value="Comunication sceintifique">Comunication sceintifique</option>
                              <option value="Cours">Cours</option>
                              <option value="Blog Scientifique">Blog scientifique</option>
                              <option value="Site web">Site web</option>
                              <option value="Pré print">Pré print</option>
                              <option value="Url">lien</option>
                              <option value="Autres">Autres</option>
                            </select>
                        </div> 
                        <div class="col-md-12 form-group a" id="lien">
                            <label for="lien">lien</label>
                             <input type="text" name="lien" class="form-control form-control-lg"
                             value="{{old('lien')}}">
                        </div> 
                        <div class="col-md-12 form-group a" id="document">
                            <label for="fichier">Document</label>
                            <input type="file" name="fichier" class="form-control form-control-lg"
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </div> 
                         <div class="col-md-12 form-group a" id="description">
                            <label for="description">Description de document</label>
                             <textarea type="text" name="description" class="form-control form-control-lg"></textarea>
                        </div> 
                          <input id="name_enseignant" type="hidden" class="form-control form-control-lg" name="name_enseignant" value="{{Auth::user()->name}}"  autocomplete="name_enseignant" autofocus>
                          <input id="email_enseignant" type="hidden" class="form-control form-control-lg" name="email_enseignant" value="{{Auth::user()->email}}"  autocomplete="email_enseignant">
                          <input type="hidden" name="etablissement" value="{{Auth::user()->universite}}">
                      </div> 
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                          {{ __('Partager') }}
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
             $('#type_doc').on('change',function(e){
                console.log(e);
                var type = e.target.value;
               // alert(module);
                $('.a').hide();
                if(type == 'Resume de Livre')
                {
                $('#description').show();
                 }
              else if(type == 'Blog Scientifique' || type == 'Site web' || type == 'Url')
              {
                 $('#lien').show();
              }
               else
                {
              $('#document').show();
                }
              });
              $('#check2').on('change',function(e){
                console.log(e);
                var module = e.target.value;
               // alert(module);
                $('.a').hide();
                $('#etudiant').show();

              });
            </script>
@endsection
