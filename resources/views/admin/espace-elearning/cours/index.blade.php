@extends('admin.layouts.layout')

@section('title')
    Liste Des Cours
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
            <h1>Liste des Cours @if(!empty($module))  de module
              <span style="color: red">{{$module->nom_module}}</span>
              @endif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des Cours</li>
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
              <h3 class="card-title col-2">Liste des Cours </h3>
              <form class="card card-sm col-7" action="{{url('/search_cours')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Nom de Cours.." name="nom_cours">
             </div>
                                    <!--end of col-->
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
          @if(!empty($module))
             <div class="col-3">
                <a href="{{url('/admin/cours/create/'.$module->id)}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un Cour</a>
             </div>
            </div>
          @endif

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom de  Cours</th>
                  <th>Module</th>
                  <th>Année</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if($cours->count() == 0)
                  <tr>
                    <td colspan="4" align="center"><h5 style="color:red">La liste des cours est vide</h5></td>
                  </tr>
                  @endif
                  @foreach($cours as $cour)
                 
                <tr>
                  <td>{{$cour->nom_cours}}</td>
                  <td>{{module_cours($cour->id_module)->nom_module}}</td>
                  <td>{{$cour->annee}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/cours/'.$cour->id}}"></a>
                  </td>
                </tr>
               
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom de  Cours</th>
                  <th>Module</th>
                  <th>Année</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              {{$cours->links()}}

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