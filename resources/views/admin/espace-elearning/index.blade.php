@extends('admin.layouts.layout')

@section('title')
    Liste Des Modules
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
            <h1>Liste des Modules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des Modules</li>
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
              <h3 class="card-title col-2">Liste des Modules</h3>
              <form class="card card-sm col-7" action="{{url('/search_modules')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Nom de Module,niveaux,specialite.." name="nom_module">
             </div>
                                    <!--end of col-->
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-3">
                <a href="{{url('/admin/modules/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un module</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom de  module</th>
                  <th>Etablissement</th>
                  <th>Spécialite</th>
                  <th>Niveaux</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if($modules->count() == 0)
                  <tr>
                    <td colspan="5" align="center"><h5 style="color:red">La liste des Modules est vide</h5></td>
                  </tr>
                  @endif
                  @foreach($modules as $module)
                 
                <tr>
                  <td>{{$module->nom_module}}</td>
                  <td>{{etablissemnt_module($module->id_etablissement)->nom_etablissement}}</td>
                  <td>{{$module->specialite}}</td>
                  <td>{{$module->niveaux}}</td>

                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/modules/'.$module->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/modules/'.$module->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/modules/'.$module->id.'/delete'}}"></a>
                  </td>
                </tr>
               
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                     <th>Nom de  module</th>
                  <th>Etablissement</th>
                  <th>Spécialite</th>
                  <th>Niveaux</th>
                  <th>Action</th>
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