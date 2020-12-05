@extends('admin.layouts.layout')

@section('title')
    Liste Des Invitations
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
            <h1>Liste des invitations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des Administrateurs</li>
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
              <h3 class="card-title">Liste des demandes d'addtition</h3>
             
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom et Prenom</th>
                  <th>Email</th>
                  <th>Universite</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($demande as $demande)
                  
                <tr>
                  <td>{{$demande->name}}</td>
                  <td>{{$demande->email}}</td>
                  <td>{{$demande->universite}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/demande_confirmation/'.$demande->id}}">Voir</a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/demande_confirmation/'.$demande->id.'/confirmer'}}">Confirmer</a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                     
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/demande_confirmation/'.$demande->id.'/rejeter'}}">Rejeter</a>
                      
                  </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom et Prenom</th>
                  <th>Email</th>
                  <th>Universite</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('footer')
 


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