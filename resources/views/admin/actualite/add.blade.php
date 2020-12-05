@extends('admin.layouts.layout')

@section('title')
    Ajouter Une Actualité
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
            <h1>Ajouter Une Actualité</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter une Actualité</li>
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
              <h3 class="card-title">Ajouter Une Actualité</h3>
            </div>
<form method="POST" action="{{ url('admin/actualites') }}" enctype='multipart/form-data'>
                        @csrf
                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="username">Titre de l'actualite</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lien">Lien</label>
                            <input id="lien" type="text" class="form-control form-control-lg" name="lien" required >
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Voulez-vous l'ajouter comme nouveaute?</label>
                            {!! Form::select("nouveaute",['1'=>'oui' ,'0'=>'non'], null ,['class'=>'form-control'])!!}
                        </div>
                       
                         <div class="col-md-6 form-group">
                            <label for="image">image de l'actualite</label>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <input type="file" name="image" value="">
                        </div>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description"></textarea> 
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
    
@endsection