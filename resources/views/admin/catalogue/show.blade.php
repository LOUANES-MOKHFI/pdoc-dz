
@extends('admin.layouts.layout')

@section('title')
    Afficher Un catalogue
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
            <h1>Afficher Un catalogue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher Un catalogue</li>
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
              <h3 class="card-title">Afficher Le catalogue de <b>{{$catalogue->etablisement}}</b></h3>
            </div>
            <div class="row">
              <div class="col-4">
                <h4>Catalogue {{$catalogue->nationalite_catalogue}}</h4>
                <h4>Etablissement :</h4>{{$catalogue->etablissement}}
                <h4>structure :</h4>{{$catalogue->structure}}
              </div>
              <div class="col-4">
               <h4>Url :</h4>{{$catalogue->url}} 
                <h4>Thématique :</h4>{{$catalogue->thematique}}
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