@extends('admin.layouts.layout')

@section('title')
  Modifier Un Administrateur
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
            <h1>Modifier Un Administrateur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Un Administrateur</li>
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
              <h3 class="card-title">Modifier L'administrateur <b>{{$universite->nom_etablissement}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('universite/'.$universite->id) }}">
                        {{ csrf_field()}}
                        @method('PUT')
                  <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="type_etablissement">Type d'etablissement</label>
                           <select name="type_etablissement" class="form-control form-control-lg" required>
                            <option value="{{$universite->type_etablissement}}">{{$universite->type_etablissement}}</option>
                            <option value="Université">Université</option>
                            <option value="Centres Universitaires">Centres Universitaires</option>
                            <option value="Ecoles Préparatoires">Ecoles Préparatoires</option>
                            <option value="Ecoles Normales">Ecoles Normales</option>
                            <option value="Ecoles Nationales Supérieures">Ecoles Nationales Supérieures</option>
                          </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="etablissement">Etablissement</label>
                            <input id="etablissement" type="text" class="form-control form-control-lg" name="nom_etablissement" value="{{ $universite->nom_etablissement }}" required autocomplete="etablissement">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="lien">Lien d'etablissement</label>
                            <input id="lien" type="text" class="form-control form-control-lg" name="lien" value="{{ $universite->lien}}" autocomplete="lien">
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