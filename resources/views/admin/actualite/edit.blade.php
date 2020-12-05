@extends('admin.layouts.layout')

@section('title')
  Modifier Une Actualité
@endsection

@section('header')
    
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier Une Actualité</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Une Actualité</li>
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
              <h3 class="card-title">Modifier L'actualité <b>{{$actualite->titre}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/actualites/'.$actualite->id) }}" enctype='multipart/form-data'>
                        {{ csrf_field()}}
                        @method('PUT')

                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="username">Titre de l'actualite</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="titre" value="{{ $actualite->titre }}" required autocomplete="titre" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lien">Lien</label>
                            <input id="lien" type="text" class="form-control form-control-lg" name="lien" required value="{{$actualite->lien}}">
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="desactive">Etat de l'actualite</label>
                             {!! Form::select("desactive",['1'=>'active' ,'0'=>'desactive'], $actualite->desactive ,['class'=>'form-control'])!!}
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="image">image de l'actualite</label>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <img  src="{{asset('/images/'.$actualite->image)}}" class="zoom img-fluid "  alt="">
                            <input type="file" name="image" value="">
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label >Voulez-vous l'ajouter comme nouveaute?</label>
                            {!! Form::select("nouveaute",['1'=>'oui' ,'0'=>'non'], $actualite->nouveaute ,['class'=>'form-control'])!!}
                        </div>
                          <div class="col-md-12 form-group">
                            <label for="description">Description</label>
                            <textarea id="description" type="text" class="form-control form-control-lg" name="description" required autocomplete="description">{{$actualite->description}}</textarea> 
                        </div>
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
    
@endsection