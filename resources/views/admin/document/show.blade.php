@extends('admin.layouts.layout')

@section('title')
    Afficher Un document partager
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
            <h1>Afficher Un document partager</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Afficher Un document</li>
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
              <h3 class="card-title">Afficher Le document partager <b>{{$document->titre_doc}}</b></h3>
            </div>
            <div class="row container">
              <div class="col-4">
                <h4>Titre :</h4>{{$document->titre_doc}}
                <h4>Domaine:  :</h4>{{$document->titre_doc}}
                <h4>Auteur :</h4>{{$document->auteur_doc}} 
                
              </div>
              <div class="col-4">
                <h4>type de document :</h4>{{$document->type_doc}}
               <h4>Nom de l'enseignant :</h4> {{$document->name_enseignant}}
                <h4>Grade :</h4>{{$document->grade_enseignant}}
                
                </div>
                <div class="col-4">
                  <h4>Email :</h4>{{$document->email_enseignant}}
                <h4>Type d'etablissement:</h4> {{$document->type_etablissement}}
                <h4>Etablissement :</h4> {{$document->etablissement}}
                <h4>Faculte :</h4>{{$document->faculte}}
                </div>
            </div>
            <div class="col-12">
               @if($document->fichier != Null)
                         <a href="{{ asset('/document/'.$document->fichier )}}" target="_blank" class=" elevation-8dp">{{$document->titre_doc}}</a>

                           @elseif($document->lien != Null)
                           <a href="{{url($document->lien)}}" target="_blank" class=" elevation-8dp">{{$document->titre_doc}}</a>
                            @elseif($document->url != Null)
                            <a href="{{url($document->url)}}" target="_blank" class=" elevation-8dp">{{$document->titre_doc}}</a>
                           @else
                           <div>
                            <h4>Resume de {{$document->titre_doc}}:</h4>
                             <p>{{Crypt::decrypt($document->description)}}</p>
                           </div>
                          
                           @endif
            </div>
            <div class="col-12 text-center">
               @if($document->confirmation == 1)
                    <a class="btn btn-success" style="color: white">Document Accepter</a>
                    @else
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/document/'.$document->id.'/confirmer'}}">Confirmer</a>
                      @endif
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/document/'.$document->id.'/rejeter'}}">Rejeter</a>  
            </div>
    </div>
  </div>
</div>
</section>

</div>

@endsection

@section('footer')
    
@endsection