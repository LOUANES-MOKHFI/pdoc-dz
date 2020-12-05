@extends('user.dashboard.dashboard')

@section('title')
      Dashboard
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
            <h1><i class="fas fa-home"></i> Accueil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
	<div class="">
		<h2 class="text-center">Bienvenu dans Votre Compte</h2>
        <br>
        <h1 class="text-center">{{getSetting()->site_name}}</h1>
	</div>
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{Count_AllBooks_user(Auth::user()->id)}}<sup style="font-size: 15px"> Livres partager</sup></h3>
              <p>Liste des Livres</p>
            </div>
            <div class="icon">
              <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <a href="{{ url('/user/books')}}" class="small-box-footer"> Liste des Livres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

         <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{Count_Alldocument_user(Auth::user()->id)}}<sup style="font-size: 15px"> Documents Ajoutée</sup></h3>
              <p>Liste des document</p>
            </div>
            <div class="icon">
             <i class="fa fa-file" aria-hidden="true"></i>
            </div>
            <a href="{{ url('/user/documents')}}" class="small-box-footer"> Liste des Livres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{Count_Allcatalogue_user(Auth::user()->id)}}<sup style="font-size: 15px"> Catalogues Ajoutée</sup></h3>
              <p>Liste des catalogues</p>
            </div>
            <div class="icon">
              <i class="fa fa-file" aria-hidden="true"></i>
            </div>
            <a href="{{ url('/user/catalogues')}}" class="small-box-footer"> Liste des catalogues <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
	
      </div>

</section>
   </div>

@endsection

@section('footer')

@endsection
