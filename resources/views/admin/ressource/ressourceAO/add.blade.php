@extends('admin.layouts.layout')

@section('title')
    Ajouter Une Ressource
@endsection

@section('header')
    <style type="text/css">
         .pays{
          display: none;
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
            <h1>Ajouter Une Ressource "Archive Ouvert"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter une Ressource "Archive Ouvert"</li>
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
              <h3 class="card-title">Ajouter Une Ressource "Archive Ouvert"</h3>
            </div>
<form method="POST" action="{{url('admin/ressource/ressourceAO') }}" enctype='multipart/form-data'>
                        @csrf
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nom_ressource">Nom de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="nom_ressource" value="{{ old('nom_ressource') }}" required autocomplete="nom_ressource" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="organisme_producteur">Organisme producteur</label>
                           <input id="name" type="text" class="form-control form-control-lg" name="organisme_producteur" value="{{ old('organisme_producteur') }}" required autocomplete="organisme_producteur" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="url_ressource">URL de la ressource</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="url_ressource" value="{{ old('url_ressource') }}" required autocomplete="url_ressource" autofocus>
                        </div>
                      <input type="hidden" name="type_acces" value="accès ouvert">
                        <div class="col-md-6 form-group">
                            <label>Discipline</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="descipline" value="{{ old('descipline') }}" autocomplete="descipline" autofocus required>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="couverture_chronologique">Couverture chronologique</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="couverture_chronologique" value="{{ old('couverture_chronologique') }}" autocomplete="couverture_chronologique" autofocus>
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                            <select class="form-control form-control-lg" name="langue" required="">
                                <option value="">--Langue-</option>
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
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" class="form-control-lg form-control"> 
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="nationalite_ressource">Région</label>
                            <select name="nationalite_ressource" class="form-control form-control-lg region" required>
                              <option value="">--Region--</option>
                                <option value="Algériennes">Algériennes </option>
                                <option value="Etrangères">Etrangères </option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group pays">
                            <label for="nationalite_ressource">Pays</label>
                            <input name="pays" class="form-control form-control-lg" value="{{old('pays')}}">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description"></textarea> 
                        </div>
                         <div class="">
                            <input type="hidden" name="categorie_ressource" class="form-control-lg form-control" value="Production scientifique des universités"> 
                        </div>
                        
                     </div> 
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Ajouter') }}
                                </button>
                        </div>
                    </div>
            </form>

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