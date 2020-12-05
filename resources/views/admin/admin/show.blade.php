@extends('admin.layouts.layout')

@section('title')
    Afficher Un Administrateur
@endsection

@section('header')
    
@endsection

@section('content')
    
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Afficher Un Administrateur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher Un Administrateur</li>
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
              <h3 class="card-title">Afficher L'Admin <b>{{$user->name}}</b></h3>
            </div>
            <div class="row">
              <div class="col-4">
                <h4>Genre :</h4>{{$user->genre}}
                <h4>Nom de l'{{$user->genre}}  :</h4>{{$user->name}}
              </div>
              <div class="col-4">
               <h4>Email :</h4>{{$user->email}} 
                <h4>Universite :</h4>{{$user->universite}}
                </div>
            </div>
    </div>
  </div>
</div>
</section>

</div>
@endsection

@section('footer')
    
@endsection
@section('content')
    
@endsection

@section('footer')
    
@endsection