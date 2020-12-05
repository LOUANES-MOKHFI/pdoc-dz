@extends('admin.layouts.layout')

@section('title')
    Modifier Un Etudiant
@endsection

@section('header')
    
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier Un Etudiant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Un Etudiant</li>
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
              <h3 class="card-title">Modifier L'etudiant <b>{{$user->name}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('student/'.$user->id) }}">
                        {{ csrf_field()}}
                        @method('PUT')

                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="username">Nom et Prénom</label>
                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ 
                            	$user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pword">Mot de pass</label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="pword2">Confirmer votre mot de passe</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                        </div>
                     </div>
                     
                      <div class="col-md-12 form-group">
                            <label for="universite">Universite</label>
                            <input id="universite" type="text" class="form-control form-control-lg @error('universite') is-invalid @enderror" name="universite" value="{{ 
                            	$user->universite }}" required autocomplete="universite" autofocus>

                                @error('universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row">
                         <div class="col-md-6 form-group">
                            <label for="faculte">Faculte</label>
                            <input id="faculte" type="text" class="form-control form-control-lg @error('faculte') is-invalid @enderror" name="faculte" value="{{ 
                            	$user->faculte }}" required autocomplete="faculte" autofocus>

                                @error('faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="domaine">Domaine</label>
                            <input id="domaine" type="text" class="form-control form-control-lg @error('domaine') is-invalid @enderror" name="domaine" value="{{ 
                            	$user->domaine }}" required autocomplete="domaine" autofocus>

                                @error('domaine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       <div class="col-md-6 form-group">
                            <label for="specialite">Specialite</label>
                            <input id="specialite" type="text" class="form-control form-control-lg @error('specialite') is-invalid @enderror" name="specialite" value="{{ 
                            	$user->specialite }}" autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-6 form-group">
                           <label for="matricule">Matricule</label>
                           <input id="matricule" type="text" class="form-control form-control-lg @error('matricule') is-invalid @enderror" name="matricule" value="{{ 
                            	$user->matricule }}" autocomplete="matricule" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      <input type="hidden" name="genre" value="{{ 
                            	$user->genre }}"> 
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
    
@endsection

@section('footer')
    
@endsection