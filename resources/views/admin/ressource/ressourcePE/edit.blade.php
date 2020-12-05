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
              <h3 class="card-title">Modifier La ressource <b>{{$ressourcePE->nom_ressource}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/ressource/ressourcePE/'.$ressourcePE->id) }}" enctype='multipart/form-data'>
                        {{ csrf_field()}}
                        @method('PUT')

                     <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom_ressource">Nom de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="nom_ressource" value="{{$ressourcePE->nom_ressource}}" required autocomplete="nom_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="organisme_producteur">Organisme producteur</label>
                           <input id="name" type="text" class="form-control form-control-lg" name="organisme_producteur" value="{{ $ressourcePE->organisme_producteur }}" required autocomplete="organisme_producteur" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url_ressource">URL de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="url_ressource" value="{{ $ressourcePE->url_ressource }}" required autocomplete="url_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Type d'accès</label>
                            <select name="type_acces" class="form-control form-control-lg" >
                              <option value="{{$ressourcePE->type_acces}}">{{$ressourcePE->type_acces}}</option>
                                <option value="accès reserve">Accès Reservé</option>
                                <option value="accès ouvert">Accès Ouvert</option>
                            </select>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="du">Accès Du </label>
                            <input id="name" type="date" class="form-control form-control-lg" name="du" value="{{$ressourcePE->du}}" required autocomplete="du" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="au">Au</label>
                            <input id="name" type="date" class="form-control form-control-lg" name="au" value="{{$ressourcePE->au}}" required autocomplete="au" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label>Type de la ressource</label>
                            <select name="type_ressource" class="form-control form-control-lg">
                              <option value="{{$ressourcePE->type_ressource}}">{{$ressourcePE->type_ressource}}</option>
                              <option>--Type de la ressource--</option>
                               <optgroup label="Types de ressources">
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
                            <label >Discipline</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="descipline" value="{{$ressourcePE->descipline}}" autocomplete="descipline" autofocus>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="couverture_chronologique">Couverture chronologique</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="couverture_chronologique" value="{{$ressourcePE->couverture_chronologique}}" autocomplete="couverture_chronologique" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                           <select class="form-control form-control-lg" name="langue">
                                <option value="{{$ressourcePE->langue}}">{{$ressourcePE->langue}}</option>
                                <option value="ARABE">ARABE</option>
                                <option value="FRANÇAIS">FRANÇAIS</option>
                                <option value="ANGLAIS">ANGLAIS</option>
                                <option value="ESPAGNOLE">ESPAGNOLE</option>
                                <option value="ITALIEN">ITALIEN</option>
                                <option value="TRILINGUE">TRILINGUE</option>
                                <option value="MULTILINGUE">MULTILINGUE</option>
                            </select>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description">{{$ressourcePE->description}}</textarea> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="logo">Logo</label>
                             <img  src="{{asset('/images/'.$ressourcePE->image)}}" class="zoom img-fluid "  alt="">
                            <input type="file" name="logo" class="form-control-lg form-control"> 
                        </div>
                         <div class="col-md-6 form-group">
                            <input type="hidden" name="categorie_ressource" class="form-control-lg form-control" value="reesource en periode d'essai"> 
                        </div>
                         <div class="col-md-6 form-group">
                            <input type="hidden" name="domaine_ressource" class="form-control-lg form-control" value="reesource en periode d'essai"> 
                        </div>
                         <div class="col-md-6 form-group">
                            <input type="hidden" name="nationalite_ressource" class="form-control-lg form-control" value="ressource en periode d'essai"> 
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