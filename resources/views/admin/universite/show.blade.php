@extends('admin.layouts.layout')

@section('title')
 Affiche une etablissement
@endsection

@section('header')
    
@endsection
@extends('admin.layouts.layout')

@section('title')
    Affiche une etablissement
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
            <h1>Affiche une etablissement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Affiche une etablissement</li>
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
              <h3 class="card-title">Afficher L'etablissement <b>{{$universite->nom_etablissement}}</b></h3>
            </div>
            <div class="row">
              <div class="col-8">
                <h4>nom de l'etablissement :</h4>{{$universite->nom_etablissement}}
                <h4>Type de l'etablissement:</h4>{{$universite->type_etablissement}}
                <h4>Lien de l'etablissement:</h4><a href="{{url($universite->lien)}}">{{$universite->lien}}</a>
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