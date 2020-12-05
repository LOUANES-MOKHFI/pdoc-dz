@extends('admin.layouts.layout')

@section('title')
    Afficher Une Demande d'inscription
@endsection

@section('header')
    <style type="text/css">
        
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Afficher Une Demande d'inscription</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher Une Demande</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
  <div class="row">
    <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Afficher La Demande d'inscription  de <b>{{$user->name}}</b></h3>
            </div>
            <div class="row">
              <div class="col-4">
                <h4>Genre :</h4>{{$user->genre}}
                <h4>Nom de l'{{$user->genre}}  :</h4>{{$user->name}}
              </div>
              <div class="col-4">
               <h4>Email :</h4>{{$user->email}} 
                <h4>Etablissement :</h4> @if($user->universite == null) n'est pas definie @else {{$user->universite}} @endif
                </div>
                <div class="col-4">
                  @if($user->genre == 'enseignant')
                <h4>Grade :</h4> @if($user->grade == null) n'est pas definie @else {{$user->grade}} @endif
                <h4>Specialité :</h4>@if($user->specialite == null) n'est pas definie @else {{$user->specialite}} @endif
                @elseif($user->genre == 'etudiant')
                <h4>Faculte :</h4> @if($user->faculte == null) n'est pas definie @else {{$user->faculte}} @endif
                <h4>Domaine :</h4> @if($user->domaine == null) n'est pas definie @else {{$user->domaine}} @endif
                <h4>Specialité :</h4> @if($user->specialite == null) n'est pas definie @else {{$user->specialite}} @endif
                <h4>Matricule :</h4> @if($user->matricule == null) n'est pas definie @else {{$user->matricule}} @endif
                @elseif($user->genre == 'autre')
                <h4>Grade :</h4> @if($user->grade == null) n'est pas definie @else {{$user->grade}} @endif
                <h4>Domaine :</h4> @if($user->specialite == null) n'est pas definie @else {{$user->specialite}} @endif
                @endif
                </div>
            </div>
            <div class="col-12 text-center">
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/demande_confirmation/'.$user->id.'/confirmer'}}">Confirmer</a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/demande_confirmation/'.$user->id.'/rejeter'}}">Rejeter</a>  
            </div>
    </div>
  </div>
</div>
</section>

</div>

@endsection

@section('footer')
    
@endsection