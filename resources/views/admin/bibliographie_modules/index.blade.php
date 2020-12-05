@extends('admin.layouts.layout')

@section('title')
Bibliographies des modules
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
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header row">
              <h3 class="card-title col-2">Bibliographies des modules</h3>
              <form class="card card-sm col-7" action="{{url('/search_module')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Nom de module,etablissemnt,faculte,specialite..." name="name">
             </div>
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
         </div>
     </form>
             <div class="col-3">
                <a href="{{url('/bibliographie-modules/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un module</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>MODULE</th>
                 <th>ETABLISSEMENT</th>
                 <th>SPECIALITE</th>
                 <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($modules as $module)
                <tr>
                  <td>{{$module->module}}</td>
                  <td>{{$module->etablissement}}</td>
                  <td>{{$module->specialite}}</td>
                  <td>
                   <a href="{{url('/bibliographie-modules/'.$module->id)}}">Voir les réferences</a></a>
                   
                  </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th>MODULE</th>
                 <th>ETABLISSEMENT</th>
                 <th>SPECIALITE</th>
                 <th>ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$modules->links()}}
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