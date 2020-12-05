@extends('admin.layouts.layout')

@section('title')
Bibliographies des modules
@endsection

@section('header')
{!! Html::style('/designe/plugins/fontawesome-free/css/all.min.css') !!}
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
{!! Html::style('/designe/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/designe/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/designe/dist/css/adminlte.min.css') !!}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bibliographies des modules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Bibliographies des modules</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="body">
<div class="container">
    <div class="align-items-center">
      <div class="col-lg-12 text-center">
        <h2 class="mb-0">Ajouter Un Reference pou le module <span style=" color: red">{{$module->module}}</span></h2>
      </div>
    </div>
  </div>
<div class="site-section">
  <div class="container">
    <div class="text-center">
   <form method="POST" action="{{ url('/bibliographie-module/add_reference') }}" enctype='multipart/form-data'>
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
