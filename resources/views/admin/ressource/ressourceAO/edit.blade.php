@extends('admin.layouts.layout')

@section('title')
  Modifier Une Ressource
@endsection

@section('header')
    <style type="text/css">
       .pays{
        display: none
      }
    </style>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier Une ressource</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Une ressource</li>
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
              <h3 class="card-title">Modifier La ressource <b>{{$ressourceAO->nom_ressource}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/ressource/ressourceAO/'.$ressourceAO->id) }}" enctype='multipart/form-data'>
                        {{ csrf_field()}}
                        @method('PUT')

                     <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom_ressource">Nom de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="nom_ressource" value="{{$ressourceAO->nom_ressource}}" required autocomplete="nom_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="organisme_producteur">Organisme producteur</label>
                           <input id="name" type="text" class="form-control form-control-lg" name="organisme_producteur" value="{{ $ressourceAO->organisme_producteur }}" required autocomplete="organisme_producteur" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url_ressource">URL de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="url_ressource" value="{{ $ressourceAO->url_ressource }}" required autocomplete="url_ressource" autofocus>
                        </div>
                        <input type="hidden" name="type_acces" value="accès ouvert">
                         <div class="col-md-6 form-group">
                            <label >Discipline</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="descipline" value="{{$ressourceAO->descipline}}" autocomplete="descipline" autofocus>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="couverture_chronologique">Couverture chronologique</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="couverture_chronologique" value="{{$ressourceAO->couverture_chronologique}}" autocomplete="couverture_chronologique" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                           <select class="form-control form-control-lg" name="langue">
                                <option value="{{$ressourceAO->langue}}">{{$ressourceAO->langue}}</option>
                                <option value="ARABE">ARABE</option>
                                <option value="FRANÇAIS">FRANÇAIS</option>
                                <option value="ANGLAIS">ANGLAIS</option>
                                <option value="ESPAGNOLE">ESPAGNOLE</option>
                                <option value="ITALIEN">ITALIEN</option>
                                <option value="TRILINGUE">TRILINGUE</option>
                                <option value="MULTILINGUE">MULTILINGUE</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="nationalite_ressource">Région</label>
                            <select name="nationalite_ressource" class="form-control form-control-lg region" >
                              <option value="{{$ressourceAO->nationalite_ressource}}">{{$ressourceAO->nationalite_ressource}}</option>
                                <option value="Algériennes">Algériennes </option>
                                <option value="Etrangères">Etrangères </option>
                            </select>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="logo">Logo</label>
                             <img  src="{{asset('/images/'.$ressourceAO->image)}}" class="zoom img-fluid "  alt="">
                            <input type="file" name="logo" class="form-control-lg form-control"> 
                        </div>
                          <div class="col-md-12 form-group pays">
                            <label for="nationalite_ressource">Pays</label>
                            <input name="pays" class="form-control form-control-lg" value="{{$ressourceAO->pays}}">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description">{{$ressourceAO->description}}</textarea> 
                        </div>
                       
                         <div class="">
                            <input type="hidden" name="categorie_ressource" class="form-control-lg form-control" value="Production scientifique des universités"> 
                        </div>
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

@section('footer')
    <script type="text/javascript">
        $('.region').on('change',function(e){
                console.log(e);
                var region = e.target.value;
                if(region == "Etrangères")
                {
                  $('.pays').show();
                }
                else{
                  $('.pays').hide();
                }

               
              });
    </script>
@endsection