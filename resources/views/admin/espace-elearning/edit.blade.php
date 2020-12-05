@extends('admin.layouts.layout')

@section('title')
  Modifier Un module
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
            <h1>Modifier Un module</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Un module</li>
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
              <h3 class="card-title">Modifier L'administrateur <b>{{$module->nom_module}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/modules/'.$module->id) }}">
                        {{ csrf_field()}}
                        @method('PUT')
                        <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="nom_module">Nom de module<span style="color: red"> *</span></label>
                            <input id="nom_module" type="text" class="form-control form-control-lg @error('nom_module') is-invalid @enderror" name="nom_module" value="{{ $module->nom_module }}" required autocomplete="nom_module">
                                @error('nom_module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="url">Faculte<span style="color: red"> *</span></label>
                            <input id="faculte" type="text" class="form-control form-control-lg @error('faculte') is-invalid @enderror" name="faculte" required autocomplete="faculte" value="{{ $module->faculte }}">

                                @error('faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="domaine">Domaine<span style="color: red"> *</span></label>
                            <input id="domaine" type="text" class="form-control form-control-lg @error('domaine') is-invalid @enderror" name="domaine" value="{{$module->domaine}}" required autocomplete="domaine" autofocus>

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="specialite">Spécialite<span style="color: red"> *</span></label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{$module->specialite}}" required autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="niveaux">Niveaux<span style="color: red"> *</span></label>
                            <select class="form-control-lg form-control" name="niveaux">
                              <option value="{{$module->niveaux}}">{{$module->niveaux}}</option>
                              <option value="1er année Licence">1er année Licence</option>
                              <option value="2eme année Licence">2eme année Licence</option>
                              <option value="3eme année Licence">3eme année Licence</option>
                              <option value="1er année Master">1er année Master</option>
                              <option value="2eme année Master">2eme année Master</option>

                            </select>
                        </div>
                        <input type="hidden" name="id_etablissement" value="{{$module->id_etablissement}}">
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-lg px-5">
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