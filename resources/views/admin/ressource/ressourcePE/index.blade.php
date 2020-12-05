@extends('admin.layouts.layout')

@section('title')
    Reesources En Periode d'essai
@endsection

@section('header')
  <link rel="stylesheet" href="/designe/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/designe/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste des Reesources En Periode d'essai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des Reesources</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header row">
              <form class="card card-sm col-9" action="{{url('/search_ressource_PE')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Nom de la ressource.." name="ressource">
             </div>
                                    <!--end of col-->
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-3">
                <a href="{{url('/admin/ressource/ressourcePE/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter une ressource</a>
             </div>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom de Ressource</th>
                  <th>Type de Ressource</th>
                  <th>Categorie de Ressource</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ressourcePE as $ressource)
                <tr>
                  <td>{{$ressource->nom_ressource}}</td>
                  <td>{{$ressource->type_ressource}}</td>
                  <td>{{$ressource->categorie_ressource}}</td>
                  <td>
                   <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/ressource/ressourcePE/'.$ressource->id}}"></a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/ressource/ressourcePE/'.$ressource->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/ressource/ressourcePE/'.$ressource->id.'/delete'}}"></a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom de Ressource</th>
                  <th>Type de Ressource</th>
                  <th>Categorie de Ressource</th>
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
 


<script src="/designe/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/designe/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/designe/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/designe/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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