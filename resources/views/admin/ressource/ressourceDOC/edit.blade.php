@extends('admin.layouts.layout')

@section('title')
  Modifier Une Ressource
@endsection

@section('header')
    
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier Une ressource</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Une ressource</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Modifier La ressource <b>{{$ressourceDOC->nom_ressource}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/ressource/ressourceDOC/'.$ressourceDOC->id) }}" enctype='multipart/form-data'>
                        {{ csrf_field()}}
                        @method('PUT')

                     <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom_ressource">Nom de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="nom_ressource" value="{{$ressourceDOC->nom_ressource}}" required autocomplete="nom_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="organisme_producteur">Organisme producteur</label>
                           <input id="name" type="text" class="form-control form-control-lg" name="organisme_producteur" value="{{ $ressourceDOC->organisme_producteur }}" required autocomplete="organisme_producteur" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url_ressource">URL de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="url_ressource" value="{{ $ressourceDOC->url_ressource }}" required autocomplete="url_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Type d'accès</label>
                            <select name="type_acces" class="form-control form-control-lg" value="{{$ressourceDOC->type_acces}}">
                                <option value="accès reserve">Accès Reservé</option>
                                <option value="accès ouvert">Accès Ouvert</option>
                            </select>
                        </div>
                          <div class="col-md-6 form-group">
                            <label>Type de la ressource</label>
                            <select name="type_ressource" class="form-control form-control-lg">
                              <option value="{{$ressourceDOC->type_ressource}}">{{$ressourceDOC->type_ressource}}</option>
                               <optgroup label="Types de ressources">
                                    <option value="Entrepôt numérique">Entrepôt numérique</option>
                                    <option value="Actes de conférences">Actes de conférences</option><option value="Apprentissage de langues">Apprentissage de langues</option>
                                    <option value="Bases de données">Bases de données</option>
                                    <option value="Bibliographies">Bibliographies</option>
                                    <option value="Collections numérisée">Collections numérisée</option>
                                    <option value="Corpus de textes">Corpus de textes</option>
                                    <option value="Dictionnaires">Dictionnaires</option>
                                    <option value="Encyclopédies">Encyclopédies</option>
                                    <option value="Livres numériques">Livres numériques</option>
                                    <option value="Musique en ligne">Musique en ligne</option>
                                    <option value="Presse">Presse</option>
                                    <option value="Revues">Revues</option>
                                    <option value="Thèses">Thèses</option>
                                </optgroup>
                            </select>
                        </div>
                          <div class="col-md-6 form-group">
                            <label>Descipline</label>
                            <input type="text" name="descipline" class="form-control form-control-lg" value="{{$ressourceDOC->descipline}}">
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="couverture_chronologique">Couverture chronologique</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="couverture_chronologique" value="{{$ressourceDOC->couverture_chronologique}}" autocomplete="couverture_chronologique" autofocus>
                        </div> 
                        <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                           <select class="form-control form-control-lg" name="langue">
                                <option value="{{$ressourceDOC->langue}}">{{$ressourceDOC->langue}}</option>
                                <option value="ARABE">ARABE</option>
                                <option value="FRANÇAIS">FRANÇAIS</option>
                                <option value="ANGLAIS">ANGLAIS</option>
                                <option value="ESPAGNOLE">ESPAGNOLE</option>
                                <option value="ITALIEN">ITALIEN</option>
                                <option value="TRILINGUE">TRILINGUE</option>
                                <option value="MULTILINGUE">MULTILINGUE</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="domaine_ressource">Domaine de la ressource</label>
                             <select name="domaine_ressource" class="form-control form-control-lg">
                                <!--option value="PLURIDISCIPLINAIRES">PLURIDISCIPLINAIRES</option-->
                                <option value="SCIENCES HUMAINES ET SOCIALES">SCIENCES HUMAINES ET SOCIALES</option>
                                <option value="SCIENCES DE LA VIE ET DE LA TERRE">SCIENCES DE LAVIE ET DE LA TERRE</option>
                                <option value="SCIENCES ET TECHNIQUES">SCIENCES ET TECHNIQUES</option>
                                <option value="MULTIDISCIPLINAIRES">MULTIDISCIPLINAIRES</option>

                            </select>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="logo">Logo</label>
                             <img  src="{{asset('/images/'.$ressourceDOC->image)}}" class="zoom img-fluid "  alt="">
                            <input type="file" name="logo" class="form-control-lg form-control"> 
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description">{{$ressourceDOC->description}}</textarea> 
                        </div>
                       
                         <div class="">
                            <input type="hidden" name="categorie_ressource" class="form-control-lg form-control" value="ressource DOC"> 
                        </div>
                     </div> 
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning fa fa-btn fa-edit btn-lg px-5">
                                    {{ __('Modifier') }}
                                </button>
                        </div>
                    </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('footer')
    
@endsection