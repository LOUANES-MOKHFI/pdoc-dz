@extends('admin.layouts.layout')

@section('title')
  Affiche une Demande
@endsection

@section('header')
{!! Html::style('/designe/plugins/fontawesome-free/css/all.min.css') !!}
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
{!! Html::style('/designe/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}
{!! Html::style('/designe/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}
{!! Html::style('/designe/dist/css/adminlte.min.css') !!}
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Affiche une Demande</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Affiche une Demande</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dossier</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active" id="all_msg">
                  <a href="{{url('/admin/contact')}}" class="nav-link" >
                    <i class="fas fa-inbox"></i> Boit de réception
                    <span class="badge bg-primary float-right">{{count(All_demande())}}</span>
                  </a>
                </li>
                <li class="nav-item" id="read_msg">
                  <a href="{{url('/admin/contact/message/message_lu')}}" class="nav-link" >
                    <i class="far fa-file-alt"></i> Message Lu
                    <span class="badge bg-warning float-right">{{countreadDemande()}}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/admin/contact/message/message_non_lu')}}" class="nav-link" id="unread_msg">
                    <i class="fas fa-filter"></i> Message Non Lu
                    <span class="badge bg-warning float-right">{{countunreadDemande()}}</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/admin/contact/message/corbeille')}}" class="nav-link" id="deleted_msg">
                    <i class="far fa-trash-alt"></i> Corbeille
                    <span class="badge bg-danger float-right">{{count(deleted_Demande())}}</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      
 <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Demande</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>{{ $demande->name }}</h5>
                <h6>From: {{ $demande->email }}
                  <span class="mailbox-read-time float-right">{{$demande->created_at}}</span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <a href="{{ url('/demande_article1/'.$demande->id.'/delete')}}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="far fa-trash-alt"></i></a>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p><b>grade:</b>{{$demande->grade}}</p>
              </div>
              <div class="mailbox-read-message">
                <p><b>universite:</b>{{$demande->universite}}</p>
              </div>
              @if($demande->type_demande == 'article')
              <div class="mailbox-read-message">
               <p><b>Titre de l'article:</b>{{$demande->titre_article}}</p>
              </div>
              <div class="mailbox-read-message">
                <p><b>Auteur:</b>{{$demande->auteur}}</p>
              </div>
              <div class="mailbox-read-message">
                <p><b>Année d'edition:</b>@if($demande->annee_edition == Null) N'est pas defini @else {{$demande->annee_edition}} @endif</p>
              </div>
              <div class="mailbox-read-message">
                <p><b>Titre de revue:</b>{{$demande->titre_revue}}</p>
              </div>
               <div class="mailbox-read-message">
                <p><b>Lien:</b>@if($demande->lien == Null) N'est pas defini @else {{$demande->lien}} @endif</p>
              </div>
               <div class="mailbox-read-message">
                <p><b>DOI:</b>@if($demande->doi == Null) N'est pas defini @else {{$demande->doi}} @endif</p>
              </div>
              @elseif($demande->type_demande == 'livre')
              <div class="mailbox-read-message">
               <p><b>Titre de Livre :</b>{{$demande->titre_article}}</p>
              </div>
              <div class="mailbox-read-message">
                <p><b>Editeur:</b>{{$demande->editeur}}</p>
              </div>
               <div class="mailbox-read-message">
                  <p><b>Parrution:</b>@if($demande->annee_edition == Null) N'est pas defini @else {{$demande->annee_edition}} @endif</p>
              </div>
              </div>
               <div class="mailbox-read-message">
                <p><b>EAN13/ISBN:</b>@if($demande->doi == Null) N'est pas defini @else {{$demande->sujet}} @endif</p>
              </div>
              @endif
            </div>
            <div class="card-footer bg-white">
              
            </div>

            <div class="card-footer">
              <div class="float-right">


            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
  </div>
@endsection

@section('footer')



  {!! Html::script('/designe/plugins/jquery/jquery.min.js') !!}
  {!! Html::script('/designe/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
  {!! Html::script('/designe/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}
  {!! Html::script('/designe/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}
  {!! Html::script('/designe/dist/js/adminlte.min.js') !!}
  {!! Html::script('/designe/dist/js/demo.js') !!}

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
