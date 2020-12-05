@extends('admin.layouts.layout')

@section('title')
  Modifier Une Td
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
            <h1>Modifier Une Td</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Une Td</li>
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
              <h3 class="card-title">Modifier Le Td <b>{{$tds->nom_td}}</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/tds/'.$tds->id) }}">
                        {{ csrf_field()}}
                        @method('PUT')
                         <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="nom_cours">Nom de Td<span style="color: red"> *</span></label>
                            <input id="nom_cours" type="text" class="form-control form-control-lg @error('nom_cours') is-invalid @enderror" name="nom_cours" value="{{$tds->nom_td}}" required autocomplete="nom_cours">
                                @error('nom_cours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="universite">Année<span style="color: red"> *</span></label>
                           <input type="text" name="annee" class="form-control form-control-lg" value="{{$tds->annee}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="cours">Td<span style="color: red"> *</span></label>
                              <input type="file" name="fichier" class="form-control form-control-lg" value="{{$tds->tds}}">
                        </div>
                      </div> 
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-lg px-5">
                                    {{ __('Valider') }}
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