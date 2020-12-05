@extends('admin.layouts.layout')

@section('title')
    Afficher Un Cours
@endsection

@section('header')
    <style type="text/css">
      .product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:15px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}

.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}

.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-5px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:black}
.product-grid .title a:hover,.product-grid:hover .title a{color:white}
.product-grid .b a:hover,.product-grid:hover .b a{color:red}
.product-content h3{
  display: inline;
}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}

.fa-folder{
  color: yellow;
}
    </style>
@endsection

@section('content')
    
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Afficher Un Cour</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher Un Cour</li>
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
              <h3 class="card-title">Afficher Le Cour <b>{{$cours->nom_cours}}</b></h3>
            </div>
            <div class="row">
              <div class="col-4">
                <h4>Nom De Cours :</h4>{{$cours->nom_cours}}
                <h4>Année</h4>{{$cours->annee}}
                <h4>Module :</h4>{{module_cours($cours->id_module)->nom_module}}
                <h4>Domaine : </h4>{{module_cours($cours->id_module)->nom_domaine}}
              </div>
              <div class="col-4">
               <h4>Spécialite :</h4>{{module_cours($cours->id_module)->specialite}} 
               <h4>Niveaux :</h4>{{module_cours($cours->id_module)->niveaux}}
                <h4>Crée le :{{$cours->created_at}}</h4>
                </div>
            </div>
            <div class="col-12">
              <h4>
              <a href="{{ asset('cours/'.$cours->cours)}}" target="_blank" class=" elevation-8dp">Voir le fichier</a>
              </h4>
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