@extends('admin.layouts.layout')

@section('title')
    Afficher Une Ressource
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
            <h1>Afficher Une Ressource DOC</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher une Ressource DOC</li>
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
              <h3 class="card-title">Afficher la ressource <b>{{$ressourceDOC->nom_ressource}}</b></h3>
            </div>
            <div class="row">
              <div class="card co-md-4">
               <img  src="{{asset('/images/'.$ressourceDOC->logo)}}" class="zoom img-fluid "  alt="">
              </div>
              <div class="col-md-6">
                <h4>Nom de la ressource :</h4>{{$ressourceDOC->nom_ressource}}
                <h4>Organisme producteur :</h4>{{$ressourceDOC->organisme_producteur}}
                <h4>Domaine de la ressource :</h4>{{$ressourceDOC->domaine_ressource}}
                <h4>Couverture chronologique :</h4>{{$ressourceDOC->couverture_chronologique}}
                <h4>URL de la ressource :</h4>{{$ressourceDOC->url_ressource}}
                <h4>Type de la ressource :</h4>{{$ressourceDOC->type_ressource}}
                <h4>Type d'accès :</h4>{{$ressourceDOC->type_acces}}
                <h4>Discipline :</h4>{{$ressourceDOC->descipline}}
                <h4>Langue :</h4>{{$ressourceDOC->langue}}
              </div>
              <div class="col-md-2">
                <a href="{{'/admin/ressource/ressourceDOC'}}" class="btn btn-primary btn-lg px-5" style="margin-top:50px">Retour</a>
              </div>
              
                
            </div>
            <div class="col-md-12">
              <h4>Description:</h4>
             <div class="card-body">
               <p>{{$ressourceDOC->description}}</p>
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