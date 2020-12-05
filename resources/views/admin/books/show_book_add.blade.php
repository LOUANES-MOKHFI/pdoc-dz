@extends('admin.layouts.layout')

@section('title')
    Affiche Un Livre
@endsection

@section('header')
    <style type="text/css">
      
.view-all>a{
  color: #007bff;
  font-size: 18px
}

.images_3_of_1 img {
    border: 1px solid #aeaeae;
    box-shadow: 3px 3px 5px 1px #aeaeae;
}

   </style>
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Affiche Un Livre</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Affiche un Livre</li>
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
              <h3 class="card-title">Affiche Le Livre <b>{{$book->titre}}</b></h3>
            </div>
           <div class="wrap">              
    <div class="services_grid col-12">
    <div class="content_bottom">
      <div class="image group marketing">
        <div class="row">
      <div class="grid images_3_of_1 col-md-4">
        <img  src="{{asset('/images/'.$book->image)}}" title="" width="200" height="300" class="imagecache imagecache-new_in_massira imagecache-default imagecache-new_in_massira_default" alt="{{$book->titre}}">  
      </div>
    
        <div class="col-md-8">
            <div class="alert alert-info">
                Informations de livre</div>
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span></div>
            <table class="table">
                <tbody>
                  <tr class="alert alert-danger">
                        <td>Titre</td>
                        <td>{{$book->titre}}</td>

                    </tr>
                     <tr class="alert alert-success">
                        <td>Domaine(s) </td>
                        <td>{{$book->sujet}}</td>
                    </tr>
                    <tr >
                        <td>Auteur(s) </td>
                        <td>{{$book->auteur}}</td>
                    </tr>
                    <tr class="alert alert-danger">
                        <td>Editeur(S)</td>
                        <td>{{$book->editeur}}</td>
                    </tr>
                    <tr class="alert alert-success">
                        <td>parution</td>
                        <td>{{$book->parution}}</td>
                    </tr>
                     <tr>
                        <td>Source De livre </td>
                        <td>
                           @if($book->adress_bib == null)
                           <a onclick="document.getElementById('vide').style.display='block'" >Lien de livre
                            </a>
                           @else

                            <a href="{{url($book->adress_bib)}}">Lien de livre</a>
                          @endif
                        </td>
                    </tr>
                    <tr class="alert alert-danger">
                        <td>EAN13/ISBN </td>
                        <td>{{$book->isbn}}</td>
                    </tr>

                </tbody>
            </table>

        <div class="grid">
            <div class="views-field views-field-addtocartlink">
                <div class="field-content">
                  <div class="add-to-cart">
                     @if($book->adress_bib == null && $book->livre_pdf == null)
                      <a onclick="document.getElementById('vide').style.display='block'"  class="form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white">Voir le livre
                   </a>
                    @elseif($book->livre_pdf == NULL)
                    <a class="form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{url($book->adress_bib)}}" target="_blank">Voir le livre</a>
                     @else
                     <a class="form-submit node-add-to-cart btn elevation-8dp text-center" style="background-color: #f23a2e;width:150px;color: white" href="{{ asset('/livre/'.$book->livre_pdf )}}" target="_blank">Voir le livre</a>
                     @endif
                       <a class="btn btn-warning fa fa-btn" href="{{'/book_add/'.$book->id.'/confirmer'}}">Confirmer</a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far" href="{{'/book_add/'.$book->id.'/rejeter'}}">Rejeter</a> 
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>

        </div>
        <hr>
      </div>
        </div>
               @include('layouts.layout_vide')



      </div>
    </div>
  </div>
</section>
</div>


@endsection

@section('footer')
    
@endsection