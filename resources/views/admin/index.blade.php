@extends('admin.layouts.layout')

@section('title')
    Administrateur
@endsection

@section('header')
    <style type="text/css">
      .uppercase{
        text-transform: uppercase;
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
		<h2 class="text-center uppercase">Bienvenu chez votre espace administrateur</h2>
        <br>
        <h1 class="text-center">{{getSetting()->site_name}}</h1>
	</div>
	<div class="row">
		@if(Auth::user()->id == 1)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>7<sup style="font-size: 15px">Parametres</sup></h3>

              <p>Parametres de site</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-tachometer-alt"></i>
            </div>
            <a href="{{url('admin/sitesetting')}}" class="small-box-footer">Modifier les parametres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              
              <h3>
                @if(Auth::user()->id != 1)
                @else
                {{count(student())}}
                @endif
                <sup style="font-size: 15px">Etudiants</sup>
              </h3>

              <p>les Etudiants</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('/student')}}" class="small-box-footer">Liste des Etudiants <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                 @if(Auth::user()->id != 1)
                @else
                {{count(teacher())}}
                @endif
                <sup style="font-size: 15px">Enseignant(s)</sup>
              </h3>
              <p>Liste des Enseignants</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ url('teacher')}}" class="small-box-footer">Liste des Enseignants <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		@if(Auth::user()->id == 1)
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count(admin())}}<sup style="font-size: 15px">Administrateur</sup></h3>

              <p>Les Administrateurs De Site</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('administrateur')}}" class="small-box-footer">Liste des Admins <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endif
      </div>

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count(getAll_ressourceDOC())}}<sup style="font-size: 15px">Ressources DOC</sup></h3>

              <p>Ressources DOC</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('admin/ressource/ressourceDOC')}}" class="small-box-footer">Liste des ressources <i class="fa fa-arrow-circle-right"></i></a>
          </div>
         
        </div>
       
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count(All_ressourcePE())}}<sup style="font-size: 15px">Ressources PE</sup></h3>

              <p>Ressources En Periode d'essai</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('/admin/ressource/ressourcePE')}}" class="small-box-footer">Liste des ressources <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
      @if(Auth::user()->id == 1)

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{Count_AllBooks()}}<sup style="font-size: 15px">Livres</sup></h3>
              <p>Liste des Livres</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ url('/admin/books')}}" class="small-box-footer">Liste des Livres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		@endif
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{count(All_ressourceAO())}}<sup style="font-size: 15px">Ressources AO</sup></h3>

              <p>Production scientifique</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-tachometer-alt"></i>
            </div>
            <a href="{{url('/admin/ressource/ressourceAO')}}" class="small-box-footer">Liste des Ressources <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

</section>
   </div>
@endsection

@section('footer')
    
@endsection