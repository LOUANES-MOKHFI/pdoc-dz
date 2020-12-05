@extends('admin.layouts.layout')

@section('title')
    Affiche Une Actualité
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
            <h1>Affiche Une Actualité</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Affiche une Actualité</li>
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
              <h3 class="card-title">Affiche L'actualité <b>{{$actualite->titre}}</b></h3>
            </div>
            <div class="row">
              <div class="form-group col-md-6">  
                  <h2>Titre: {{$actualite->titre}}</h2>
                  <h4>Lien: <span style="color: red">{{$actualite->lien}}</span></h4>
                  <h5>Etat: <span>{{ $actualite->desactive==1? 'Desactive':'active' }}</span></h5>
              </div>
              <div class="form-group col-md-6">  
                <img  src="{{asset('/images/'.$actualite->image)}}" class="zoom img-fluid "  alt="">
              </div>
               <div class="form-group col-md-12 border">  
                  <p>{{$actualite->description}}</p>
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