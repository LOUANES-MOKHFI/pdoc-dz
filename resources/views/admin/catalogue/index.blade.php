@extends('admin.layouts.layout')

@section('title')
    Liste Des Catalogues
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
            <h1>Liste des Catalogues</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{'/admin'}}">Accueil</a></li>
              <li class="breadcrumb-item active">Liste des Catalogues</li>
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
              <h3 class="card-title col-2">Liste des Catalogues</h3>
              <form class="card card-sm col-7" action="{{url('/search_catalogue')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Etablissement" name="etablissement">
             </div>
            <div class="col-auto">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
         </div>
     </form>
             <div class="col-3">
                <a href="{{url('/admin/catalogue/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un Catalogue</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Etablissement</th>
                  <th>Structure</th>
                  <th>Catalogue</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($catalogues as $catalogue)
                <tr>
                  <td>{{$catalogue->etablissement}}</td>
                  <td>{{$catalogue->structure}}</td>
                  <td>{{$catalogue->nationalite_catalogue}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/catalogue/'.$catalogue->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/catalogue/'.$catalogue->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/catalogue/'.$catalogue->id.'/delete'}}"></a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Etablissement</th>
                  <th>Structure</th>
                  <th>Catalogue</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$catalogues->links()}}
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