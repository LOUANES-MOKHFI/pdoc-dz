@extends('admin.layouts.layout')

@section('title')
  Modifier Un Livre
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
            <h1>Modifier Un Livre</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier Un Livre</li>
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
              <h3 class="card-title">Modifier L'actualité <b>{{$book->titre}}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ url('admin/books/'.$book->id) }}" enctype='multipart/form-data'>
                        {{ csrf_field()}}
                        @method('PUT')

                <div class="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="titre">Titre de livre</label>
                            <input id="titre" type="text" class="form-control form-control-lg" name="titre" value="{{$book->titre}}" required autocomplete="titre" autofocus>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="auteur">Auteur</label>
                            <input id="auteur" type="auteur" class="form-control form-control-lg" name="auteur" value="{{$book->auteur}}" required autocomplete="auteur">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="editeur">Editeur</label>
                            <input id="editeur" type="editeur" class="form-control form-control-lg" name="editeur" value="{{$book->editeur}}" required autocomplete="editeur">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="langue">Langue</label>
                            <select class="form-control form-control-lg" name="langue" required autocomplete="langue">
                               <option value="{{$book->langue}}">{{$book->langue}}</option>
                               <option value="arabe">Arabe</option>
                               <option value="anglais">Anglais</option>
                               <option value="français">Français</option>
                            </select>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="adress_bib">Source de Livre</label>
                            <input id="adress_bib" type="adress_bib" class="form-control form-control-lg" name="adress_bib" required autocomplete="adress_bib" value="{{$book->adress_bib}}">
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="isbn">EAN13</label>
                            <input id="isbn" type="isbn" class="form-control form-control-lg" name="isbn" required autocomplete="isbn" value="{{$book->isbn}}">
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="sujet">Domaine(s)</label>
                            <input id="sujet" type="sujet" class="form-control form-control-lg" name="sujet" required autocomplete="sujet" value="{{$book->sujet}}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="parution">Parution</label>
                            <input id="parution" type="parution" class="form-control form-control-lg" name="parution" autocomplete="parution" value="{{ $book->parution }}">
                        </div>
                            <input id="prix" type="hidden" class="form-control form-control-lg" name="prix" required autocomplete="prix" value="{{$book->prix}}">
                        </div>
                         <div class="col-md-6 form-group">
                            <label for="image">Image</label>
                            <img  src="{{asset('/images/'.$book->image)}}" class="zoom img-fluid "  alt="">
                            <input id="langue" type="file" class="form-control form-control-lg" name="image" autocomplete="langue">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="livre_pdf">Livre PDF</label>
                            <h5>
                              @if($book->livre_pdf != null)
                              <a href="{{ asset('/livre/'.$book->livre_pdf )}}" target="_blank" class=" elevation-8dp">voir le livre</a> 
                              @endif
                           <input type="file" name="livre_pdf" class="form-control form-control-lg"
                             accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
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