@extends('admin.layouts.layout')

@section('title')
    Bibliographie Des Modules
@endsection
@section('header')
<style type="text/css">

.tabs-schedule.nav-tabs {
    border: 0px;
    border-bottom: 2px solid #f5f5f5;
    margin-bottom: 40px;
    margin-left: 0px;
    text-align: center;
}

.tabs-schedule.nav-tabs > li {
    padding: 0px;
}

.tabs-schedule.nav-tabs > li > a {
    font-size: 20px;
    display: block;
    padding: 4px 20px;
    color: #333;
    font-family: "Open Sans", sans-serif;
    font-weight: 700;
    margin-bottom: -2px;
    position: relative;
    border: 0px;
}


.event-info {
    padding-right: 30px;
    text-align: left;
    text-transform: uppercase;
}

.event-info span {
    display: block;
    font-size: 16px;
}

.event-info .event-hall {
    margin-top: 10px;
    font-style: normal;
    font-size: 12px;
    padding: 3px 10px;
    border-right: 3px solid #8bcb26;
    background: #f5f5f5;
    font-weight: 400;
}

.event-detail {
    border-left: 2px solid #8bcb26;
    padding-left: 30px;
    position: relative;
}

.event-detail:before {
    width: 14px;
    height: 14px;
    border-radius: 7px;
    background: #fff;
    position: absolute;
    left: -7px;
    top: 10px;
    content: "";
}

.event-detail:after {
    content: "\f105";
    font-family: "FontAwesome";
    position: absolute;
    left: -2px;
    top: 3px;
    color: #8bcb26;
    font-size: 28px;
}

.event-detail h3 {
    margin-bottom: 20px;
}

.event-detail h3 a {
    color: #555;
}

.event-detail .img-fluid {
    border-radius: 5px;
}

.event-detail h4 {
    margin-bottom: 0px;
    font-weight: 600;
    font-size: 14px;
    color: #666;
}
.font-weight-bold{
    font-size: 25px;
}
</style>

@endsection
@section('content')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bibliographies des modules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Bibliographies des modules</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<div id="schedule" class="pt90 pb90" style="margin-bottom: 30px">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mr-auto ml-auto text-center">
                <div class="center-title mb60">
                   <p class="font-weight-bold">Affiche le module <span style="color: red">{{module_reference($reference->id_bibliographie)->module}}</span></p>
        @if(Auth::user()->genre == 'enseignant')
         <p><strong>Vous peuvez ajouter d'autre Module <span>{{module_reference($reference->id_bibliographie)->module}}</span><a href="{{url('bibliographie-des-modules/add-module')}}"
          target="_blank"> Ajouter un Module</a> </p>
        @endif
                </div>
            </div>
        </div>
        <div class="row margin-b-30">
          <div class="col-md-10 mr-auto ml-auto">
            <div>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="01">
                  <div class="row margin-b-30">
                    <div class="col-sm-6 event-info">
                      <span>Etablissement :<span style="color: red">{{module_reference($reference->id_bibliographie)->etablissement}}</span></span>
                      <span>Faculte :<span style="color: red">{{module_reference($reference->id_bibliographie)->faculte}}</span></span>
                      <span>Spécialite :<span style="color: red">{{module_reference($reference->id_bibliographie)->specialite}}</span></span>
                    </div>
                    <div class="col-sm-6 event-detail">
                      <h3><a href="#">Les réfferences de module</a></h3>
                      <div class="row margin-b-20">
                        <div class="col-sm-10">
                          <ul class="">
                            <li>Titre :<span style="color: red">{{$reference->titre}}</span></li>
                            <li>Auteur :<span style="color: red">{{$reference->auteur}}</span></li>
                            <li>Editeur :<span style="color: red">{{$reference->auteur}}</span></li>
                            <li>Année d'edition :<span style="color: red">{{$reference->annee_edition}}</span></li>
                          </ul>
                        </div>
                      </div>
                      <a href="{{asset('module/'.module_reference($reference->id_bibliographie)->lien)}}" target="_blank" class="btn btn-danger">Télècharger</a>
                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')


@endsection
