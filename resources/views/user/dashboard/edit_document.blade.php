@extends('user.dashboard.dashboard')

@section('title')
     Modifier un document
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
#document,#description,#lien{
  display: none;
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
          <h3 class="uppercase"><span>{{$document->etablissement}}</span></h3>
        </div>
    
      @include('layouts.flash_msg')
      
   <form method="POST" action="{{ url('/user/update_d/'.$document->id) }}" enctype='multipart/form-data'>
  @include('layouts.flash_msg')
                        @csrf
                    <div class="row">
                           <div class="col-md-6 form-group">
                            <label for="etablissement">Etablissement<span style="color: red"> *</span></label>
                            <input id="etablissement" type="text" class="form-control form-control-lg" name="etablissement" value="{{ $document->etablissement }}"  autocomplete="etablissement" autofocus required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="faculte">Faculté<span style="color: red"> *</span></label>
                            <input id="faculte" type="text" class="form-control form-control-lg" name="faculte" value="{{  $document->faculte }}"  autocomplete="faculte" autofocus>
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
                            <input id="domaine_document" type="text" class="form-control form-control-lg" name="domaine_document" value="{{  $document->domaine_document }}" required autocomplete="domaine_document" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="titre_document">Titre de document<span style="color: red"> *</span></label>
                            <input id="titre_doc" type="text" class="form-control form-control-lg" name="titre_doc" value="{{ $document->titre_doc }}"  autocomplete="titre_doc" autofocus required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="auteur_doc">Auteur</label>
                            <input id="auteur_doc" type="text" class="form-control form-control-lg" name="auteur_doc" value="{{  $document->auteur_doc }}" autocomplete="auteur_doc" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="fichier">Année d'edition</label>
                             <input type="text" name="annee_edition" class="form-control form-control-lg" value="{{  $document->annee_edition}}">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url">URL de document</label>
                            <input id="url" type="text" class="form-control form-control-lg" name="url" value="{{  $document->url}}" autocomplete="url" autofocus>
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
                             value="{{ $document->lien}}">
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
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning fa fa-btn fa-edit btn-lg px-5">
                                    {{ __('Modifier') }}
                                </button>
                        </div>
                        <div class="col-md-6">
                            <a href="{{'/user/document/'.$document->id.'/delete'}}" class="btn btn-danger fa fa-btn btn-lg px-5"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>
                        </div>
                    </div>
                    </div>
            </form>
        
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
